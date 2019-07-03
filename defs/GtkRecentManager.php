<?php

	return [

		'configs' => [
			'cpp-object' => "GtkRecentManager",
			'name' => "GtkRecentManager_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_RECENT_MANAGER"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [
			'new' => [
				'cpp-method' => "gtk_recent_manager_new",
				'static' => FALSE,
				'return-type' => "GtkRecentManager",
				'parameters' => NULL
			],

			//--------------
			'get_default' => [
				'cpp-method' => "gtk_recent_manager_get_default",
				'static' => FALSE,
				'return-type' => "GtkRecentManager",
				'parameters' => NULL
			],

			//--------------
			'add_item' => [
				'cpp-method' => "gtk_recent_manager_add_item",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
				],
			],

			//--------------
			'add_full' => [
				'cpp-method' => "gtk_recent_manager_add_full",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
					[
						'type' => "GtkRecentData",
						'name' => "recent_data",
					],
				],
			],

			//--------------
			'remove_item' => [
				'cpp-method' => "gtk_recent_manager_remove_item",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'lookup_item' => [
				'cpp-method' => "gtk_recent_manager_lookup_item",
				'static' => FALSE,
				'return-type' => "GtkRecentInfo",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'has_item' => [
				'cpp-method' => "gtk_recent_manager_has_item",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
				],
			],

			//--------------
			'move_item' => [
				'cpp-method' => "gtk_recent_manager_move_item",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
					[
						'type' => "gchar",
						'name' => "new_uri",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'get_items' => [
				'cpp-method' => "gtk_recent_manager_get_items",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'purge_items' => [
				'cpp-method' => "gtk_recent_manager_purge_items",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'gtk_recent_info_ref' => [
				'cpp-method' => "gtk_recent_info_ref",
				'static' => FALSE,
				'return-type' => "GtkRecentInfo",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_unref' => [
				'cpp-method' => "gtk_recent_info_unref",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_uri' => [
				'cpp-method' => "gtk_recent_info_get_uri",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_display_name' => [
				'cpp-method' => "gtk_recent_info_get_display_name",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_description' => [
				'cpp-method' => "gtk_recent_info_get_description",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_mime_type' => [
				'cpp-method' => "gtk_recent_info_get_mime_type",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_private_hint' => [
				'cpp-method' => "gtk_recent_info_get_private_hint",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_application_info' => [
				'cpp-method' => "gtk_recent_info_get_application_info",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "app_name",
					],
					[
						'type' => "gchar",
						'name' => "app_exec",
					],
					[
						'type' => "guint",
						'name' => "count",
					],
					[
						'type' => "time_t",
						'name' => "time_",
					],
				],
			],

			//--------------
			'*gtk_recent_info_get_applications' => [
				'cpp-method' => "*gtk_recent_info_get_applications",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => [
					[
						'type' => "gsize",
						'name' => "length",
					],
				],
			],

			//--------------
			'gtk_recent_info_last_application' => [
				'cpp-method' => "gtk_recent_info_last_application",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_has_application' => [
				'cpp-method' => "gtk_recent_info_has_application",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "app_name",
					],
				],
			],

			//--------------
			'gtk_recent_info_create_app_info' => [
				'cpp-method' => "gtk_recent_info_create_app_info",
				'static' => FALSE,
				'return-type' => "GAppInfo",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "app_name",
					],
					[
						'type' => "GError",
						'name' => "error",
					],
				],
			],

			//--------------
			'*gtk_recent_info_get_groups' => [
				'cpp-method' => "*gtk_recent_info_get_groups",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => [
					[
						'type' => "gsize",
						'name' => "length",
					],
				],
			],

			//--------------
			'gtk_recent_info_has_group' => [
				'cpp-method' => "gtk_recent_info_has_group",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "group_name",
					],
				],
			],

			//--------------
			'gtk_recent_info_get_icon' => [
				'cpp-method' => "gtk_recent_info_get_icon",
				'static' => FALSE,
				'return-type' => "GdkPixbuf",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "size",
					],
				],
			],

			//--------------
			'gtk_recent_info_get_gicon' => [
				'cpp-method' => "gtk_recent_info_get_gicon",
				'static' => FALSE,
				'return-type' => "GIcon",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_short_name' => [
				'cpp-method' => "gtk_recent_info_get_short_name",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_uri_display' => [
				'cpp-method' => "gtk_recent_info_get_uri_display",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_get_age' => [
				'cpp-method' => "gtk_recent_info_get_age",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_is_local' => [
				'cpp-method' => "gtk_recent_info_is_local",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_exists' => [
				'cpp-method' => "gtk_recent_info_exists",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'gtk_recent_info_match' => [
				'cpp-method' => "gtk_recent_info_match",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkRecentInfo",
						'name' => "info_b",
					],
				],
			],
		]



	];