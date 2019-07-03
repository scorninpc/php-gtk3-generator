<?php

	return [

		'configs' => [
			'cpp-object' => "GtkMenuButton",
			'name' => "GtkMenuButton_",
			'extends' => "GtkToggleButton_",
			'cast_macro' => "GTK_MENU_BUTTON"
		],
		

		'dependences' => [
			"GtkToggleButton.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_menu_button_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_popup' => [
				'cpp-method' => "gtk_menu_button_set_popup",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "menu",
					],
				],
			],

			//--------------
			'get_popup' => [
				'cpp-method' => "gtk_menu_button_get_popup",
				'static' => FALSE,
				'return-type' => "GtkMenu",
				'parameters' => NULL
			],

			//--------------
			'set_popover' => [
				'cpp-method' => "gtk_menu_button_set_popover",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "popover",
					],
				],
			],

			//--------------
			'get_popover' => [
				'cpp-method' => "gtk_menu_button_get_popover",
				'static' => FALSE,
				'return-type' => "GtkPopover",
				'parameters' => NULL
			],

			//--------------
			'set_menu_model' => [
				'cpp-method' => "gtk_menu_button_set_menu_model",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GMenuModel",
						'name' => "menu_model",
					],
				],
			],

			//--------------
			'get_menu_model' => [
				'cpp-method' => "gtk_menu_button_get_menu_model",
				'static' => FALSE,
				'return-type' => "GMenuModel",
				'parameters' => NULL
			],

			//--------------
			'set_use_popover' => [
				'cpp-method' => "gtk_menu_button_set_use_popover",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_popover",
					],
				],
			],

			//--------------
			'get_use_popover' => [
				'cpp-method' => "gtk_menu_button_get_use_popover",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_direction' => [
				'cpp-method' => "gtk_menu_button_set_direction",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkArrowType",
						'name' => "direction",
					],
				],
			],

			//--------------
			'get_direction' => [
				'cpp-method' => "gtk_menu_button_get_direction",
				'static' => FALSE,
				'return-type' => "GtkArrowType",
				'parameters' => NULL
			],

			//--------------
			'set_align_widget' => [
				'cpp-method' => "gtk_menu_button_set_align_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "align_widget",
					],
				],
			],

			//--------------
			'get_align_widget' => [
				'cpp-method' => "gtk_menu_button_get_align_widget",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],
		]



	];