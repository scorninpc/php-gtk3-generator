<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFontChooser",
			'name' => "GtkFontChooser_",
			'extends' => "Php::Base",
			'cast_macro' => "GTK_FONT_CHOOSER"
		],
		

		'dependences' => [
			
		],


		'methods' => [
			'get_font_family' => [
				'cpp-method' => "gtk_font_chooser_get_font_family",
				'static' => FALSE,
				'return-type' => "PangoFontFamily",
				'parameters' => NULL
			],

			//--------------
			'get_font_face' => [
				'cpp-method' => "gtk_font_chooser_get_font_face",
				'static' => FALSE,
				'return-type' => "PangoFontFace",
				'parameters' => NULL
			],

			//--------------
			'get_font_size' => [
				'cpp-method' => "gtk_font_chooser_get_font_size",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'get_font' => [
				'cpp-method' => "gtk_font_chooser_get_font",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'set_font' => [
				'cpp-method' => "gtk_font_chooser_set_font",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "fontname",
					],
				],
			],

			//--------------
			'get_font_desc' => [
				'cpp-method' => "gtk_font_chooser_get_font_desc",
				'static' => FALSE,
				'return-type' => "PangoFontDescription",
				'parameters' => NULL
			],

			//--------------
			'set_font_desc' => [
				'cpp-method' => "gtk_font_chooser_set_font_desc",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "PangoFontDescription",
						'name' => "font_desc",
					],
				],
			],

			//--------------
			'get_preview_text' => [
				'cpp-method' => "gtk_font_chooser_get_preview_text",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'set_preview_text' => [
				'cpp-method' => "gtk_font_chooser_set_preview_text",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "text",
					],
				],
			],

			//--------------
			'get_show_preview_entry' => [
				'cpp-method' => "gtk_font_chooser_get_show_preview_entry",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_preview_entry' => [
				'cpp-method' => "gtk_font_chooser_set_show_preview_entry",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_preview_entry",
					],
				],
			],

			//--------------
			'(*GtkFontFilterFunc)' => [
				'cpp-method' => "(*GtkFontFilterFunc)",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "PangoFontFace",
						'name' => "face",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
				],
			],

			//--------------
			'set_filter_func' => [
				'cpp-method' => "gtk_font_chooser_set_filter_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkFontFilterFunc",
						'name' => "filter",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "destroy",
					],
				],
			],

			//--------------
			'set_font_map' => [
				'cpp-method' => "gtk_font_chooser_set_font_map",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "PangoFontMap",
						'name' => "fontmap",
					],
				],
			],

			//--------------
			'get_font_map' => [
				'cpp-method' => "gtk_font_chooser_get_font_map",
				'static' => FALSE,
				'return-type' => "PangoFontMap",
				'parameters' => NULL
			],
		]



	];