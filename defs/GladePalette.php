<?php

	return [

		'configs' => [
			'cpp-object' => "GladePalette",
			'name'=>"GladePalette_",
			'extends'=>"GtkBox_",
			'cast_macro' => "GLADE_PALETTE"
		],
		

		'dependences' => [
			"GtkBox.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "glade_palette_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'get_item_appearance' => [
				'cpp-method' => "glade_palette_get_item_appearance",
				'static' => FALSE,
				'return-type' => "enum GladeItemAppearance",
				'parameters' => [],
			],

			// 
			'set_item_appearance' => [
				'cpp-method' => "glade_palette_set_item_appearance",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GladeItemAppearance",
						'name' => "item_appearence",
					]
				],
			],

			// 
			'get_use_small_item_icons' => [
				'cpp-method' => "glade_palette_get_use_small_item_icons",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_use_small_item_icons' => [
				'cpp-method' => "glade_palette_set_use_small_item_icons",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_small_item_icons",
					]
				],
			],

			// 
			'get_show_selector_button' => [
				'cpp-method' => "glade_palette_get_show_selector_button",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_show_selector_button' => [
				'cpp-method' => "glade_palette_set_show_selector_button",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_selector_button",
					]
				],
			],




			
			




			//
		]



	];