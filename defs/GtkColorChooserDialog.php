<?php

	return [

		'configs' => [
			'cpp-object' => "GtkColorChooserDialog",
			'name' => "GtkColorChooserDialog_",
			'extends' => "GtkDialog_",
			'cast_macro' => "GTK_COLOR_CHOOSER_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h",
			"GdkRGBA.h",
			"GtkOrientation.h",
		],


		'methods' => [

			// ------
			'__construct' => [
				'cpp-method' => "gtk_color_chooser_dialog_new",
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


			// ------
			'get_rgba' => [
				'cpp-method' => "gtk_color_chooser_get_rgba",
				'static' => FALSE,
				'return-type' => "GdkRGBA",
				'parameters' => [],
			],

			// ------
			'set_rgba' => [
				'cpp-method' => "gtk_color_chooser_set_rgba",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkRGBA",
						'name' => "color",
						// 'cast_macro' => "GTK_WINDOW"
					],
				],
			],

			// ------
			'get_use_alpha' => [
				'cpp-method' => "gtk_color_chooser_get_use_alpha",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// ------
			'set_use_alpha' => [
				'cpp-method' => "gtk_color_chooser_set_use_alpha",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_alpha",
						// 'cast_macro' => "GTK_WINDOW"
					],
				],
			],

			// ------
			'add_palette' => [
				'cpp-method' => "gtk_color_chooser_add_palette",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkOrientation",
						'name' => "GtkOrientation",
					],
					[
						'type' => "gint",
						'name' => "color_per_line",
					],
					[
						'type' => "gint",
						'name' => "n_colors",
					],
					[
						'type' => "GdkRGBA",
						'name' => "colors",
					],
				],
			],


		]



	];