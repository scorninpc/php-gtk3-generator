<?php

	return [

		'configs' => [
			'cpp-object' => "GtkPrintSettings",
			'name' => "GtkPrintSettings_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_PRINT_SETTINGS"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [
			
			//--------------
			'__construct' => [
				'cpp-method' => "gtk_print_settings_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'copy' => [
				'cpp-method' => "gtk_print_settings_copy",
				'static' => FALSE,
				'return-type' => "GtkPrintSettings",
				'parameters' => NULL
			],

			//--------------
			'has_key' => [
				'cpp-method' => "gtk_print_settings_has_key",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'get' => [
				'cpp-method' => "gtk_print_settings_get",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'set' => [
				'cpp-method' => "gtk_print_settings_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gchar *",
						'name' => "value",
					],
				],
			],

			//--------------
			'unset' => [
				'cpp-method' => "gtk_print_settings_unset",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'foreach' => [
				'cpp-method' => "gtk_print_settings_foreach",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkPrintSettingsFunc",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
				],
			],

			//--------------
			'get_bool' => [
				'cpp-method' => "gtk_print_settings_get_bool",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'set_bool' => [
				'cpp-method' => "gtk_print_settings_set_bool",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gboolean",
						'name' => "value",
					],
				],
			],

			//--------------
			'get_double' => [
				'cpp-method' => "gtk_print_settings_get_double",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'get_double_with_default' => [
				'cpp-method' => "gtk_print_settings_get_double_with_default",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gdouble",
						'name' => "def",
					],
				],
			],

			//--------------
			'set_double' => [
				'cpp-method' => "gtk_print_settings_set_double",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gdouble",
						'name' => "value",
					],
				],
			],

			//--------------
			'get_length' => [
				'cpp-method' => "gtk_print_settings_get_length",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'set_length' => [
				'cpp-method' => "gtk_print_settings_set_length",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gdouble",
						'name' => "value",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_int' => [
				'cpp-method' => "gtk_print_settings_get_int",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'get_int_with_default' => [
				'cpp-method' => "gtk_print_settings_get_int_with_default",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gint",
						'name' => "def",
					],
				],
			],

			//--------------
			'set_int' => [
				'cpp-method' => "gtk_print_settings_set_int",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
					[
						'type' => "gint",
						'name' => "value",
					],
				],
			],

			//--------------
			'get_printer' => [
				'cpp-method' => "gtk_print_settings_get_printer",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_printer' => [
				'cpp-method' => "gtk_print_settings_set_printer",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "printer",
					],
				],
			],

			//--------------
			'get_orientation' => [
				'cpp-method' => "gtk_print_settings_get_orientation",
				'static' => FALSE,
				'return-type' => "enum GtkPageOrientation",
				'parameters' => NULL
			],

			//--------------
			'set_orientation' => [
				'cpp-method' => "gtk_print_settings_set_orientation",
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
				'cpp-method' => "gtk_print_settings_get_paper_size",
				'static' => FALSE,
				'return-type' => "enum GtkPaperSize",
				'parameters' => NULL
			],

			//--------------
			'set_paper_size' => [
				'cpp-method' => "gtk_print_settings_set_paper_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPaperSize",
						'name' => "paper_size",
					],
				],
			],

			//--------------
			'get_paper_width' => [
				'cpp-method' => "gtk_print_settings_get_paper_width",
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
			'set_paper_width' => [
				'cpp-method' => "gtk_print_settings_set_paper_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "enum GtkUnit",
						'name' => "unit",
					],
				],
			],

			//--------------
			'get_paper_height' => [
				'cpp-method' => "gtk_print_settings_get_paper_height",
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
			'set_paper_height' => [
				'cpp-method' => "gtk_print_settings_set_paper_height",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
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
			'get_use_color' => [
				'cpp-method' => "gtk_print_settings_get_use_color",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_use_color' => [
				'cpp-method' => "gtk_print_settings_set_use_color",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_color",
					],
				],
			],

			//--------------
			'get_collate' => [
				'cpp-method' => "gtk_print_settings_get_collate",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_collate' => [
				'cpp-method' => "gtk_print_settings_set_collate",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "collate",
					],
				],
			],

			//--------------
			'get_reverse' => [
				'cpp-method' => "gtk_print_settings_get_reverse",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_reverse' => [
				'cpp-method' => "gtk_print_settings_set_reverse",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "reverse",
					],
				],
			],

			//--------------
			'get_duplex' => [
				'cpp-method' => "gtk_print_settings_get_duplex",
				'static' => FALSE,
				'return-type' => "enum GtkPrintDuplex",
				'parameters' => NULL
			],

			//--------------
			'set_duplex' => [
				'cpp-method' => "gtk_print_settings_set_duplex",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPrintDuplex",
						'name' => "duplex",
					],
				],
			],

			//--------------
			'get_quality' => [
				'cpp-method' => "gtk_print_settings_get_quality",
				'static' => FALSE,
				'return-type' => "enum GtkPrintQuality",
				'parameters' => NULL
			],

			//--------------
			'set_quality' => [
				'cpp-method' => "gtk_print_settings_set_quality",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPrintQuality",
						'name' => "quality",
					],
				],
			],

			//--------------
			'get_n_copies' => [
				'cpp-method' => "gtk_print_settings_get_n_copies",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_n_copies' => [
				'cpp-method' => "gtk_print_settings_set_n_copies",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "num_copies",
					],
				],
			],

			//--------------
			'get_number_up' => [
				'cpp-method' => "gtk_print_settings_get_number_up",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_number_up' => [
				'cpp-method' => "gtk_print_settings_set_number_up",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "number_up",
					],
				],
			],

			//--------------
			'get_number_up_layout' => [
				'cpp-method' => "gtk_print_settings_get_number_up_layout",
				'static' => FALSE,
				'return-type' => "enum GtkNumberUpLayout",
				'parameters' => NULL
			],

			//--------------
			'set_number_up_layout' => [
				'cpp-method' => "gtk_print_settings_set_number_up_layout",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkNumberUpLayout",
						'name' => "number_up_layout",
					],
				],
			],

			//--------------
			'get_resolution' => [
				'cpp-method' => "gtk_print_settings_get_resolution",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_resolution' => [
				'cpp-method' => "gtk_print_settings_set_resolution",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "resolution",
					],
				],
			],

			//--------------
			'set_resolution_xy' => [
				'cpp-method' => "gtk_print_settings_set_resolution_xy",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "resolution_x",
					],
					[
						'type' => "gint",
						'name' => "resolution_y",
					],
				],
			],

			//--------------
			'get_resolution_x' => [
				'cpp-method' => "gtk_print_settings_get_resolution_x",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'get_resolution_y' => [
				'cpp-method' => "gtk_print_settings_get_resolution_y",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'get_printer_lpi' => [
				'cpp-method' => "gtk_print_settings_get_printer_lpi",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => NULL
			],

			//--------------
			'set_printer_lpi' => [
				'cpp-method' => "gtk_print_settings_set_printer_lpi",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "lpi",
					],
				],
			],

			//--------------
			'get_scale' => [
				'cpp-method' => "gtk_print_settings_get_scale",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => NULL
			],

			//--------------
			'set_scale' => [
				'cpp-method' => "gtk_print_settings_set_scale",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "scale",
					],
				],
			],

			//--------------
			'get_print_pages' => [
				'cpp-method' => "gtk_print_settings_get_print_pages",
				'static' => FALSE,
				'return-type' => "enum GtkPrintPages",
				'parameters' => NULL
			],

			//--------------
			'set_print_pages' => [
				'cpp-method' => "gtk_print_settings_set_print_pages",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPrintPages",
						'name' => "pages",
					],
				],
			],

			//--------------
			'get_page_ranges' => [
				'cpp-method' => "gtk_print_settings_get_page_ranges",
				'static' => FALSE,
				'return-type' => "enum GtkPageRange",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "num_ranges",
					],
				],
			],

			//--------------
			'set_page_ranges' => [
				'cpp-method' => "gtk_print_settings_set_page_ranges",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPageRange",
						'name' => "page_ranges",
					],
					[
						'type' => "gint",
						'name' => "num_ranges",
					],
				],
			],

			//--------------
			'get_page_set' => [
				'cpp-method' => "gtk_print_settings_get_page_set",
				'static' => FALSE,
				'return-type' => "enum GtkPageSet",
				'parameters' => NULL
			],

			//--------------
			'set_page_set' => [
				'cpp-method' => "gtk_print_settings_set_page_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPageSet",
						'name' => "page_set",
					],
				],
			],

			//--------------
			'get_default_source' => [
				'cpp-method' => "gtk_print_settings_get_default_source",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_default_source' => [
				'cpp-method' => "gtk_print_settings_set_default_source",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "default_source",
					],
				],
			],

			//--------------
			'get_media_type' => [
				'cpp-method' => "gtk_print_settings_get_media_type",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_media_type' => [
				'cpp-method' => "gtk_print_settings_set_media_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "media_type",
					],
				],
			],

			//--------------
			'get_dither' => [
				'cpp-method' => "gtk_print_settings_get_dither",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_dither' => [
				'cpp-method' => "gtk_print_settings_set_dither",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "dither",
					],
				],
			],

			//--------------
			'get_finishings' => [
				'cpp-method' => "gtk_print_settings_get_finishings",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_finishings' => [
				'cpp-method' => "gtk_print_settings_set_finishings",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "finishings",
					],
				],
			],

			//--------------
			'get_output_bin' => [
				'cpp-method' => "gtk_print_settings_get_output_bin",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_output_bin' => [
				'cpp-method' => "gtk_print_settings_set_output_bin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "output_bin",
					],
				],
			],

			//--------------
			'new_from_file' => [
				'cpp-method' => "gtk_print_settings_new_from_file",
				'static' => FALSE,
				'return-type' => "GtkPrintSettings",
				'parameters' => [
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'new_from_key_file' => [
				'cpp-method' => "gtk_print_settings_new_from_key_file",
				'static' => FALSE,
				'return-type' => "GtkPrintSettings",
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
			'load_file' => [
				'cpp-method' => "gtk_print_settings_load_file",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
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
				'cpp-method' => "gtk_print_settings_load_key_file",
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
				'cpp-method' => "gtk_print_settings_to_file",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
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
				'cpp-method' => "gtk_print_settings_to_key_file",
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