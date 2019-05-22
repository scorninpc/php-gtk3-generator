<?php

	return [

		'configs' => [
			'cpp-object' => "GtkCheckButton",
			'name'=>"GtkCheckButton_",
			'extends'=>"GtkToggleButton_",
			'cast_macro' => "GTK_CHECK_BUTTON"
		],
		

		'dependences' => [
			"GtkToggleButton.h"
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_check_button_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// 
			'new_with_label' => [
				'cpp-method' => "gtk_check_button_new_with_label",
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
				'cpp-method' => "gtk_check_button_new_with_mnemonic",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],



		]



	];