<?php

	return [

		'configs' => [
			'cpp-object' => "GtkWidgetPath",
			'name' => "GtkWidgetPath_",
			'extends' => "Php::Base",
			'cast_macro' => ""
		],
		

		'dependences' => [
			"Php::Base.h",
		],


		'methods' => [
			'append_type' => [
				'cpp-method' => "gtk_widget_path_append_type",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "enum GType",
						'name' => "type",
					],
				],
			],

			//--------------
			'append_with_siblings' => [
				'cpp-method' => "gtk_widget_path_append_with_siblings",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkWidgetPath",
						'name' => "siblings",
						'cast_macro' => ""
					],
					[
						'type' => "guint",
						'name' => "sibling_index",
					],
				],
			],

			//--------------
			'append_for_widget' => [
				'cpp-method' => "gtk_widget_path_append_for_widget",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
				],
			],

			//--------------
			'copy' => [
				'cpp-method' => "gtk_widget_path_copy",
				'static' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => NULL
			],

			//--------------
			'ref' => [
				'cpp-method' => "gtk_widget_path_ref",
				'static' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => NULL
			],

			//--------------
			'unref' => [
				'cpp-method' => "gtk_widget_path_unref",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'free' => [
				'cpp-method' => "gtk_widget_path_free",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_object_type' => [
				'cpp-method' => "gtk_widget_path_get_object_type",
				'static' => FALSE,
				'return-type' => "enum GType",
				'parameters' => NULL
			],

			//--------------
			'has_parent' => [
				'cpp-method' => "gtk_widget_path_has_parent",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "enum GType",
						'name' => "type",
					],
				],
			],

			//--------------
			'is_type' => [
				'cpp-method' => "gtk_widget_path_is_type",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "enum GType",
						'name' => "type",
					],
				],
			],

			//--------------
			'iter_add_class' => [
				'cpp-method' => "gtk_widget_path_iter_add_class",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_add_region' => [
				'cpp-method' => "gtk_widget_path_iter_add_region",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "enum GtkRegionFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'iter_clear_classes' => [
				'cpp-method' => "gtk_widget_path_iter_clear_classes",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_clear_regions' => [
				'cpp-method' => "gtk_widget_path_iter_clear_regions",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_get_name' => [
				'cpp-method' => "gtk_widget_path_iter_get_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_get_object_name' => [
				'cpp-method' => "gtk_widget_path_iter_get_object_name",
				'static' => FALSE,
				'return-type' => "char",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_get_object_type' => [
				'cpp-method' => "gtk_widget_path_iter_get_object_type",
				'static' => FALSE,
				'return-type' => "enum GType",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_get_siblings' => [
				'cpp-method' => "gtk_widget_path_iter_get_siblings",
				'static' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_get_sibling_index' => [
				'cpp-method' => "gtk_widget_path_iter_get_sibling_index",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_get_state' => [
				'cpp-method' => "gtk_widget_path_iter_get_state",
				'static' => FALSE,
				'return-type' => "enum GtkStateFlags",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_has_class' => [
				'cpp-method' => "gtk_widget_path_iter_has_class",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_has_name' => [
				'cpp-method' => "gtk_widget_path_iter_has_name",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_has_qclass' => [
				'cpp-method' => "gtk_widget_path_iter_has_qclass",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "GQuark",
						'name' => "qname",
					],
				],
			],

			//--------------
			'iter_has_qname' => [
				'cpp-method' => "gtk_widget_path_iter_has_qname",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "GQuark",
						'name' => "qname",
					],
				],
			],

			//--------------
			'iter_has_qregion' => [
				'cpp-method' => "gtk_widget_path_iter_has_qregion",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "GQuark",
						'name' => "qname",
					],
					[
						'type' => "enum GtkRegionFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'iter_has_region' => [
				'cpp-method' => "gtk_widget_path_iter_has_region",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "enum GtkRegionFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'iter_list_classes' => [
				'cpp-method' => "gtk_widget_path_iter_list_classes",
				'static' => FALSE,
				'return-type' => "GSList",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_list_regions' => [
				'cpp-method' => "gtk_widget_path_iter_list_regions",
				'static' => FALSE,
				'return-type' => "GSList",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'iter_remove_class' => [
				'cpp-method' => "gtk_widget_path_iter_remove_class",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_remove_region' => [
				'cpp-method' => "gtk_widget_path_iter_remove_region",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_set_name' => [
				'cpp-method' => "gtk_widget_path_iter_set_name",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_set_object_name' => [
				'cpp-method' => "gtk_widget_path_iter_set_object_name",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "char",
						'name' => "name",
					],
				],
			],

			//--------------
			'iter_set_object_type' => [
				'cpp-method' => "gtk_widget_path_iter_set_object_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "enum GType",
						'name' => "type",
					],
				],
			],

			//--------------
			'iter_set_state' => [
				'cpp-method' => "gtk_widget_path_iter_set_state",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pos",
					],
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
				],
			],

			//--------------
			'length' => [
				'cpp-method' => "gtk_widget_path_length",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'new' => [
				'cpp-method' => "gtk_widget_path_new",
				'static' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => NULL
			],

			//--------------
			'prepend_type' => [
				'cpp-method' => "gtk_widget_path_prepend_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GType",
						'name' => "type",
					],
				],
			],

			//--------------
			'to_string' => [
				'cpp-method' => "gtk_widget_path_to_string",
				'static' => FALSE,
				'return-type' => "char",
				'parameters' => NULL
			],
		]



	];