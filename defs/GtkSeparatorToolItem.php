<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkSeparatorToolItem",
			'name'=>"GtkSeparatorToolItem_",
			'extends'=>"GtkToolItem_",
			'cast_macro' => "GTK_SEPARATOR_TOOL_ITEM"
		],
		

		'dependences' => [
			"GtkToolItem.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_separator_tool_item_new",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL
			],


			//
			'set_draw' => [
				'cpp-method' => "gtk_separator_tool_item_set_draw",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "homogeneous",
					]
				]
			],

			//
			'get_draw' => [
				'cpp-method' => "gtk_separator_tool_item_get_draw",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL
			],



		],
	];
