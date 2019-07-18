<?php

// Define absolute path
defined("APPLICATION_PATH") || define("APPLICATION_PATH", dirname(__FILE__) . "/src");

// Define output CPP source path
defined("CPP_SRC_PATH") || define("CPP_SRC_PATH", APPLICATION_PATH . "/../../src");

/**
 *
 */
class Parse
{

	/**
	 *
	 */
	public function __construct($def_filename)
	{
		$definitions = require($def_filename);

		$this->write_header($definitions);
		$this->write_code($definitions);

		$this->write_extension($definitions);
	}

	/**
	 * Parse main.cpp extension config to add this Widget
	 */
	public function write_extension($definitions)
	{
		$class_name = $definitions['configs']['cpp-object'];
		$variable_name = strtolower($class_name);

		// Start class extension
		$extension  = "\t\t// " . $class_name . "\n";
		$extension .= "\t\tPhp::Class<" . $class_name . "_> " . $variable_name . "(\"" . $class_name . "\");\n";

		// Verify if extends 
		if($definitions['configs']['extends'] != "Php::Base") {
			$extension .= "\t\t\t" . $variable_name . ".extends(" . strtolower(substr($definitions['configs']['extends'], 0, -1)) . ");\n";
		}

		// loop methods
		foreach($definitions['methods'] as $method_name => $config) {
			$extension .= "\t\t\t" . $variable_name . ".method<&" . $class_name . "_::" . $method_name . ">(\"" . $method_name . "\");\n";
		}

		// Add extension
		$extension .= "\t\textension.add(std::move(" . $variable_name . "));\n";

		echo "\n-----\n";
		echo $extension;
		echo "\n-----\n";
	}

	/**
	 * Parse and return array of strings methods
	 */
	public function create_header_method_defs($definitions)
	{
		$methods = [];

		// Loop methods of definitions
		foreach($definitions['methods'] as $method_name => $config) {


			$methods[$method_name] = "            ";

			// Static
			if($config['static'] === TRUE)
				$methods[$method_name] .= "static ";

			// Return
			if($config['return-type'] != NULL)
				$methods[$method_name] .= "Php::Value ";
			else
				$methods[$method_name] .= "void ";

			// name
			$methods[$method_name] .= $method_name . "(";

			// params
			if($config['parameters'] != NULL)
				$methods[$method_name] .= "Php::Parameters &parameters";
			$methods[$method_name] .= ");";


		}

		return $methods;
	}

	/**
	 * Create include string of dependences
	 */
	public function header_dependences($definitions)
	{
		
		$includes = "";
		foreach($definitions['dependences'] as $dependence) {
			$includes .= "\t#include \"" . $dependence . "\"\n";
		}
		

		return $includes;
	}


	/**
	 * Parse and write header file of object
	 */
	public function write_header($definitions)
	{

		// Get method definitions
		$methods = $this->create_header_method_defs($definitions);

		// Get include dependences
		$includes = $this->header_dependences($definitions);

		// Read template of header files
		$template = file_get_contents(APPLICATION_PATH . "/template.h");

		// Create keys for replace
		$patterns = [
			'/\*\*UNIQUE_NAME\*\*/',
			'/\*\*GTK_NAME\*\*/',
			'/\*\*EXTENDS\*\*/',
			'/\*\*DEPENDENCES\*\*/',
			'/\*\*PHPGTK_METHODS\*\*/',
		];

		// Create values for replace
		$values = [
			strtoupper($definitions['configs']['cpp-object']),
			$definitions['configs']['cpp-object'],
			$definitions['configs']['extends'],
			$includes,
			implode("\n\n", $methods),
		];

		// Replace
		$output = preg_replace($patterns, $values, $template);

		// Save file
		file_put_contents(CPP_SRC_PATH . "/" . $definitions['configs']['cpp-object'] . ".h", $output);
	}

	/**
	 * Parse and write code file of object
	 */
	public function write_code($definitions)
	{

		// Get method coded
		$methods = "";
		foreach($definitions['methods'] as $method_name => $method_definition) {

			$method = $this->write_method($method_name, $method_definition, $definitions);

			$methods .= $method . "\n\n";

		}

		// Read template of header files
		$template = file_get_contents(APPLICATION_PATH . "/template.cpp");

		// Create keys for replace
		$patterns = [
			'/\*\*UNIQUE_NAME\*\*/',
			'/\*\*GTK_NAME\*\*/',
			'/\*\*EXTENDS\*\*/',
			'/\*\*PHPGTK_METHODS\*\*/',
		];

		// Create values for replace
		$values = [
			strtoupper($definitions['configs']['cpp-object']),
			$definitions['configs']['cpp-object'],
			$definitions['configs']['extends'],
			$methods,
		];

		// Replace
		$output = preg_replace($patterns, $values, $template);

		// Save file
		file_put_contents(CPP_SRC_PATH . "/" . $definitions['configs']['cpp-object'] . ".cpp", $output);
	}

