<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkToolItem",
			'name'=>"GtkToolItem_",
			'extends'=>"GtkBin_",
			'cast_macro' => "GTK_TOOL_ITEM"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
			"GtkIconSize.h",
			"GtkOrientation.h",
			"GtkToolbarStyle.h",
			"GtkReliefStyle.h",
			"GtkSizeGroup.h",
		],


		'methods' => [

			'__construct' => [
				'cpp-method' => "gtk_tool_item_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'set_homogeneous' => [
				'cpp-method' => "gtk_tool_item_set_homogeneous",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "homogeneous",
					]
				]
			],

			'get_homogeneous' => [
				'cpp-method' => "gtk_tool_item_get_homogeneous",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_expand' => [
				'cpp-method' => "gtk_tool_item_set_expand",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "expand",
					]
				]
			],

			'get_expand' => [
				'cpp-method' => "gtk_tool_item_get_expand",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_tooltip_text' => [
				'cpp-method' => "gtk_tool_item_set_tooltip_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					]
				]
			],

			'set_tooltip_markup' => [
				'cpp-method' => "gtk_tool_item_set_tooltip_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					]
				]
			],

			'set_use_drag_window' => [
				'cpp-method' => "gtk_tool_item_set_use_drag_window",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_drag_window",
					]
				]
			],

			'get_use_drag_window' => [
				'cpp-method' => "gtk_tool_item_get_use_drag_window",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_visible_horizontal' => [
				'cpp-method' => "gtk_tool_item_set_visible_horizontal",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "visible_horizontal",
					]
				]
			],

			'get_visible_horizontal' => [
				'cpp-method' => "gtk_tool_item_get_visible_horizontal",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_visible_vertical' => [
				'cpp-method' => "gtk_tool_item_set_visible_vertical",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "visible_vertical",
					]
				]
			],

			'get_visible_vertical' => [
				'cpp-method' => "gtk_tool_item_get_visible_vertical",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_is_important' => [
				'cpp-method' => "gtk_tool_item_set_is_important",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "is_important",
					]
				]
			],

			'get_is_important' => [
				'cpp-method' => "gtk_tool_item_get_is_important",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_icon_size' => [
				'cpp-method' => "gtk_tool_item_get_icon_size",
				'return-type' => "enum GtkIconSize",
				'parameters' => NULL
			],

			'get_orientation' => [
				'cpp-method' => "gtk_tool_item_get_orientation",
				'return-type' => "enum GtkOrientation",
				'parameters' => NULL
			],

			'get_toolbar_style' => [
				'cpp-method' => "gtk_tool_item_get_toolbar_style",
				'return-type' => "enum GtkToolbarStyle",
				'parameters' => NULL
			],

			'get_relief_style' => [
				'cpp-method' => "gtk_tool_item_get_relief_style",
				'return-type' => "enum GtkReliefStyle",
				'parameters' => NULL
			],

			'get_text_alignment' => [
				'cpp-method' => "gtk_tool_item_get_text_alignment",
				'return-type' => "gfloat",
				'parameters' => NULL
			],

			'get_text_orientation' => [
				'cpp-method' => "gtk_tool_item_get_text_orientation",
				'return-type' => "enum GtkOrientation",
				'parameters' => NULL
			],

			'retrieve_proxy_menu_item' => [
				'cpp-method' => "gtk_tool_item_retrieve_proxy_menu_item",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			'set_proxy_menu_item' => [
				'cpp-method' => "gtk_tool_item_set_proxy_menu_item",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "menu_item_id",
					],
					[
						'type' => "GtkWidget",
						'name' => "menu_item",
					]
				]
			],

			'get_proxy_menu_item' => [
				'cpp-method' => "gtk_tool_item_get_proxy_menu_item",
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "menu_item_id",
					],
				]
			],

			'rebuild_menu' => [
				'cpp-method' => "gtk_tool_item_rebuild_menu",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'toolbar_reconfigured' => [
				'cpp-method' => "gtk_tool_item_toolbar_reconfigured",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'get_text_size_group' => [
				'cpp-method' => "gtk_tool_item_get_text_size_group",
				'return-type' => NULL,
				'parameters' => NULL
			],

		],
	];
