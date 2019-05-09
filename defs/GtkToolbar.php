<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkToolbar",
			'name'=>"GtkToolbar_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_TOOLBAR"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkWidget.h",
			"GtkToolItem.h",
			"GtkToolbarStyle.h",
			"GtkIconSize.h",
			"GtkReliefStyle.h",
		],


		'methods' => [

			'__construct' => [
				'cpp-method' => "gtk_toolbar_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'insert' => [
				'cpp-method' => "gtk_toolbar_insert",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkToolItem",
						'name' => "item",
					],
					[
						'type' => "gint",
						'name' => "pos",
					]
				]
			],

			'get_item_index' => [
				'cpp-method' => "gtk_toolbar_get_item_index",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkToolItem",
						'name' => "item",
					],
				]
			],

			'get_n_items' => [
				'cpp-method' => "gtk_toolbar_get_n_items",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_nth_item' => [
				'cpp-method' => "gtk_toolbar_get_nth_item",
				'return-type' => "GtkToolItem",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "n",
					],
				]
			],

			'get_drop_index' => [
				'cpp-method' => "gtk_toolbar_get_drop_index",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "x",
					],
					[
						'type' => "gint",
						'name' => "y",
					],
				]
			],

			'set_drop_highlight_item' => [
				'cpp-method' => "gtk_toolbar_set_drop_highlight_item",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkToolItem",
						'name' => "item",
					],
					[
						'type' => "gint",
						'name' => "index",
					]
				]
			],

			'set_show_arrow' => [
				'cpp-method' => "gtk_toolbar_set_show_arrow",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_arrow",
					]
				]
			],

			'unset_icon_size' => [
				'cpp-method' => "gtk_toolbar_unset_icon_size",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'get_show_arrow' => [
				'cpp-method' => "gtk_toolbar_get_show_arrow",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_style' => [
				'cpp-method' => "gtk_toolbar_get_style",
				'return-type' => "enum GtkToolbarStyle",
				'parameters' => NULL
			],

			'get_icon_size' => [
				'cpp-method' => "gtk_toolbar_get_icon_size",
				'return-type' => "enum GtkIconSize",
				'parameters' => NULL
			],

			'get_relief_style' => [
				'cpp-method' => "gtk_toolbar_get_relief_style",
				'return-type' => "enum GtkReliefStyle",
				'parameters' => NULL
			],

			'set_style' => [
				'cpp-method' => "gtk_toolbar_set_style",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkToolbarStyle",
						'name' => "style",
					]
				]
			],

			'set_icon_size' => [
				'cpp-method' => "gtk_toolbar_set_icon_size",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkIconSize",
						'name' => "style",
					]
				]
			],

			'unset_style' => [
				'cpp-method' => "gtk_toolbar_unset_style",
				'return-type' => NULL,
				'parameters' => NULL
			],

		],
	];