	/**
	 *
	 */
	public function write_method($method_name, $method_config, $definitions)
	{
		$method = "";

		// ---------------
		// Definicion of method
		if($method_config['return-type'] != NULL)
			$method .= "Php::Value ";
		else
			$method .= "void ";

		// class
		$method .= $definitions['configs']['name'] . "::";

		// name
		$method .= $method_name . "(";

		// params
		if($method_config['parameters'] != NULL)
			$method .= "Php::Parameters &parameters";
		$method .= ")";


		// ---------------
		// Start logic
		$method .= "\n{\n";

		// ---------------
		// Verify uninemplemented
		$comment = "";
		if((@$method_config['unimplemented']) || (strlen($method_config['deprecated']) > 0)) {
			$comment = "// ";
		}

		// ---------------
		// Loop parameters
		if($method_config['parameters'] != NULL) {

			// Cast the parameters
			foreach($method_config['parameters'] as $index => $parameter_definitions) {
				$parameter_string = "";

				if(@$parameter_definitions['return']) {

					$parameter_string = $comment . "\t" . $parameter_definitions['type'] . " " . $parameter_definitions['name'] . ";\n\n";

				}
				else if((substr($parameter_definitions['type'], 0, 3) == "Gtk") ||  (substr($parameter_definitions['type'], 0, 3) == "Gdk")) {


					$parameter_string .= $comment . "\t" . $parameter_definitions['type'] . " *" . $parameter_definitions['name'] . ";\n";
					$parameter_string .= $comment . "\tif(parameters.size() > " . $index . ") {\n";
						$parameter_string .= $comment . "\t\tPhp::Value object_" . $parameter_definitions['name'] . " = parameters[" . $index . "];\n";
						// $parameter_string .= "\tif (!object_" . $parameter_definitions['name'] . ".instanceOf(\"" . $parameter_definitions['type'] . "\")) throw Php::Exception(\"parameter expect " . $parameter_definitions['type'] . " instance\");\n";
						$parameter_string .= $comment . "\t\t" . $parameter_definitions['type'] . "_ *phpgtk_" . $parameter_definitions['name'] . " = (" . $parameter_definitions['type'] . "_ *)object_" . $parameter_definitions['name'] . ".implementation();\n";
						
						if(@$parameter_definitions['nocast_macro']) {
							$parameter_string .= $comment . "\t\t" . $parameter_definitions['name'] . " = phpgtk_" . $parameter_definitions['name'] . "->get_instance();\n";
						}
						else {
							if(!isset($parameter_definitions['cast_macro'])) {
								$parameter_definitions['cast_macro'] = "GTK_WIDGET";
							}
							
							$parameter_string .= $comment . "\t\t" . $parameter_definitions['name'] . " = " . $parameter_definitions['cast_macro'] . "(phpgtk_" . $parameter_definitions['name'] . "->get_instance());\n";
						}
					$parameter_string .= $comment . "\t}\n";

					
					// $parameter_string .= "\t" . $parameter_definitions['type'] . "_ *" . $parameter_definitions['name'] . " = (" . $parameter_definitions['type'] . "_ *)object_" . $parameter_definitions['name'] . ".implementation();\n";

				}
				else if($parameter_definitions['type'] == "guint") {

					$parameter_string .= $comment . "\tguint " . $parameter_definitions['name'] . " = (int)parameters[" . $index . "];\n";

				}
				else if(substr($parameter_definitions['type'], 0, 5) == "gchar") {


					$parameter_string .= $comment . "\tstd::string s_" . $parameter_definitions['name'] . " = parameters[" . $index . "];\n";
					$parameter_string .= $comment . "\t" . $parameter_definitions['type'] . "" . $parameter_definitions['name'] . " = (" . $parameter_definitions['type'] . ")s_" . $parameter_definitions['name'] . ".c_str();\n";

				}
				else if(substr($parameter_definitions['type'], 0, 6) == "gfloat") {


					$parameter_string .= $comment . "\tdouble d_" . $parameter_definitions['name'] . " = parameters[" . $index . "];\n";
					$parameter_string .= $comment . "\t" . $parameter_definitions['type'] . " " . $parameter_definitions['name'] . " = (float)d_" . $parameter_definitions['name'] . ";\n";

				}
				else if($parameter_definitions['type'][0] == "g") {

					$parameter_string .= $comment . "\t" . $parameter_definitions['type'] . " " . $parameter_definitions['name'] . " = (" . $parameter_definitions['type'] . ")parameters[" . $index . "];\n";

				}
				else if(substr($parameter_definitions['type'], 0, 4) == "enum") {

					$param_type = substr($parameter_definitions['type'], 5);
					$parameter_string .= $comment . "\tint int_" . $parameter_definitions['name'] . " = (int)parameters[" . $index . "];\n";
					$parameter_string .= $comment . "\t" . $param_type . " " . $parameter_definitions['name'] . " = (" . $param_type . ")int_" . $parameter_definitions['name'] . ";\n";

				}
				else {
					
				}

				$method .= $comment . $parameter_string . "\n";
			}
		}


		// ---------------
		// Save returned value
		$method .= $comment . "\t";
		if(substr($method_config['return-type'], 0, 3) == "Gtk") {
			$method .= $method_config['return-type'] . " *ret = ";
		}
		else if(substr($method_config['return-type'], 0, 5) == "gchar") {
			$method .= "std::string ret = ";
		}
		else if(substr($method_config['return-type'], 0, 5) == "guint") {
			$method .= "int ret = ";
		}
		else if(substr($method_config['return-type'], 0, 4) == "enum") {
			$method .= substr($method_config['return-type'], 5) . " ret = ";
		}
		else if($method_config['return-type'] != NULL) {
			$method .= $method_config['return-type'] . " ret";

			if(!@$method_config['ignore-cpp-return']) {
				$method .= " = ";
			}
			else {
				$method .= ";\n\n\t";
			}
		}


		// ---------------
		// Start call gtk+ method
		$param_count = 0;
		if($method_name == "__construct") {
			$method .= "instance = (gpointer *)";
		}
		
		$method .= $method_config['cpp-method'] . " (";

		if( ($method_config['static'] !== TRUE) && ($method_name != "__construct") ) {
			$method .= $definitions['configs']['cast_macro'] . "(instance)";
			$param_count++;
		}

		// Loop parameters
		$return_cast = "";
		if($method_config['parameters'] != NULL) {

			// Cast the parameters
			foreach($method_config['parameters'] as $index => $parameter_definitions) {


				if($parameter_definitions['type'] === NULL) {
					$method .= (($param_count > 0) ? ", " : "") . "NULL";
				}
				else {
					$method .= (($param_count > 0) ? ", " : "") . ((@$parameter_definitions['return']) ? "&" : "") . $parameter_definitions['name'];

					if(@$parameter_definitions['return']) {
						$return_cast = "ret = " . $parameter_definitions['name'] . ";";
					}
				}

				$param_count++;
			}
		}

		// End call gtk+ method
		$method .= ");\n\n";


		if(strlen($return_cast) > 0) {
			$method .= "\t" . $return_cast . "\n\n";
		}

		// ---------------
		// Return value
		if(substr($method_config['return-type'], 0, 3) == "Gtk") {

			$method .= $comment . "\t" . $method_config['return-type'] . "_ *return_parsed = new " . $method_config['return-type'] . "_();\n";
	        $method .= $comment . "\treturn_parsed->set_instance((gpointer *)ret);\n";
	        $method .= $comment . "\treturn Php::Object(\"" . $method_config['return-type'] . "\", return_parsed);\n";

		}
		else if($method_config['return-type'] != NULL) {
			$method .= $comment . "\treturn ret;\n";
		}

		// ---------------
		// Verify uninemplemented
		if(@$method_config['unimplemented']) {
			$method .= "\t throw Php::Exception(\"" . $definitions['configs']['name'] . "::" . $method_name . " not implemented\");\n";
		}
		else if(strlen($method_config['deprecated']) > 0) {
			$method .= "\t Php::deprecated << \"" . $definitions['configs']['name'] . "::" . $method_name . "  is deprecated on Gtk " . $method_config['deprecated'] . "\";\n";
		}

		// End logic
		$method .= "}";
		
		// Return CPP code of method
		return $method;
	}

}





$file = APPLICATION_PATH . "/../defs/" . $argv[1] . ".php";
if(!file_exists($file)) {
	die("Def " . $argv[1] . " not found");
}

$notebook = new Parse($file);