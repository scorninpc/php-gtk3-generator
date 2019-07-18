<?php

	return [

		'configs' => [
			'cpp-object' => "GtkColorButton",
			'name' => "GtkColorButton_",
			'extends' => "GtkButton_",
			'cast_macro' => "GTK_COLOR_BUTTON"
		],
		

		'dependences' => [
			"GtkButton.h",
			"GdkRGBA.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_color_button_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_color' => [
				'cpp-method' => "gtk_color_button_new_with_color",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'new_with_rgba' => [
				'cpp-method' => "gtk_color_button_new_with_rgba",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_color' => [
				'cpp-method' => "gtk_color_button_set_color",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkColor",
						'name' => "color",
					],
				],
			],

			//--------------
			'get_color' => [
				'cpp-method' => "gtk_color_button_get_color",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkColor",
						'name' => "color",
					],
				],
			],

			//--------------
			'set_alpha' => [
				'cpp-method' => "gtk_color_button_set_alpha",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint16",
						'name' => "alpha",
					],
				],
			],

			//--------------
			'set_rgba' => [
				'cpp-method' => "gtk_color_button_set_rgba",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkRGBA",
						'name' => "rgba",
					],
				],
			],

			//--------------
			'get_rgba' => [
				'cpp-method' => "gtk_color_button_get_rgba",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkRGBA",
						'name' => "rgba",
					],
				],
			],

			//--------------
			'set_use_alpha' => [
				'cpp-method' => "gtk_color_button_set_use_alpha",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_alpha",
					],
				],
			],

			//--------------
			'get_use_alpha' => [
				'cpp-method' => "gtk_color_button_get_use_alpha",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_title' => [
				'cpp-method' => "gtk_color_button_set_title",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "title",
					],
				],
			],

			//--------------
			'get_title' => [
				'cpp-method' => "gtk_color_button_get_title",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],
		]



	];