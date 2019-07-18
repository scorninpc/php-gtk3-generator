<?php

// Define absolute path
defined("APPLICATION_PATH") || define("APPLICATION_PATH", dirname(__FILE__));

/**
 *
 */
class Fetch
{
	/**
	 *
	 */
	public function __construct($widget, $start_with, $extends, $macro)
	{
		// ----
		$filename = APPLICATION_PATH . "/tmp/" . $widget . ".def";
		if(!file_exists($filename)) {

			// ----
			$def_content = "\n";

			// ----
			// $url = "https://developer.gnome.org/gtksourceview/3.20/" . $widget . ".html";
			$url = "https://developer.gnome.org/gtk3/stable/" . $widget . ".html";
			$html = file_get_contents($url);

			// ----
			$dom = new DOMDocument();
			$dom->loadHTML($html);
			$finder = new DomXPath($dom);

			// ----
			$classname = $widget . ".functions_details";
			$elements = $finder->query("//*[contains(concat(' ', normalize-space(@name), ' '), ' $classname ')]");

			// ----
			$elements = $elements->item(0)->parentNode->childNodes;

			// ----
			for($i=0; $i<=$elements->length; $i++) {

				// ----
				$element = $elements->item($i);
				if(!$element) continue;

				// ----
				if(get_class($element) == "DOMElement") {

					// ----
					if($element->getAttribute("class") == "refsect2") {

						// ----
						$t = str_replace("\t", " ", $element->childNodes->item(4)->textContent);
						$t = str_replace(" ", " ", $t); // Note this isn't space
						$t = str_replace("\r", "", $t);
						$t = str_replace("\n", " ", $t);
						$t = str_replace("const ", "", $t);
						$t = preg_replace('/\s+/', ' ', $t);

						$def_content .= $t . "\n\n";
					}
				}

			}

			file_put_contents($filename, $def_content);
		}

		// 
		$content = file_get_contents($filename);

		// 
		$count = preg_match_all('/^([a-zA-Z]*)\ (.*)\ \((.*)\,{0,}\)/im', $content, $output);

		// 
		$methods_out = [];
		for($i=0; $i<$count; $i++) {
			$func_name = str_replace("* ", "", $output[2][$i]);

			//
			$out = [];
			$out[] = "			'" . str_replace($start_with, "", $func_name) . "' => [";
			$out[] = "				'cpp-method' => \"" . $func_name . "\",";
			$out[] = "				'static' => FALSE,";
			$out[] = "				'return-type' => " . (($output[1][$i] == "void") ? "NULL" : "\"" . $output[1][$i] . "\"") . ",";
			
			//
			if($output[3][$i] == "void") {
				$out[] = "				'parameters' => NULL";
			}
			else {
				
				$parameters = explode(",", $output[3][$i]);
				if(count($parameters) == 1) {
					$out[] = "				'parameters' => NULL";
				}
				else {
					$out[] = "				'parameters' => [";

					foreach($parameters as $index => $parameter) {
						if($index == 0) continue;

						$param = explode(" ", ltrim(rtrim($parameter)));

						$out[] = "					[";
						$out[] = "						'type' => \"" . $param[0] . "\",";
						$out[] = "						'name' => \"" . str_replace("*", "", $param[1]) . "\",";
						$out[] = "					],";
					}

					$out[] = "				],";
				}
			}

			$out[] = "			],";


			$methods_out[] = implode("\n", $out);

		}


		//
		$all_out = "<?php

	return [

		'configs' => [
			'cpp-object' => \"" . $widget . "\",
			'name' => \"" . $widget . "_\",
			'extends' => \"" . $extends . "_\",
			'cast_macro' => \"" . $macro . "\"
		],
		

		'dependences' => [
			\"" . $extends . ".h\",
		],


		'methods' => [
" . implode("\n\n\t\t\t//--------------\n", $methods_out) . "
		]



	];";

		// -------------
		$filename = APPLICATION_PATH . "/defs/" . $widget . ".php";
		file_put_contents($filename, $all_out);

	}
}

// $file = APPLICATION_PATH . "/../defs/" . $argv[1] . ".php";
$widget = "GtkFontButton";
$start_with = "gtk_font_button_";
$extends = "GtkButton";
$macro = "GTK_COLOR_FONT";

$notebook = new Fetch($widget, $start_with, $extends, $macro);