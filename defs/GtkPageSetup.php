<?php

	return [

		'configs' => [
			'cpp-object' => "GtkPageSetup",
			'name' => "GtkPageSetup_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_PAGE_SETUP"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_page_setup_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_from_file' => [
				'cpp-method' => "gtk_page_setup_new_from_file",
				'static' => TRUE,
				'return-type' => "GtkPageSetup",
				'parameters' => [
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'new_from_key_file' => [
				'cpp-method' => "gtk_page_setup_new_from_key_file",
				'static' => TRUE,
				'return-type' => "GtkPageSetup",
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
			'copy' => [
				'cpp-method' => "gtk_page_setup_copy",
				'static' => FALSE,
				'return-type' => "GtkPageSetup",
				'parameters' => NULL
			],

			//--------------
			'get_orientation' => [
				'cpp-method' => "gtk_page_setup_get_orientation",
				'static' => FALSE,
				'return-type' => "enum GtkPageOrientation",
				'parameters' => NULL
			],

			//--------------
			'set_orientation' => [
				'cpp-method' => "gtk_page_setup_set_orientation",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPageOrientation",
						'name' => "orientation",
					],
				],
			],

			//--------------
			'get_paper_size' => [
				'cpp-method' => "gtk_page_setup_get_paper_size",
				'static' => FALSE,
				'return-type' => "enum GtkPaperSize",
				'parameters' => NULL
			],

			//--------------
			'set_paper_size' => [
				'cpp-method' => "gtk_page_setup_set_paper_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPaperSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'get_top_margin' => [
				'cpp-method' => "gtk_page_setup_get_top_margin",
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
			'set_top_margin' => [
				'cpp-method' => "gtk_page_setup_set_top_margin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "margin",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_bottom_margin' => [
				'cpp-method' => "gtk_page_setup_get_bottom_margin",
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
			'set_bottom_margin' => [
				'cpp-method' => "gtk_page_setup_set_bottom_margin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "margin",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_left_margin' => [
				'cpp-method' => "gtk_page_setup_get_left_margin",
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
			'set_left_margin' => [
				'cpp-method' => "gtk_page_setup_set_left_margin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "margin",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_right_margin' => [
				'cpp-method' => "gtk_page_setup_get_right_margin",
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
			'set_right_margin' => [
				'cpp-method' => "gtk_page_setup_set_right_margin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "margin",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'set_paper_size_and_default_margins' => [
				'cpp-method' => "gtk_page_setup_set_paper_size_and_default_margins",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPaperSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'get_paper_width' => [
				'cpp-method' => "gtk_page_setup_get_paper_width",
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
			'get_paper_height' => [
				'cpp-method' => "gtk_page_setup_get_paper_height",
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
			'get_page_width' => [
				'cpp-method' => "gtk_page_setup_get_page_width",
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
			'get_page_height' => [
				'cpp-method' => "gtk_page_setup_get_page_height",
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
			'load_file' => [
				'cpp-method' => "gtk_page_setup_load_file",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "char",
						'name' => "file_name",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'load_key_file' => [
				'cpp-method' => "gtk_page_setup_load_key_file",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GKeyFile",
						'name' => "key_file",
					],
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
			'to_file' => [
				'cpp-method' => "gtk_page_setup_to_file",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "char",
						'name' => "file_name",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'to_key_file' => [
				'cpp-method' => "gtk_page_setup_to_key_file",
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