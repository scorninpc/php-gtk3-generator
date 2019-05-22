<?php

	return [

		'configs' => [
			'cpp-object' => "GtkToggleButton",
			'name'=>"GtkToggleButton_",
			'extends'=>"GtkButton_",
			'cast_macro' => "GTK_TOGGLE_BUTTON"
		],
		

		'dependences' => [
			"GtkButton.h"
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_toggle_button_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// 
			'new_with_label' => [
				'cpp-method' => "gtk_toggle_button_new_with_label",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			// 
			'new_with_mnemonic' => [
				'cpp-method' => "gtk_toggle_button_new_with_mnemonic",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			// 
			'set_mode' => [
				'cpp-method' => "gtk_toggle_button_set_mode",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "draw_indicator",
					],
				],
			],

			// 
			'get_mode' => [
				'cpp-method' => "gtk_toggle_button_get_mode",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'toggled' => [
				'cpp-method' => "gtk_toggle_button_toggled",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'get_active' => [
				'cpp-method' => "gtk_toggle_button_get_active",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_active' => [
				'cpp-method' => "gtk_toggle_button_set_active",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "is_active",
					]
				],
			],

			// 
			'get_inconsistent' => [
				'cpp-method' => "gtk_toggle_button_get_inconsistent",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_inconsistent' => [
				'cpp-method' => "gtk_toggle_button_set_inconsistent",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					]
				],
			],


		]



	];