<?php

	return [

		'configs' => [
			'cpp-object' => "GtkMenuItem",
			'name'=>"GtkMenuItem_",
			'extends'=>"GtkBin_",
			'cast_macro' => "GTK_MENU_ITEM"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_menu_item_new",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'new_with_label' => [
				'cpp-method' => "gtk_menu_item_new_with_label",
				'return-type' => NULL,
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
				'cpp-method' => "gtk_menu_item_new_with_mnemonic",
				'return-type' => NULL,
				'static' => TRUE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label"
					],
				],
			],

			// 
			'get_label' => [
				'cpp-method' => "gtk_menu_item_get_label",
				'return-type' => "gchar *",
				'static' => FALSE,
				'parameters' =>NULL,
			],

			// 
			'set_label' => [
				'cpp-method' => "gtk_menu_item_set_label",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label"
					]
				],
			],

			// 
			'get_use_underline' => [
				'cpp-method' => "gtk_menu_item_get_use_underline",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_use_underline' => [
				'cpp-method' => "gtk_menu_item_set_use_underline",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					]
				],
			],


			// 
			'set_submenu' => [
				'cpp-method' => "gtk_menu_item_set_submenu",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "submenu",
						'cast_macro' => "GTK_WIDGET"
					],
				],
			],

			// 
			'get_submenu' => [
				'cpp-method' => "gtk_menu_item_get_submenu",
				'return-type' => "GtkWidget",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_accel_path' => [
				'cpp-method' => "gtk_menu_item_set_accel_path",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "accel_path"
					]
				],
			],

			// 
			'get_accel_path' => [
				'cpp-method' => "gtk_menu_item_get_accel_path",
				'return-type' => "gchar *",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'select' => [
				'cpp-method' => "gtk_menu_item_select",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'deselect' => [
				'cpp-method' => "gtk_menu_item_deselect",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'activate' => [
				'cpp-method' => "gtk_menu_item_activate",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'toggle_size_request' => [
				'cpp-method' => "gtk_menu_item_toggle_size_request",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "requisition"
					],
				],
			],

			// 
			'size_allocate' => [
				'cpp-method' => "gtk_menu_item_toggle_size_allocate",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "requisition"
					],
				],
			],

			// 
			'get_reserve_indicator' => [
				'cpp-method' => "gtk_menu_item_get_reserve_indicator",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_reserve_indicator' => [
				'cpp-method' => "gtk_menu_item_set_reserve_indicator",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "reserve"
					],
				],
			],






		]



	];