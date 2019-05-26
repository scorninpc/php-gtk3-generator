<?php

	return [

		'configs' => [
			'cpp-object' => "GtkMenuBar",
			'name'=>"GtkMenuBar_",
			'extends'=>"GtkMenuShell_",
			'cast_macro' => "GTK_MENU_BAR"
		],
		

		'dependences' => [
			"GtkMenuShell.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_menu_bar_new",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'new_from_model' => [
				'cpp-method' => "gtk_menu_bar_new_from_model",
				'return-type' => NULL,
				'static' => TRUE,
				'parameters' => [
					[
						'type' => "GMenuModel",
						'name' => "model",
						'cast_macro' => NULL
					]
				],
			],

			// 
			'set_pack_direction' => [
				'cpp-method' => "gtk_menu_bar_set_pack_direction",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "enum GtkPackDirection",
						'name' => "pack_dir",
					],
				],
			],

			// 
			'get_pack_direction' => [
				'cpp-method' => "gtk_menu_bar_get_pack_direction",
				'return-type' => "enum GtkPackDirection",
				'static' => FALSE,
				'parameters' =>NULL,
			],

			// 
			'set_child_pack_direction' => [
				'cpp-method' => "gtk_menu_bar_set_child_pack_direction",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "enum GtkPackDirection",
						'name' => "child_pack_dir",
					]
				],
			],

			// 
			'child_pack_direction' => [
				'cpp-method' => "gtk_menu_bar_get_child_pack_direction",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			





		]



	];