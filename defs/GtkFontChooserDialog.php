<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFontChooserDialog",
			'name' => "GtkFontChooserDialog_",
			'extends' => "GtkDialog_",
			'cast_macro' => "GTK_FONT_CHOOSER_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h",
			"GtkWindow.h",
		],


		'methods' => [

			//--------------
			'__construct' => [
				'cpp-method' => "gtk_font_chooser_dialog_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "title",
					],
					[
						'type' => "GtkWindow",
						'name' => "parent",
						'cast_macro' => "GTK_WINDOW"
					],
				],
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



		]



	];