<?php

	return [

		'configs' => [
			'cpp-object' => "GtkMenu",
			'name'=>"GtkMenu_",
			'extends'=>"GtkMenuShell_",
			'cast_macro' => "GTK_MENU"
		],
		

		'dependences' => [
			"GtkMenuShell.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_menu_new",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'new_from_model' => [
				'cpp-method' => "gtk_menu_new_from_model",
				'return-type' => NULL,
				'static' => TRUE,
				'parameters' => [
					[
						'type' => "GMenuModel",
						'name' => "model",
						'cast_macro' => NULL
					]
				],
			],

			// 
			'set_screen' => [
				'cpp-method' => "gtk_menu_set_screen",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GdkScreen",
						'name' => "screen",
					],
				],
			],

			// 
			'reorder_child' => [
				'cpp-method' => "gtk_menu_reorder_child",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' =>  [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gint",
						'name' => "position",
					]
				],
			],

			// 
			'attach' => [
				'cpp-method' => "gtk_menu_attach",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "guint",
						'name' => "left_attach",
					],
					[
						'type' => "guint",
						'name' => "right_attach",
					],
					[
						'type' => "guint",
						'name' => "top_attach",
					],
					[
						'type' => "guint",
						'name' => "bottom_attach",
					]
				],
			],

			// 
			'popup_at_rect' => [
				'cpp-method' => "gtk_menu_popup_at_rect",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "rect_window",
					],
					[
						'type' => "GdkRectangle",
						'name' => "rect",
					],
					[
						'type' => "GdkGravity",
						'name' => "rect_anchor",
					],
					[
						'type' => "GdkGravity",
						'name' => "menu_anchor",
					],
					[
						'type' => "GdkEvent",
						'name' => "trigger_event",
					],
				],
			],

			// 
			'at_widget' => [
				'cpp-method' => "gtk_menu_popup_at_widget",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
					[
						'type' => "GdkGravity",
						'name' => "widget_anchor",
					],
					[
						'type' => "GdkGravity",
						'name' => "menu_anchor",
					],
					[
						'type' => "GdkEvent",
						'name' => "trigger_event",
					],
				],
			],

			// 
			'at_pointer' => [
				'cpp-method' => "gtk_menu_popup_at_pointer",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GdkEvent",
						'name' => "trigger_event",
					],
				],
			],

			// 
			'set_accel_group' => [
				'cpp-method' => "gtk_menu_set_accel_group",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkAccelGroup",
						'name' => "accel_group",
					],
				],
			],

			// 
			'get_accel_group' => [
				'cpp-method' => "gtk_menu_get_accel_group",
				'return-type' => "GtkAccelGroup",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_accel_path' => [
				'cpp-method' => "gtk_menu_set_accel_path",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "accel_path",
					]
				],
			],

			// 
			'get_accel_path' => [
				'cpp-method' => "gtk_menu_get_accel_path",
				'return-type' => "gchar *",
				'static' => FALSE,
				'parameters' => NULL,
			],


			// 
			'set_monitor' => [
				'cpp-method' => "gtk_menu_set_monitor",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "monitor_num",
					]
				],
			],

			// 
			'get_monitor' => [
				'cpp-method' => "gtk_menu_get_monitor",
				'return-type' => "gint",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'place_on_monitor' => [
				'cpp-method' => "gtk_menu_place_on_monitor",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GdkMonitor",
						'name' => "monitor",
					]
				],
			],

			// 
			'set_reserve_toggle_size' => [
				'cpp-method' => "gtk_menu_set_reserve_toggle_size",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "reserve_toggle_size",
					]
				],
			],

			// 
			'get_reserve_toggle_size' => [
				'cpp-method' => "gtk_menu_get_reserve_toggle_size",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'popdown' => [
				'cpp-method' => "gtk_menu_popdown",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'reposition' => [
				'cpp-method' => "gtk_menu_reposition",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'get_active' => [
				'cpp-method' => "gtk_menu_get_active",
				'return-type' => "GtkWidget",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_active' => [
				'cpp-method' => "gtk_menu_set_active",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "index"
					]
				],
			],

			// 
			'attach_to_widget' => [
				'cpp-method' => "gtk_menu_attach_to_widget",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "attach_widget"
					],
					[
						'type' => "GtkMenuDetachFunc",
						'name' => "detacher"
					],
				],
			],

			// 
			'detach' => [
				'cpp-method' => "gtk_menu_detach",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'get_attach_widget' => [
				'cpp-method' => "gtk_menu_get_attach_widget",
				'return-type' => "GtkWidget",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'get_for_attach_widget' => [
				'cpp-method' => "gtk_menu_get_for_attach_widget",
				'return-type' => "GList",
				'static' => FALSE,
				'parameters' => NULL,
			],

			





		]



	];