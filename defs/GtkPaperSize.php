<?php

	return [

		'configs' => [
			'cpp-object' => "GtkPaperSize",
			'name' => "GtkPaperSize_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_PAPER_SIZE"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_paper_size_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_from_ppd' => [
				'cpp-method' => "gtk_paper_size_new_from_ppd",
				'static' => TRUE,
				'return-type' => "GtkPaperSize",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "ppd_display_name",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'new_from_ipp' => [
				'cpp-method' => "gtk_paper_size_new_from_ipp",
				'static' => TRUE,
				'return-type' => "GtkPaperSize",
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'new_custom' => [
				'cpp-method' => "gtk_paper_size_new_custom",
				'static' => TRUE,
				'return-type' => "GtkPaperSize",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "display_name",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'copy' => [
				'cpp-method' => "gtk_paper_size_copy",
				'static' => FALSE,
				'return-type' => "GtkPaperSize",
				'parameters' => NULL
			],

			//--------------
			'free' => [
				'cpp-method' => "gtk_paper_size_free",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'is_equal' => [
				'cpp-method' => "gtk_paper_size_is_equal",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkPaperSize",
						'name' => "size2",
					],
				],
			],

			//--------------
			'get_paper_sizes' => [
				'cpp-method' => "gtk_paper_size_get_paper_sizes",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'get_name' => [
				'cpp-method' => "gtk_paper_size_get_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'get_display_name' => [
				'cpp-method' => "gtk_paper_size_get_display_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'get_ppd_name' => [
				'cpp-method' => "gtk_paper_size_get_ppd_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'get_width' => [
				'cpp-method' => "gtk_paper_size_get_width",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_height' => [
				'cpp-method' => "gtk_paper_size_get_height",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'is_ipp' => [
				'cpp-method' => "gtk_paper_size_is_ipp",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'is_custom' => [
				'cpp-method' => "gtk_paper_size_is_custom",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_size' => [
				'cpp-method' => "gtk_paper_size_set_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_default_top_margin' => [
				'cpp-method' => "gtk_paper_size_get_default_top_margin",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_default_bottom_margin' => [
				'cpp-method' => "gtk_paper_size_get_default_bottom_margin",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_default_left_margin' => [
				'cpp-method' => "gtk_paper_size_get_default_left_margin",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_default_right_margin' => [
				'cpp-method' => "gtk_paper_size_get_default_right_margin",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_default' => [
				'cpp-method' => "gtk_paper_size_get_default",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'new_from_key_file' => [
				'cpp-method' => "gtk_paper_size_new_from_key_file",
				'static' => FALSE,
				'return-type' => "GtkPaperSize",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "group_name",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'to_key_file' => [
				'cpp-method' => "gtk_paper_size_to_key_file",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GKeyFile",
						'name' => "key_file",
					],
					[
						'type' => "gchar *",
						'name' => "group_name",
					],
				],
			],
		]



	];