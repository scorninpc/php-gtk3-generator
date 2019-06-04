<?php

	return [

		'configs' => [
			'cpp-object' => "GtkBuilder",
			'name'=>"GtkBuilder_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_BUILDER"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_builder_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// 
			'new_from_file' => [
				'cpp-method' => "gtk_builder_new_from_file",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "filename"
					],
				],
			],

			// 
			'new_from_resource' => [
				'cpp-method' => "gtk_builder_new_from_resource",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "resource_path",
					],
				],
			],

			// 
			'new_from_string' => [
				'cpp-method' => "gtk_builder_new_from_string",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "string",
					],
				],
			],

			// 
			'add_callback_symbol' => [
				'cpp-method' => "gtk_builder_add_callback_symbol",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "callback_name",
					],
					[
						'type' => "gchar *",
						'name' => "add_callback_symbol",
					],
				],
			],

			// 
			'add_callback_symbols' => [
				'cpp-method' => "gtk_builder_add_callback_symbols",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "callback_name",
					],
					[
						'type' => "gchar *",
						'name' => "add_callback_symbol",
					],
				],
			],

			// 
			'lookup_callback_symbol' => [
				'cpp-method' => "gtk_builder_lookup_callback_symbol",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "callback_name",
					],
				],
			],

			// 
			'add_from_file' => [
				'cpp-method' => "gtk_builder_add_from_file",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "filename",
					],
				],
			],

			// 
			'add_from_resource' => [
				'cpp-method' => "gtk_builder_add_from_resource",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "resource_path",
					],
				],
			],

			// 
			'add_from_string' => [
				'cpp-method' => "gtk_builder_add_from_string",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "buffer",
					],
				],
			],

			// 
			'add_objects_from_file' => [
				'cpp-method' => "gtk_builder_add_objects_from_file",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "buffer",
					],
				],
			],

			// 
			'add_objects_from_string' => [
				'cpp-method' => "gtk_builder_add_objects_from_string",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "buffer",
					],
				],
			],

			// 
			'add_objects_from_resource' => [
				'cpp-method' => "gtk_builder_add_objects_from_resource",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "buffer",
					],
				],
			],

			// 
			'extend_with_template' => [
				'cpp-method' => "gtk_builder_extend_with_template",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
					[
						'type' => "GType",
						'name' => "template_type",
					],
					[
						'type' => "gchar *",
						'name' => "buffer",
					],
				],
			],

			// 
			'get_object' => [
				'cpp-method' => "gtk_builder_get_object",
				'static' => FALSE,
				'return-type' => "GObject",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			// 
			'get_objects' => [
				'cpp-method' => "gtk_builder_get_objects",
				'static' => FALSE,
				'return-type' => "GObject",
				'parameters' => [],
			],

			// 
			'expose_object' => [
				'cpp-method' => "gtk_builder_expose_object",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "GObject",
						'name' => "object",
					],
				],
			],

			// 
			'connect_signals' => [
				'cpp-method' => "gtk_builder_connect_signals",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
				],
			],

			// 
			'connect_signals_full' => [
				'cpp-method' => "gtk_builder_connect_signals_full",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
				],
			],

			// 
			'set_translation_domain' => [
				'cpp-method' => "gtk_builder_set_translation_domain",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "domain",
					],
				],
			],

			// 
			'get_translation_domain' => [
				'cpp-method' => "gtk_builder_get_translation_domain",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => [],
			],

			// 
			'get_application' => [
				'cpp-method' => "gtk_builder_get_application",
				'static' => FALSE,
				'return-type' => "GtkApplication",
				'parameters' => [],
			],

			// 
			'set_application' => [
				'cpp-method' => "gtk_builder_set_application",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkApplication",
						'name' => "application",
					],
				],
			],

			// 
			'get_type_from_name' => [
				'cpp-method' => "gtk_builder_get_type_from_name",
				'static' => FALSE,
				'return-type' => "GType",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "type_name",
					],
				],
			],

			// 
			'value_from_string' => [
				'cpp-method' => "gtk_builder_value_from_string",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "type_name",
					],
				],
			],

			// 
			'value_from_string_type' => [
				'cpp-method' => "gtk_builder_value_from_string_type",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "type_name",
					],
				],
			],


			
			




			//
		]



	];