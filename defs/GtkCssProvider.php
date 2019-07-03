<?php

	return [

		'configs' => [
			'cpp-object' => "GtkCssProvider",
			'name' => "GtkCssProvider_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_CSS_PROVIDER"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [
			
			//--------------
			'get_named' => [
				'cpp-method' => "gtk_css_provider_get_named",
				'static' => FALSE,
				'return-type' => "GtkCssProvider",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "gchar *",
						'name' => "variant",
					],
				],
			],

			//--------------
			'load_from_data' => [
				'cpp-method' => "gtk_css_provider_load_from_data",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "data",
					],
					[
						'type' => "gssize",
						'name' => "length",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'load_from_file' => [
				'cpp-method' => "gtk_css_provider_load_from_file",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "file",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'load_from_path' => [
				'cpp-method' => "gtk_css_provider_load_from_path",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "path",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'load_from_resource' => [
				'cpp-method' => "gtk_css_provider_load_from_resource",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "resource_path",
					],
				],
			],

			//--------------
			'__construct' => [
				'cpp-method' => "gtk_css_provider_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'to_string' => [
				'cpp-method' => "gtk_css_provider_to_string",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_end_line' => [
				'cpp-method' => "gtk_css_section_get_end_line",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_end_position' => [
				'cpp-method' => "gtk_css_section_get_end_position",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_file' => [
				'cpp-method' => "gtk_css_section_get_file",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_parent' => [
				'cpp-method' => "gtk_css_section_get_parent",
				'static' => FALSE,
				'return-type' => "GtkCssSection",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_section_type' => [
				'cpp-method' => "gtk_css_section_get_section_type",
				'static' => FALSE,
				'return-type' => "enum GtkCssSectionType",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_start_line' => [
				'cpp-method' => "gtk_css_section_get_start_line",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_get_start_position' => [
				'cpp-method' => "gtk_css_section_get_start_position",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_ref' => [
				'cpp-method' => "gtk_css_section_ref",
				'static' => FALSE,
				'return-type' => "GtkCssSection",
				'parameters' => NULL
			],

			//--------------
			'gtk_css_section_unref' => [
				'cpp-method' => "gtk_css_section_unref",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],
		]



	];