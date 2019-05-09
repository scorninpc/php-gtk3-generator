<?php

/**
 *
 */
class Defs_Parse
{


	/**
	 *
	 */
	public function __construct($def_filename, $output)
	{
		$definitions = require($def_filename);

		$this->write_header($definitions, $output);
	}

	/**
	 *
	 */
	public function write_header($definitions)
	{

	}

}