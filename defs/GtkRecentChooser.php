<?php

	return [

		'configs' => [
			'cpp-object' => "GtkRecentChooser",
			'name' => "GtkRecentChooser_",
			'extends' => "Php::Base_",
			'cast_macro' => "GTK_RECENT_CHOOSER"
		],
		

		'dependences' => [
			"Php::Base.h",
		],


		'methods' => [
			'set_show_private' => [
				'cpp-method' => "gtk_recent_chooser_set_show_private",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_private",
					],
				],
			],

			//--------------
			'get_show_private' => [
				'cpp-method' => "gtk_recent_chooser_get_show_private",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_not_found' => [
				'cpp-method' => "gtk_recent_chooser_set_show_not_found",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_not_found",
					],
				],
			],

			//--------------
			'get_show_not_found' => [
				'cpp-method' => "gtk_recent_chooser_get_show_not_found",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_icons' => [
				'cpp-method' => "gtk_recent_chooser_set_show_icons",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_icons",
					],
				],
			],

			//--------------
			'get_show_icons' => [
				'cpp-method' => "gtk_recent_chooser_get_show_icons",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_select_multiple' => [
				'cpp-method' => "gtk_recent_chooser_set_select_multiple",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "select_multiple",
					],
				],
			],

			//--------------
			'get_select_multiple' => [
				'cpp-method' => "gtk_recent_chooser_get_select_multiple",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_local_only' => [
				'cpp-method' => "gtk_recent_chooser_set_local_only",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "local_only",
					],
				],
			],

			//--------------
			'get_local_only' => [
				'cpp-method' => "gtk_recent_chooser_get_local_only",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_limit' => [
				'cpp-method' => "gtk_recent_chooser_set_limit",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "limit",
					],
				],
			],

			//--------------
			'get_limit' => [
				'cpp-method' => "gtk_recent_chooser_get_limit",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_show_tips' => [
				'cpp-method' => "gtk_recent_chooser_set_show_tips",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_tips",
					],
				],
			],

			//--------------
			'get_show_tips' => [
				'cpp-method' => "gtk_recent_chooser_get_show_tips",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_sort_type' => [
				'cpp-method' => "gtk_recent_chooser_set_sort_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRecentSortType",
						'name' => "sort_type",
					],
				],
			],

			//--------------
			'get_sort_type' => [
				'cpp-method' => "gtk_recent_chooser_get_sort_type",
				'static' => FALSE,
				'return-type' => "GtkRecentSortType",
				'parameters' => NULL
			],

			//--------------
			'(*GtkRecentSortFunc)' => [
				'cpp-method' => "(*GtkRecentSortFunc)",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkRecentInfo",
						'name' => "b",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
				],
			],

			//--------------
			'set_sort_func' => [
				'cpp-method' => "gtk_recent_chooser_set_sort_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRecentSortFunc",
						'name' => "sort_func",
					],
					[
						'type' => "gpointer",
						'name' => "sort_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "data_destroy",
					],
				],
			],

			//--------------
			'set_current_uri' => [
				'cpp-method' => "gtk_recent_chooser_set_current_uri",
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
			'get_current_uri' => [
				'cpp-method' => "gtk_recent_chooser_get_current_uri",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'get_current_item' => [
				'cpp-method' => "gtk_recent_chooser_get_current_item",
				'static' => FALSE,
				'return-type' => "GtkRecentInfo",
				'parameters' => NULL
			],

			//--------------
			'select_uri' => [
				'cpp-method' => "gtk_recent_chooser_select_uri",
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
			'unselect_uri' => [
				'cpp-method' => "gtk_recent_chooser_unselect_uri",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "uri",
					],
				],
			],

			//--------------
			'select_all' => [
				'cpp-method' => "gtk_recent_chooser_select_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'unselect_all' => [
				'cpp-method' => "gtk_recent_chooser_unselect_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_items' => [
				'cpp-method' => "gtk_recent_chooser_get_items",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'*get_uris' => [
				'cpp-method' => "*gtk_recent_chooser_get_uris",
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
			'add_filter' => [
				'cpp-method' => "gtk_recent_chooser_add_filter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRecentFilter",
						'name' => "filter",
					],
				],
			],

			//--------------
			'remove_filter' => [
				'cpp-method' => "gtk_recent_chooser_remove_filter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRecentFilter",
						'name' => "filter",
					],
				],
			],

			//--------------
			'list_filters' => [
				'cpp-method' => "gtk_recent_chooser_list_filters",
				'static' => FALSE,
				'return-type' => "GSList",
				'parameters' => NULL
			],

			//--------------
			'set_filter' => [
				'cpp-method' => "gtk_recent_chooser_set_filter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRecentFilter",
						'name' => "filter",
					],
				],
			],

			//--------------
			'get_filter' => [
				'cpp-method' => "gtk_recent_chooser_get_filter",
				'static' => FALSE,
				'return-type' => "GtkRecentFilter",
				'parameters' => NULL
			],
		]



	];