<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkFileFilter",
			'name'=>"GtkFileFilter_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_FILE_FILTER"
		],
		

		'dependences' => [
			"GObject.h"
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_file_filter_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			'set_name' => [
				'cpp-method' => "gtk_file_filter_set_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name"
					]
				],
			],

			'get_name' => [
				'cpp-method' => "gtk_file_filter_get_name",
				'return-type' => "char *",
				'parameters' => NULL,
			],

			'add_mime_type' => [
				'cpp-method' => "gtk_file_filter_add_mime_type",
				'return-type' => NULL,
				'parameters' =>  [
					[
						'type' => "gchar *",
						'name' => "name"
					]
				],
			],

			'add_pattern' => [
				'cpp-method' => "gtk_file_filter_add_pattern",
				'return-type' => NULL,
				'parameters' =>  [
					[
						'type' => "gchar *",
						'name' => "name"
					]
				],
			],

			'add_pixbuf_formats' => [
				'cpp-method' => "gtk_file_filter_add_pixbuf_formats",
				'return-type' => NULL,
				'parameters' =>  NULL,
			],

			'get_needed' => [
				'cpp-method' => "gtk_file_filter_get_needed",
				'return-type' => "enum GtkFileFilterFlags",
				'parameters' =>  NULL,
			],

			'filter' => [
				'cpp-method' => "gtk_file_filter_filter",
				'return-type' => "gboolean",
				'parameters' =>  [
					[
						'type' => "GtkFileFilterInfo",
						'name' => "filter_info"
					]
				],
			],



		],
	];
