<?php

	return [

		'configs' => [
			'cpp-object' => "GtkSeparatorMenuItem",
			'name'=>"GtkSeparatorMenuItem_",
			'extends'=>"GtkMenuItem_",
			'cast_macro' => "GTK_SEPARATOR_MENU_ITEM"
		],
		

		'dependences' => [
			"GtkMenuItem.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_separator_menu_item_new",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],


		]



	];