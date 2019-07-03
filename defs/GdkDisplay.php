<?php

	return [

		'configs' => [
			'cpp-object' => "GdkDisplay",
			'name' => "GdkDisplay_",
			'extends' => "GObject_",
			'cast_macro' => "GDK_DISPLAY"
		],
		

		'dependences' => [
			"GObject.h",
			"GdkScreen.h",
			"GdkEvent.h",
			"GdkWindow.h",
			"GdkMonitor.h",
		],


		'methods' => [
			'open' => [
				'cpp-method' => "gdk_display_open",
				'static' => FALSE,
				'return-type' => "GdkDisplay",
				'parameters' => NULL
			],

			//--------------
			'get_default' => [
				'cpp-method' => "gdk_display_get_default",
				'static' => FALSE,
				'return-type' => "GdkDisplay",
				'parameters' => NULL
			],

			//--------------
			'get_name' => [
				'cpp-method' => "gdk_display_get_name",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],

			//--------------
			'get_n_screens' => [
				'cpp-method' => "gdk_display_get_n_screens",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'get_screen' => [
				'cpp-method' => "gdk_display_get_screen",
				'static' => FALSE,
				'return-type' => "GdkScreen",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "screen_num",
					],
				],
			],

			//--------------
			'get_default_screen' => [
				'cpp-method' => "gdk_display_get_default_screen",
				'static' => FALSE,
				'return-type' => "GdkScreen",
				'parameters' => NULL
			],

			//--------------
			'get_device_manager' => [
				'cpp-method' => "gdk_display_get_device_manager",
				'static' => FALSE,
				'return-type' => "GdkDeviceManager",
				'parameters' => NULL
			],

			//--------------
			'pointer_ungrab' => [
				'cpp-method' => "gdk_display_pointer_ungrab",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint32",
						'name' => "time_",
					],
				],
			],

			//--------------
			'keyboard_ungrab' => [
				'cpp-method' => "gdk_display_keyboard_ungrab",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint32",
						'name' => "time_",
					],
				],
			],

			//--------------
			'pointer_is_grabbed' => [
				'cpp-method' => "gdk_display_pointer_is_grabbed",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'device_is_grabbed' => [
				'cpp-method' => "gdk_display_device_is_grabbed",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
				],
			],

			//--------------
			'beep' => [
				'cpp-method' => "gdk_display_beep",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'sync' => [
				'cpp-method' => "gdk_display_sync",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'flush' => [
				'cpp-method' => "gdk_display_flush",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'close' => [
				'cpp-method' => "gdk_display_close",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'is_closed' => [
				'cpp-method' => "gdk_display_is_closed",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_event' => [
				'cpp-method' => "gdk_display_get_event",
				'static' => FALSE,
				'return-type' => "GdkEvent",
				'parameters' => NULL
			],

			//--------------
			'peek_event' => [
				'cpp-method' => "gdk_display_peek_event",
				'static' => FALSE,
				'return-type' => "GdkEvent",
				'parameters' => NULL
			],

			//--------------
			'put_event' => [
				'cpp-method' => "gdk_display_put_event",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkEvent",
						'name' => "event",
					],
				],
			],

			//--------------
			'has_pending' => [
				'cpp-method' => "gdk_display_has_pending",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_double_click_time' => [
				'cpp-method' => "gdk_display_set_double_click_time",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "msec",
					],
				],
			],

			//--------------
			'set_double_click_distance' => [
				'cpp-method' => "gdk_display_set_double_click_distance",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "distance",
					],
				],
			],

			//--------------
			'get_pointer' => [
				'cpp-method' => "gdk_display_get_pointer",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkScreen",
						'name' => "screen",
					],
					[
						'type' => "gint",
						'name' => "x",
					],
					[
						'type' => "gint",
						'name' => "y",
					],
					[
						'type' => "GdkModifierType",
						'name' => "mask",
					],
				],
			],

			//--------------
			'list_devices' => [
				'cpp-method' => "gdk_display_list_devices",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'get_window_at_pointer' => [
				'cpp-method' => "gdk_display_get_window_at_pointer",
				'static' => FALSE,
				'return-type' => "GdkWindow",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "win_x",
					],
					[
						'type' => "gint",
						'name' => "win_y",
					],
				],
			],

			//--------------
			'warp_pointer' => [
				'cpp-method' => "gdk_display_warp_pointer",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkScreen",
						'name' => "screen",
					],
					[
						'type' => "gint",
						'name' => "x",
					],
					[
						'type' => "gint",
						'name' => "y",
					],
				],
			],

			//--------------
			'supports_cursor_color' => [
				'cpp-method' => "gdk_display_supports_cursor_color",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'supports_cursor_alpha' => [
				'cpp-method' => "gdk_display_supports_cursor_alpha",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_default_cursor_size' => [
				'cpp-method' => "gdk_display_get_default_cursor_size",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'get_maximal_cursor_size' => [
				'cpp-method' => "gdk_display_get_maximal_cursor_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "width",
					],
					[
						'type' => "guint",
						'name' => "height",
					],
				],
			],

			//--------------
			'get_default_group' => [
				'cpp-method' => "gdk_display_get_default_group",
				'static' => FALSE,
				'return-type' => "GdkWindow",
				'parameters' => NULL
			],

			//--------------
			'supports_selection_notification' => [
				'cpp-method' => "gdk_display_supports_selection_notification",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'request_selection_notification' => [
				'cpp-method' => "gdk_display_request_selection_notification",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkAtom",
						'name' => "selection",
					],
				],
			],

			//--------------
			'supports_clipboard_persistence' => [
				'cpp-method' => "gdk_display_supports_clipboard_persistence",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'store_clipboard' => [
				'cpp-method' => "gdk_display_store_clipboard",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "clipboard_window",
					],
					[
						'type' => "guint32",
						'name' => "time_",
					],
					[
						'type' => "GdkAtom",
						'name' => "targets",
					],
					[
						'type' => "gint",
						'name' => "n_targets",
					],
				],
			],

			//--------------
			'supports_shapes' => [
				'cpp-method' => "gdk_display_supports_shapes",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'supports_input_shapes' => [
				'cpp-method' => "gdk_display_supports_input_shapes",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'supports_composite' => [
				'cpp-method' => "gdk_display_supports_composite",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_app_launch_context' => [
				'cpp-method' => "gdk_display_get_app_launch_context",
				'static' => FALSE,
				'return-type' => "GdkAppLaunchContext",
				'parameters' => NULL
			],

			//--------------
			'notify_startup_complete' => [
				'cpp-method' => "gdk_display_notify_startup_complete",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "startup_id",
					],
				],
			],

			//--------------
			'get_default_seat' => [
				'cpp-method' => "gdk_display_get_default_seat",
				'static' => FALSE,
				'return-type' => "GdkSeat",
				'parameters' => NULL
			],

			//--------------
			'list_seats' => [
				'cpp-method' => "gdk_display_list_seats",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'get_n_monitors' => [
				'cpp-method' => "gdk_display_get_n_monitors",
				'static' => FALSE,
				'return-type' => "int",
				'parameters' => NULL
			],

			//--------------
			'get_monitor' => [
				'cpp-method' => "gdk_display_get_monitor",
				'static' => FALSE,
				'return-type' => "GdkMonitor",
				'parameters' => [
					[
						'type' => "int",
						'name' => "monitor_num",
					],
				],
			],

			//--------------
			'get_primary_monitor' => [
				'cpp-method' => "gdk_display_get_primary_monitor",
				'static' => FALSE,
				'return-type' => "GdkMonitor",
				'parameters' => NULL
			],

			//--------------
			'get_monitor_at_point' => [
				'cpp-method' => "gdk_display_get_monitor_at_point",
				'static' => FALSE,
				'return-type' => "GdkMonitor",
				'parameters' => [
					[
						'type' => "int",
						'name' => "x",
					],
					[
						'type' => "int",
						'name' => "y",
					],
				],
			],

			//--------------
			'get_monitor_at_window' => [
				'cpp-method' => "gdk_display_get_monitor_at_window",
				'static' => FALSE,
				'return-type' => "GdkMonitor",
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],
		]



	];