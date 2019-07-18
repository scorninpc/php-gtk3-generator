<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFontButton",
			'name' => "GtkFontButton_",
			'extends' => "GtkButton_",
			'cast_macro' => "GTK_FONT_BUTTON"
		],
		

		'dependences' => [
			"GtkButton.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_font_button_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_font' => [
				'cpp-method' => "gtk_font_button_new_with_font",
				'static' => TRUE,
				'return-type' => "GtkFontButton",
				'parameters' => NULL
			],

			//--------------
			'set_font_name' => [
				'cpp-method' => "gtk_font_button_set_font_name",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "fontname",
					],
				],
			],

			//--------------
			'get_font_name' => [
				'cpp-method' => "gtk_font_button_get_font_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_show_style' => [
				'cpp-method' => "gtk_font_button_set_show_style",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_style",
					],
				],
			],

			//--------------
			'get_show_style' => [
				'cpp-method' => "gtk_font_button_get_show_style",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_size' => [
				'cpp-method' => "gtk_font_button_set_show_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_size",
					],
				],
			],

			//--------------
			'get_show_size' => [
				'cpp-method' => "gtk_font_button_get_show_size",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_use_font' => [
				'cpp-method' => "gtk_font_button_set_use_font",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_font",
					],
				],
			],

			//--------------
			'get_use_font' => [
				'cpp-method' => "gtk_font_button_get_use_font",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_use_size' => [
				'cpp-method' => "gtk_font_button_set_use_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_size",
					],
				],
			],

			//--------------
			'get_use_size' => [
				'cpp-method' => "gtk_font_button_get_use_size",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_title' => [
				'cpp-method' => "gtk_font_button_set_title",
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
				'cpp-method' => "gtk_font_button_get_title",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],
		]



	];