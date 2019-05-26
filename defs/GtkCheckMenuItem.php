<?php

	return [

		'configs' => [
			'cpp-object' => "GtkCheckMenuItem",
			'name'=>"GtkCheckMenuItem_",
			'extends'=>"GtkMenuItem_",
			'cast_macro' => "GTK_CHECK_MENU_ITEM"
		],
		

		'dependences' => [
			"GtkMenuItem.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_check_menu_item_new",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'new_with_label' => [
				'cpp-method' => "gtk_check_menu_item_new_with_label",
				'return-type' => "GtkCheckMenuItem",
				'static' => TRUE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label"
					]
				],
			],

			// 
			'new_with_mnemonic' => [
				'cpp-method' => "gtk_check_menu_item_new_with_mnemonic",
				'return-type' => "GtkCheckMenuItem",
				'static' => TRUE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label"
					]
				],
			],

			// 
			'get_active' => [
				'cpp-method' => "gtk_check_menu_item_get_active",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_active' => [
				'cpp-method' => "gtk_check_menu_item_set_active",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "is_active"
					]
				],
			],

			// 
			'toggled' => [
				'cpp-method' => "gtk_check_menu_item_toggled",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'get_inconsistent' => [
				'cpp-method' => "gtk_check_menu_item_get_inconsistent",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_inconsistent' => [
				'cpp-method' => "gtk_check_menu_item_set_inconsistent",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting"
					]
				],
			],

			// 
			'get_draw_as_radio' => [
				'cpp-method' => "gtk_check_menu_item_get_draw_as_radio",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_draw_as_radio' => [
				'cpp-method' => "gtk_check_menu_item_set_draw_as_radio",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "draw_as_radio"
					]
				],
			],


		]



	];