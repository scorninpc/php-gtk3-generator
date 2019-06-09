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
		$filename = APPLICATION_PATH . "/tmp/" . $widget . ".def";
		if(!file_exists($filename)) {
			$url = "https://developer.gnome.org/gtk3/3.20/" . $widget . ".html";
			$content = file_get_contents($url);
		}

		// 
		$content = file_get_contents($filename);

		// 
		$count = preg_match_all('/^([a-zA-Z]*)\ (.*)\ \((.*)\,{0,}\)/im', $content, $output);

		// 
		$methods_out = [];
		for($i=0; $i<$count; $i++) {

			//
			$out = [];
			$out[] = "			'" . str_replace($start_with, "", $output[2][$i]) . "' => [";
			$out[] = "				'cpp-method' => \"" . $output[2][$i] . "\",";
			$out[] = "				'static' => FALSE,";
			$out[] = "				'return-type' => " . (($output[1][$i] == "void") ? "NULL" : "\"" . $output[1][$i] . "\"") . ",";
			
			//
			if($output[3][$i] == "void") {
				$out[] = "				'parameters' => NULL";
			}
			else {
				$out[] = "				'parameters' => [";

				$parameters = explode(",", $output[3][$i]);
				foreach($parameters as $parameter) {

					$param = explode(" ", ltrim(rtrim($parameter)));

					$out[] = "					[";
					$out[] = "						'type' => \"" . $param[0] . "\",";
					$out[] = "						'name' => \"" . str_replace("*", "", $param[1]) . "\",";
					$out[] = "					],";
				}

				$out[] = "				],";
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
$widget = "GtkFlowBox";
$start_with = "gtk_flow_box_";
$extends = "GtkContainer";
$macro = "GTK_FLOW_BOX";

$notebook = new Fetch($widget, $start_with, $extends, $macro);