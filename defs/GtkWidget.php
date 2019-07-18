<?php

	return [

		'configs' => [
			'cpp-object' => "GtkWidget",
			'name' => "GtkWidget_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_WIDGET"
		],
		

		'dependences' => [
			"GObject.h",
			"GdkEvent.h",
			"GdkWindow.h",
			"GdkVisual.h",
			"GtkWidgetPath.h",
			"GtkStyleContext.h",
		],


		'methods' => [
			
			//--------------
			'__construct' => [
				'cpp-method' => "gtk_widget_new",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "first_property_name",
					],
				],
			],

			//--------------
			'destroy' => [
				'cpp-method' => "gtk_widget_destroy",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'in_destruction' => [
				'cpp-method' => "gtk_widget_in_destruction",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'destroyed' => [
				'cpp-method' => "gtk_widget_destroyed",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget_pointer",
					],
				],
			],

			//--------------
			'unparent' => [
				'cpp-method' => "gtk_widget_unparent",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'show' => [
				'cpp-method' => "gtk_widget_show",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'show_now' => [
				'cpp-method' => "gtk_widget_show_now",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'hide' => [
				'cpp-method' => "gtk_widget_hide",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'show_all' => [
				'cpp-method' => "gtk_widget_show_all",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'map' => [
				'cpp-method' => "gtk_widget_map",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'unmap' => [
				'cpp-method' => "gtk_widget_unmap",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'realize' => [
				'cpp-method' => "gtk_widget_realize",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'unrealize' => [
				'cpp-method' => "gtk_widget_unrealize",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'draw' => [
				'cpp-method' => "gtk_widget_draw",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
				],
			],

			//--------------
			'queue_draw' => [
				'cpp-method' => "gtk_widget_queue_draw",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'queue_resize' => [
				'cpp-method' => "gtk_widget_queue_resize",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'queue_resize_no_redraw' => [
				'cpp-method' => "gtk_widget_queue_resize_no_redraw",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'queue_allocate' => [
				'cpp-method' => "gtk_widget_queue_allocate",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_frame_clock' => [
				'cpp-method' => "gtk_widget_get_frame_clock",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GdkFrameClock",
				'parameters' => NULL
			],

			//--------------
			'get_scale_factor' => [
				'cpp-method' => "gtk_widget_get_scale_factor",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'add_tick_callback' => [
				'cpp-method' => "gtk_widget_add_tick_callback",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "GtkTickCallback",
						'name' => "callback",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "notify",
					],
				],
			],

			//--------------
			'remove_tick_callback' => [
				'cpp-method' => "gtk_widget_remove_tick_callback",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "id",
					],
				],
			],

			//--------------
			'size_request' => [
				'cpp-method' => "gtk_widget_size_request",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRequisition",
						'name' => "requisition",
					],
				],
			],

			//--------------
			'get_child_requisition' => [
				'cpp-method' => "gtk_widget_get_child_requisition",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRequisition",
						'name' => "requisition",
					],
				],
			],

			//--------------
			'size_allocate' => [
				'cpp-method' => "gtk_widget_size_allocate",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "allocation",
					],
				],
			],

			//--------------
			'size_allocate_with_baseline' => [
				'cpp-method' => "gtk_widget_size_allocate_with_baseline",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "allocation",
					],
					[
						'type' => "gint",
						'name' => "baseline",
					],
				],
			],

			//--------------
			'add_accelerator' => [
				'cpp-method' => "gtk_widget_add_accelerator",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "accel_signal",
					],
					[
						'type' => "GtkAccelGroup",
						'name' => "accel_group",
					],
					[
						'type' => "guint",
						'name' => "accel_key",
					],
					[
						'type' => "GdkModifierType",
						'name' => "accel_mods",
					],
					[
						'type' => "GtkAccelFlags",
						'name' => "accel_flags",
					],
				],
			],

			//--------------
			'remove_accelerator' => [
				'cpp-method' => "gtk_widget_remove_accelerator",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkAccelGroup",
						'name' => "accel_group",
					],
					[
						'type' => "guint",
						'name' => "accel_key",
					],
					[
						'type' => "GdkModifierType",
						'name' => "accel_mods",
					],
				],
			],

			//--------------
			'set_accel_path' => [
				'cpp-method' => "gtk_widget_set_accel_path",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "accel_path",
					],
					[
						'type' => "GtkAccelGroup",
						'name' => "accel_group",
					],
				],
			],

			//--------------
			'list_accel_closures' => [
				'cpp-method' => "gtk_widget_list_accel_closures",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'can_activate_accel' => [
				'cpp-method' => "gtk_widget_can_activate_accel",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "guint",
						'name' => "signal_id",
					],
				],
			],

			//--------------
			'event' => [
				'cpp-method' => "gtk_widget_event",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkEvent",
						'name' => "event",
						'cast_macro' => "GDK_EVENT"
					],
				],
			],

			//--------------
			'activate' => [
				'cpp-method' => "gtk_widget_activate",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'reparent' => [
				'cpp-method' => "gtk_widget_reparent",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.14",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "new_parent",
					],
				],
			],

			//--------------
			'intersect' => [
				'cpp-method' => "gtk_widget_intersect",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkRectangle",
						'name' => "area",
					],
					[
						'type' => "GdkRectangle",
						'name' => "intersection",
					],
				],
			],

			//--------------
			'is_focus' => [
				'cpp-method' => "gtk_widget_is_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'grab_focus' => [
				'cpp-method' => "gtk_widget_grab_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'grab_default' => [
				'cpp-method' => "gtk_widget_grab_default",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_name' => [
				'cpp-method' => "gtk_widget_set_name",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'get_name' => [
				'cpp-method' => "gtk_widget_get_name",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_state' => [
				'cpp-method' => "gtk_widget_set_state",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
				],
			],

			//--------------
			'set_sensitive' => [
				'cpp-method' => "gtk_widget_set_sensitive",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "sensitive",
					],
				],
			],

			//--------------
			'set_parent' => [
				'cpp-method' => "gtk_widget_set_parent",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "parent",
					],
				],
			],

			//--------------
			'set_parent_window' => [
				'cpp-method' => "gtk_widget_set_parent_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "parent_window",
					],
				],
			],

			//--------------
			'get_parent_window' => [
				'cpp-method' => "gtk_widget_get_parent_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GdkWindow",
				'parameters' => NULL
			],

			//--------------
			'set_events' => [
				'cpp-method' => "gtk_widget_set_events",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "events",
					],
				],
			],

			//--------------
			'get_events' => [
				'cpp-method' => "gtk_widget_get_events",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'add_events' => [
				'cpp-method' => "gtk_widget_add_events",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "events",
					],
				],
			],

			//--------------
			'set_device_events' => [
				'cpp-method' => "gtk_widget_set_device_events",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
					[
						'type' => "enum GdkEventMask",
						'name' => "events",
					],
				],
			],

			//--------------
			'get_device_events' => [
				'cpp-method' => "gtk_widget_get_device_events",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "enum GdkEventMask",
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
				],
			],

			//--------------
			'add_device_events' => [
				'cpp-method' => "gtk_widget_add_device_events",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
					[
						'type' => "enum GdkEventMask",
						'name' => "events",
					],
				],
			],

			//--------------
			'set_device_enabled' => [
				'cpp-method' => "gtk_widget_set_device_enabled",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
					[
						'type' => "gboolean",
						'name' => "enabled",
					],
				],
			],

			//--------------
			'get_device_enabled' => [
				'cpp-method' => "gtk_widget_get_device_enabled",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
				],
			],

			//--------------
			'get_toplevel' => [
				'cpp-method' => "gtk_widget_get_toplevel",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'get_ancestor' => [
				'cpp-method' => "gtk_widget_get_ancestor",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "GType",
						'name' => "widget_type",
					],
				],
			],

			//--------------
			'get_visual' => [
				'cpp-method' => "gtk_widget_get_visual",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GdkVisual",
				'parameters' => NULL
			],

			//--------------
			'set_visual' => [
				'cpp-method' => "gtk_widget_set_visual",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkVisual",
						'name' => "visual",
						'cast_macro' => "GDK_VISUAL"
					],
				],
			],

			//--------------
			'get_pointer' => [
				'cpp-method' => "gtk_widget_get_pointer",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.4",
				'return-type' => NULL,
				'parameters' => [
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
			'is_ancestor' => [
				'cpp-method' => "gtk_widget_is_ancestor",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "ancestor",
					],
				],
			],

			//--------------
			'translate_coordinates' => [
				'cpp-method' => "gtk_widget_translate_coordinates",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "dest_widget",
					],
					[
						'type' => "gint",
						'name' => "src_x",
					],
					[
						'type' => "gint",
						'name' => "src_y",
					],
					[
						'type' => "gint",
						'name' => "dest_x",
					],
					[
						'type' => "gint",
						'name' => "dest_y",
					],
				],
			],

			//--------------
			'hide_on_delete' => [
				'cpp-method' => "gtk_widget_hide_on_delete",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_style' => [
				'cpp-method' => "gtk_widget_set_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStyle",
						'name' => "style",
						'cast_macro' => "GTK_STYLE"
					],
				],
			],

			//--------------
			'ensure_style' => [
				'cpp-method' => "gtk_widget_ensure_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_style' => [
				'cpp-method' => "gtk_widget_get_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "GtkStyle",
				'parameters' => NULL
			],

			//--------------
			'reset_rc_styles' => [
				'cpp-method' => "gtk_widget_reset_rc_styles",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_default_style' => [
				'cpp-method' => "gtk_widget_get_default_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "GtkStyle",
				'parameters' => NULL
			],

			//--------------
			'set_direction' => [
				'cpp-method' => "gtk_widget_set_direction",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkTextDirection",
						'name' => "dir",
					],
				],
			],

			//--------------
			'get_direction' => [
				'cpp-method' => "gtk_widget_get_direction",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkTextDirection",
				'parameters' => NULL
			],

			//--------------
			'set_default_direction' => [
				'cpp-method' => "gtk_widget_set_default_direction",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkTextDirection",
						'name' => "dir",
					],
				]
			],

			//--------------
			'get_default_direction' => [
				'cpp-method' => "gtk_widget_get_default_direction",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkTextDirection",
				'parameters' => NULL
			],

			//--------------
			'shape_combine_region' => [
				'cpp-method' => "gtk_widget_shape_combine_region",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_region_t",
						'name' => "region",
					],
				],
			],

			//--------------
			'input_shape_combine_region' => [
				'cpp-method' => "gtk_widget_input_shape_combine_region",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_region_t",
						'name' => "region",
					],
				],
			],

			//--------------
			'path' => [
				'cpp-method' => "gtk_widget_path",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "path_length",
					],
					[
						'type' => "gchar *",
						'name' => "path",
					],
					[
						'type' => "gchar *",
						'name' => "path_reversed",
					],
				],
			],

			//--------------
			'class_path' => [
				'cpp-method' => "gtk_widget_class_path",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "path_length",
					],
					[
						'type' => "gchar *",
						'name' => "path",
					],
					[
						'type' => "gchar *",
						'name' => "path_reversed",
					],
				],
			],

			//--------------
			'get_composite_name' => [
				'cpp-method' => "gtk_widget_get_composite_name",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.10",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'override_background_color' => [
				'cpp-method' => "gtk_widget_override_background_color",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.16",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "GdkRGBA",
						'name' => "color",
					],
				],
			],

			//--------------
			'override_color' => [
				'cpp-method' => "gtk_widget_override_color",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.16",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "GdkRGBA",
						'name' => "color",
					],
				],
			],

			//--------------
			'override_font' => [
				'cpp-method' => "gtk_widget_override_font",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.16",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "PangoFontDescription",
						'name' => "font_desc",
					],
				],
			],

			//--------------
			'override_symbolic_color' => [
				'cpp-method' => "gtk_widget_override_symbolic_color",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.16",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "GdkRGBA",
						'name' => "color",
					],
				],
			],

			//--------------
			'override_cursor' => [
				'cpp-method' => "gtk_widget_override_cursor",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.16",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkRGBA",
						'name' => "cursor",
					],
					[
						'type' => "GdkRGBA",
						'name' => "secondary_cursor",
					],
				],
			],

			//--------------
			'modify_style' => [
				'cpp-method' => "gtk_widget_modify_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRcStyle",
						'name' => "style",
					],
				],
			],

			//--------------
			'get_modifier_style' => [
				'cpp-method' => "gtk_widget_get_modifier_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "GtkRcStyle",
				'parameters' => NULL
			],

			//--------------
			'modify_fg' => [
				'cpp-method' => "gtk_widget_modify_fg",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
					[
						'type' => "GdkColor",
						'name' => "color",
					],
				],
			],

			//--------------
			'modify_bg' => [
				'cpp-method' => "gtk_widget_modify_bg",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
					[
						'type' => "GdkColor",
						'name' => "color",
					],
				],
			],

			//--------------
			'modify_text' => [
				'cpp-method' => "gtk_widget_modify_text",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
					[
						'type' => "GdkColor",
						'name' => "color",
					],
				],
			],

			//--------------
			'modify_base' => [
				'cpp-method' => "gtk_widget_modify_base",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
					[
						'type' => "GdkColor",
						'name' => "color",
					],
				],
			],

			//--------------
			'modify_font' => [
				'cpp-method' => "gtk_widget_modify_font",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "PangoFontDescription",
						'name' => "font_desc",
					],
				],
			],

			//--------------
			'modify_cursor' => [
				'cpp-method' => "gtk_widget_modify_cursor",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkColor",
						'name' => "primary",
					],
					[
						'type' => "GdkColor",
						'name' => "secondary",
					],
				],
			],

			//--------------
			'create_pango_context' => [
				'cpp-method' => "gtk_widget_create_pango_context",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "PangoContext",
				'parameters' => NULL
			],

			//--------------
			'get_pango_context' => [
				'cpp-method' => "gtk_widget_get_pango_context",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "PangoContext",
				'parameters' => NULL
			],

			//--------------
			'set_font_options' => [
				'cpp-method' => "gtk_widget_set_font_options",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_font_options_t",
						'name' => "options",
					],
				],
			],

			//--------------
			'set_font_map' => [
				'cpp-method' => "gtk_widget_set_font_map",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "PangoFontMap",
						'name' => "font_map",
					],
				],
			],

			//--------------
			'get_font_map' => [
				'cpp-method' => "gtk_widget_get_font_map",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "PangoFontMap",
				'parameters' => NULL
			],

			//--------------
			'create_pango_layout' => [
				'cpp-method' => "gtk_widget_create_pango_layout",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "PangoLayout",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'render_icon' => [
				'cpp-method' => "gtk_widget_render_icon",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "GdkPixbuf",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "stock_id",
					],
					[
						'type' => "GtkIconSize",
						'name' => "size",
					],
					[
						'type' => "gchar *",
						'name' => "detail",
					],
				],
			],

			//--------------
			'render_icon_pixbuf' => [
				'cpp-method' => "gtk_widget_render_icon_pixbuf",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.10",
				'return-type' => "GdkPixbuf",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "stock_id",
					],
					[
						'type' => "GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'pop_composite_child' => [
				'cpp-method' => "gtk_widget_pop_composite_child",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.10",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'push_composite_child' => [
				'cpp-method' => "gtk_widget_push_composite_child",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.10",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'queue_draw_area' => [
				'cpp-method' => "gtk_widget_queue_draw_area",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "x",
					],
					[
						'type' => "gint",
						'name' => "y",
					],
					[
						'type' => "gint",
						'name' => "width",
					],
					[
						'type' => "gint",
						'name' => "height",
					],
				],
			],

			//--------------
			'queue_draw_region' => [
				'cpp-method' => "gtk_widget_queue_draw_region",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_region_t",
						'name' => "region",
					],
				],
			],

			//--------------
			'set_app_paintable' => [
				'cpp-method' => "gtk_widget_set_app_paintable",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "app_paintable",
					],
				],
			],

			//--------------
			'set_double_buffered' => [
				'cpp-method' => "gtk_widget_set_double_buffered",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.14",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "double_buffered",
					],
				],
			],

			//--------------
			'set_redraw_on_allocate' => [
				'cpp-method' => "gtk_widget_set_redraw_on_allocate",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "redraw_on_allocate",
					],
				],
			],

			//--------------
			'set_composite_name' => [
				'cpp-method' => "gtk_widget_set_composite_name",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.10",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'mnemonic_activate' => [
				'cpp-method' => "gtk_widget_mnemonic_activate",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "group_cycling",
					],
				],
			],

			//--------------
			'class_install_style_property' => [
				'cpp-method' => "gtk_widget_class_install_style_property",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GParamSpec",
						'name' => "pspec",
					],
				],
			],

			//--------------
			'class_install_style_property_parser' => [
				'cpp-method' => "gtk_widget_class_install_style_property_parser",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GParamSpec",
						'name' => "pspec",
					],
					[
						'type' => "GtkRcPropertyParser",
						'name' => "parser",
					],
				],
			],

			//--------------
			'class_find_style_property' => [
				'cpp-method' => "gtk_widget_class_find_style_property",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GParamSpec",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "property_name",
					],
				],
			],

			//--------------
			'*class_list_style_properties' => [
				'cpp-method' => "*gtk_widget_class_list_style_properties",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GParamSpec",
				'parameters' => [
					[
						'type' => "guint",
						'name' => "n_properties",
					],
				],
			],

			//--------------
			'send_expose' => [
				'cpp-method' => "gtk_widget_send_expose",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'deprecated' => "3.22",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GdkEvent",
						'name' => "event",
						'cast_macro' => "GDK_EVENT",
					],
				],
			],

			//--------------
			'send_focus_change' => [
				'cpp-method' => "gtk_widget_send_focus_change",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkEvent",
						'name' => "event",
						'cast_macro' => "GDK_EVENT",
					],
				],
			],

			//--------------
			'style_get' => [
				'cpp-method' => "gtk_widget_style_get",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "first_property_name",
					],
				],
			],

			//--------------
			'style_get_property' => [
				'cpp-method' => "gtk_widget_style_get_property",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "property_name",
					],
					[
						'type' => "GValue",
						'name' => "value",
					],
				],
			],

			//--------------
			'style_get_valist' => [
				'cpp-method' => "gtk_widget_style_get_valist",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "first_property_name",
					],
					[
						'type' => "va_list",
						'name' => "var_args",
					],
				],
			],

			//--------------
			'style_attach' => [
				'cpp-method' => "gtk_widget_style_attach",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'class_set_accessible_type' => [
				'cpp-method' => "gtk_widget_class_set_accessible_type",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GType",
						'name' => "type",
					],
				],
			],

			//--------------
			'class_set_accessible_role' => [
				'cpp-method' => "gtk_widget_class_set_accessible_role",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "AtkRole",
						'name' => "role",
					],
				],
			],

			//--------------
			'get_accessible' => [
				'cpp-method' => "gtk_widget_get_accessible",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "AtkObject",
				'parameters' => NULL
			],

			//--------------
			'child_focus' => [
				'cpp-method' => "gtk_widget_child_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "enum GtkDirectionType",
						'name' => "direction",
					],
				],
			],

			//--------------
			'child_notify' => [
				'cpp-method' => "gtk_widget_child_notify",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "child_property",
					],
				],
			],

			//--------------
			'freeze_child_notify' => [
				'cpp-method' => "gtk_widget_freeze_child_notify",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_child_visible' => [
				'cpp-method' => "gtk_widget_get_child_visible",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_parent' => [
				'cpp-method' => "gtk_widget_get_parent",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'get_settings' => [
				'cpp-method' => "gtk_widget_get_settings",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GtkSettings",
				'parameters' => NULL
			],

			//--------------
			'get_clipboard' => [
				'cpp-method' => "gtk_widget_get_clipboard",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GtkClipboard",
				'parameters' => [
					[
						'type' => "GdkAtom",
						'name' => "selection",
					],
				],
			],

			//--------------
			'get_display' => [
				'cpp-method' => "gtk_widget_get_display",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GdkDisplay",
				'parameters' => NULL
			],

			//--------------
			'get_root_window' => [
				'cpp-method' => "gtk_widget_get_root_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.12",
				'return-type' => "GdkWindow",
				'parameters' => NULL
			],

			//--------------
			'get_screen' => [
				'cpp-method' => "gtk_widget_get_screen",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GdkScreen",
				'parameters' => NULL
			],

			//--------------
			'has_screen' => [
				'cpp-method' => "gtk_widget_has_screen",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_size_request' => [
				'cpp-method' => "gtk_widget_get_size_request",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "width",
					],
					[
						'type' => "gint",
						'name' => "height",
					],
				],
			],

			//--------------
			'set_child_visible' => [
				'cpp-method' => "gtk_widget_set_child_visible",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "is_visible",
					],
				],
			],

			//--------------
			'set_size_request' => [
				'cpp-method' => "gtk_widget_set_size_request",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "width",
					],
					[
						'type' => "gint",
						'name' => "height",
					],
				],
			],

			//--------------
			'thaw_child_notify' => [
				'cpp-method' => "gtk_widget_thaw_child_notify",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_no_show_all' => [
				'cpp-method' => "gtk_widget_set_no_show_all",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "no_show_all",
					],
				],
			],

			//--------------
			'get_no_show_all' => [
				'cpp-method' => "gtk_widget_get_no_show_all",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'list_mnemonic_labels' => [
				'cpp-method' => "gtk_widget_list_mnemonic_labels",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'add_mnemonic_label' => [
				'cpp-method' => "gtk_widget_add_mnemonic_label",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "label",
					],
				],
			],

			//--------------
			'remove_mnemonic_label' => [
				'cpp-method' => "gtk_widget_remove_mnemonic_label",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "label",
					],
				],
			],

			//--------------
			'is_composited' => [
				'cpp-method' => "gtk_widget_is_composited",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.22",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'error_bell' => [
				'cpp-method' => "gtk_widget_error_bell",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'keynav_failed' => [
				'cpp-method' => "gtk_widget_keynav_failed",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "enum GtkDirectionType",
						'name' => "direction",
					],
				],
			],

			//--------------
			'get_tooltip_markup' => [
				'cpp-method' => "gtk_widget_get_tooltip_markup",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_tooltip_markup' => [
				'cpp-method' => "gtk_widget_set_tooltip_markup",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "markup",
					],
				],
			],

			//--------------
			'get_tooltip_text' => [
				'cpp-method' => "gtk_widget_get_tooltip_text",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_tooltip_text' => [
				'cpp-method' => "gtk_widget_set_tooltip_text",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'get_tooltip_window' => [
				'cpp-method' => "gtk_widget_get_tooltip_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkWindow",
				'parameters' => NULL
			],

			//--------------
			'set_tooltip_window' => [
				'cpp-method' => "gtk_widget_set_tooltip_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWindow",
						'name' => "custom_window",
					],
				],
			],

			//--------------
			'get_has_tooltip' => [
				'cpp-method' => "gtk_widget_get_has_tooltip",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_has_tooltip' => [
				'cpp-method' => "gtk_widget_set_has_tooltip",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "has_tooltip",
					],
				],
			],

			//--------------
			'trigger_tooltip_query' => [
				'cpp-method' => "gtk_widget_trigger_tooltip_query",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_window' => [
				'cpp-method' => "gtk_widget_get_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GdkWindow",
				'parameters' => NULL
			],

			//--------------
			'register_window' => [
				'cpp-method' => "gtk_widget_register_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],

			//--------------
			'unregister_window' => [
				'cpp-method' => "gtk_widget_unregister_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],

			//--------------
			'gtk_cairo_should_draw_window' => [
				'cpp-method' => "gtk_cairo_should_draw_window",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],

			//--------------
			'gtk_cairo_transform_to_window' => [
				'cpp-method' => "gtk_cairo_transform_to_window",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],

			//--------------
			'get_allocated_width' => [
				'cpp-method' => "gtk_widget_get_allocated_width",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "int",
				'parameters' => NULL
			],

			//--------------
			'get_allocated_height' => [
				'cpp-method' => "gtk_widget_get_allocated_height",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "int",
				'parameters' => NULL
			],

			//--------------
			'get_allocation' => [
				'cpp-method' => "gtk_widget_get_allocation",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "allocation",
					],
				],
			],

			//--------------
			'set_allocation' => [
				'cpp-method' => "gtk_widget_set_allocation",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "allocation",
					],
				],
			],

			//--------------
			'get_allocated_baseline' => [
				'cpp-method' => "gtk_widget_get_allocated_baseline",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "int",
				'parameters' => NULL
			],

			//--------------
			'get_allocated_size' => [
				'cpp-method' => "gtk_widget_get_allocated_size",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "allocation",
					],
					[
						'type' => "int",
						'name' => "baseline",
					],
				],
			],

			//--------------
			'get_clip' => [
				'cpp-method' => "gtk_widget_get_clip",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "clip",
					],
				],
			],

			//--------------
			'set_clip' => [
				'cpp-method' => "gtk_widget_set_clip",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAllocation",
						'name' => "clip",
					],
				],
			],

			//--------------
			'get_app_paintable' => [
				'cpp-method' => "gtk_widget_get_app_paintable",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_can_default' => [
				'cpp-method' => "gtk_widget_get_can_default",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_can_default' => [
				'cpp-method' => "gtk_widget_set_can_default",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "can_default",
					],
				],
			],

			//--------------
			'get_can_focus' => [
				'cpp-method' => "gtk_widget_get_can_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_can_focus' => [
				'cpp-method' => "gtk_widget_set_can_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "can_focus",
					],
				],
			],

			//--------------
			'get_focus_on_click' => [
				'cpp-method' => "gtk_widget_get_focus_on_click",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_focus_on_click' => [
				'cpp-method' => "gtk_widget_set_focus_on_click",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "focus_on_click",
					],
				],
			],

			//--------------
			'get_double_buffered' => [
				'cpp-method' => "gtk_widget_get_double_buffered",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_has_window' => [
				'cpp-method' => "gtk_widget_get_has_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_has_window' => [
				'cpp-method' => "gtk_widget_set_has_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "has_window",
					],
				],
			],

			//--------------
			'get_sensitive' => [
				'cpp-method' => "gtk_widget_get_sensitive",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'is_sensitive' => [
				'cpp-method' => "gtk_widget_is_sensitive",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_state' => [
				'cpp-method' => "gtk_widget_get_state",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "enum GtkStateType",
				'parameters' => NULL
			],

			//--------------
			'get_visible' => [
				'cpp-method' => "gtk_widget_get_visible",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'is_visible' => [
				'cpp-method' => "gtk_widget_is_visible",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_visible' => [
				'cpp-method' => "gtk_widget_set_visible",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "visible",
					],
				],
			],

			//--------------
			'set_state_flags' => [
				'cpp-method' => "gtk_widget_set_state_flags",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "flags",
					],
					[
						'type' => "gboolean",
						'name' => "clear",
					],
				],
			],

			//--------------
			'unset_state_flags' => [
				'cpp-method' => "gtk_widget_unset_state_flags",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'get_state_flags' => [
				'cpp-method' => "gtk_widget_get_state_flags",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkStateFlags",
				'parameters' => NULL
			],

			//--------------
			'has_default' => [
				'cpp-method' => "gtk_widget_has_default",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'has_focus' => [
				'cpp-method' => "gtk_widget_has_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'has_visible_focus' => [
				'cpp-method' => "gtk_widget_has_visible_focus",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'has_grab' => [
				'cpp-method' => "gtk_widget_has_grab",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'has_rc_style' => [
				'cpp-method' => "gtk_widget_has_rc_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'is_drawable' => [
				'cpp-method' => "gtk_widget_is_drawable",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'is_toplevel' => [
				'cpp-method' => "gtk_widget_is_toplevel",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_window' => [
				'cpp-method' => "gtk_widget_set_window",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],

			//--------------
			'set_receives_default' => [
				'cpp-method' => "gtk_widget_set_receives_default",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "receives_default",
					],
				],
			],

			//--------------
			'get_receives_default' => [
				'cpp-method' => "gtk_widget_get_receives_default",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_support_multidevice' => [
				'cpp-method' => "gtk_widget_set_support_multidevice",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "support_multidevice",
					],
				],
			],

			//--------------
			'get_support_multidevice' => [
				'cpp-method' => "gtk_widget_get_support_multidevice",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_realized' => [
				'cpp-method' => "gtk_widget_set_realized",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "realized",
					],
				],
			],

			//--------------
			'get_realized' => [
				'cpp-method' => "gtk_widget_get_realized",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_mapped' => [
				'cpp-method' => "gtk_widget_set_mapped",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "mapped",
					],
				],
			],

			//--------------
			'get_mapped' => [
				'cpp-method' => "gtk_widget_get_mapped",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_requisition' => [
				'cpp-method' => "gtk_widget_get_requisition",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.0",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRequisition",
						'name' => "requisition",
					],
				],
			],

			//--------------
			'device_is_shadowed' => [
				'cpp-method' => "gtk_widget_device_is_shadowed",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
				],
			],

			//--------------
			'get_modifier_mask' => [
				'cpp-method' => "gtk_widget_get_modifier_mask",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GdkModifierType",
				'parameters' => [
					[
						'type' => "GdkModifierIntent",
						'name' => "intent",
					],
				],
			],

			//--------------
			'insert_action_group' => [
				'cpp-method' => "gtk_widget_insert_action_group",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "GActionGroup",
						'name' => "group",
					],
				],
			],

			//--------------
			'get_opacity' => [
				'cpp-method' => "gtk_widget_get_opacity",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "double",
				'parameters' => NULL
			],

			//--------------
			'set_opacity' => [
				'cpp-method' => "gtk_widget_set_opacity",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "double",
						'name' => "opacity",
					],
				],
			],

			//--------------
			'*list_action_prefixes' => [
				'cpp-method' => "*gtk_widget_list_action_prefixes",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'get_action_group' => [
				'cpp-method' => "gtk_widget_get_action_group",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GActionGroup",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "prefix",
					],
				],
			],

			//--------------
			'get_path' => [
				'cpp-method' => "gtk_widget_get_path",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => NULL
			],

			//--------------
			'get_style_context' => [
				'cpp-method' => "gtk_widget_get_style_context",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkStyleContext",
				'parameters' => NULL
			],

			//--------------
			'reset_style' => [
				'cpp-method' => "gtk_widget_reset_style",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'class_get_css_name' => [
				'cpp-method' => "gtk_widget_class_get_css_name",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "char",
				'parameters' => NULL
			],

			//--------------
			'class_set_css_name' => [
				'cpp-method' => "gtk_widget_class_set_css_name",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "char",
						'name' => "name",
					],
				],
			],

			//--------------
			'gtk_requisition_new' => [
				'cpp-method' => "gtk_requisition_new",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GtkRequisition",
				'parameters' => NULL
			],

			//--------------
			'gtk_requisition_copy' => [
				'cpp-method' => "gtk_requisition_copy",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "GtkRequisition",
				'parameters' => NULL
			],

			//--------------
			'gtk_requisition_free' => [
				'cpp-method' => "gtk_requisition_free",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_preferred_height' => [
				'cpp-method' => "gtk_widget_get_preferred_height",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "minimum_height",
					],
					[
						'type' => "gint",
						'name' => "natural_height",
					],
				],
			],

			//--------------
			'get_preferred_width' => [
				'cpp-method' => "gtk_widget_get_preferred_width",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "minimum_width",
					],
					[
						'type' => "gint",
						'name' => "natural_width",
					],
				],
			],

			//--------------
			'get_preferred_height_for_width' => [
				'cpp-method' => "gtk_widget_get_preferred_height_for_width",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "width",
					],
					[
						'type' => "gint",
						'name' => "minimum_height",
					],
					[
						'type' => "gint",
						'name' => "natural_height",
					],
				],
			],

			//--------------
			'get_preferred_width_for_height' => [
				'cpp-method' => "gtk_widget_get_preferred_width_for_height",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "height",
					],
					[
						'type' => "gint",
						'name' => "minimum_width",
					],
					[
						'type' => "gint",
						'name' => "natural_width",
					],
				],
			],

			//--------------
			'get_preferred_height_and_baseline_for_width' => [
				'cpp-method' => "gtk_widget_get_preferred_height_and_baseline_for_width",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "width",
					],
					[
						'type' => "gint",
						'name' => "minimum_height",
					],
					[
						'type' => "gint",
						'name' => "natural_height",
					],
					[
						'type' => "gint",
						'name' => "minimum_baseline",
					],
					[
						'type' => "gint",
						'name' => "natural_baseline",
					],
				],
			],

			//--------------
			'get_request_mode' => [
				'cpp-method' => "gtk_widget_get_request_mode",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkSizeRequestMode",
				'parameters' => NULL
			],

			//--------------
			'get_preferred_size' => [
				'cpp-method' => "gtk_widget_get_preferred_size",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkRequisition",
						'name' => "minimum_size",
					],
					[
						'type' => "GtkRequisition",
						'name' => "natural_size",
					],
				],
			],

			//--------------
			'gtk_distribute_natural_allocation' => [
				'cpp-method' => "gtk_distribute_natural_allocation",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "guint",
						'name' => "n_requested_sizes",
					],
					[
						'type' => "GtkRequestedSize",
						'name' => "sizes",
					],
				],
			],

			//--------------
			'get_halign' => [
				'cpp-method' => "gtk_widget_get_halign",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkAlign",
				'parameters' => NULL
			],

			//--------------
			'set_halign' => [
				'cpp-method' => "gtk_widget_set_halign",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkAlign",
						'name' => "align",
					],
				],
			],

			//--------------
			'get_valign' => [
				'cpp-method' => "gtk_widget_get_valign",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkAlign",
				'parameters' => NULL
			],

			//--------------
			'get_valign_with_baseline' => [
				'cpp-method' => "gtk_widget_get_valign_with_baseline",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "enum GtkAlign",
				'parameters' => NULL
			],

			//--------------
			'set_valign' => [
				'cpp-method' => "gtk_widget_set_valign",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkAlign",
						'name' => "align",
					],
				],
			],

			//--------------
			'get_margin_left' => [
				'cpp-method' => "gtk_widget_get_margin_left",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.12",
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_margin_left' => [
				'cpp-method' => "gtk_widget_set_margin_left",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.12",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_margin_right' => [
				'cpp-method' => "gtk_widget_get_margin_right",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.12",
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_margin_right' => [
				'cpp-method' => "gtk_widget_set_margin_right",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "3.12",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_margin_start' => [
				'cpp-method' => "gtk_widget_get_margin_start",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_margin_start' => [
				'cpp-method' => "gtk_widget_set_margin_start",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_margin_end' => [
				'cpp-method' => "gtk_widget_get_margin_end",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_margin_end' => [
				'cpp-method' => "gtk_widget_set_margin_end",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_margin_top' => [
				'cpp-method' => "gtk_widget_get_margin_top",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_margin_top' => [
				'cpp-method' => "gtk_widget_set_margin_top",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_margin_bottom' => [
				'cpp-method' => "gtk_widget_get_margin_bottom",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_margin_bottom' => [
				'cpp-method' => "gtk_widget_set_margin_bottom",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_hexpand' => [
				'cpp-method' => "gtk_widget_get_hexpand",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_hexpand' => [
				'cpp-method' => "gtk_widget_set_hexpand",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "expand",
					],
				],
			],

			//--------------
			'get_hexpand_set' => [
				'cpp-method' => "gtk_widget_get_hexpand_set",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_hexpand_set' => [
				'cpp-method' => "gtk_widget_set_hexpand_set",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "set",
					],
				],
			],

			//--------------
			'get_vexpand' => [
				'cpp-method' => "gtk_widget_get_vexpand",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_vexpand' => [
				'cpp-method' => "gtk_widget_set_vexpand",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "expand",
					],
				],
			],

			//--------------
			'get_vexpand_set' => [
				'cpp-method' => "gtk_widget_get_vexpand_set",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_vexpand_set' => [
				'cpp-method' => "gtk_widget_set_vexpand_set",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "set",
					],
				],
			],

			//--------------
			'queue_compute_expand' => [
				'cpp-method' => "gtk_widget_queue_compute_expand",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'compute_expand' => [
				'cpp-method' => "gtk_widget_compute_expand",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "enum GtkOrientation",
						'name' => "orientation",
					],
				],
			],

			//--------------
			'init_template' => [
				'cpp-method' => "gtk_widget_init_template",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'class_set_template' => [
				'cpp-method' => "gtk_widget_class_set_template",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GBytes",
						'name' => "template_bytes",
					],
				],
			],

			//--------------
			'class_set_template_from_resource' => [
				'cpp-method' => "gtk_widget_class_set_template_from_resource",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "resource_name",
					],
				],
			],

			//--------------
			'get_template_child' => [
				'cpp-method' => "gtk_widget_get_template_child",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => "GObject",
				'parameters' => [
					[
						'type' => "GType",
						'name' => "widget_type",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'class_bind_template_child_full' => [
				'cpp-method' => "gtk_widget_class_bind_template_child_full",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "gboolean",
						'name' => "internal_child",
					],
					[
						'type' => "gssize",
						'name' => "struct_offset",
					],
				],
			],

			//--------------
			'class_bind_template_callback_full' => [
				'cpp-method' => "gtk_widget_class_bind_template_callback_full",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "callback_name",
					],
					[
						'type' => "GCallback",
						'name' => "callback_symbol",
					],
				],
			],

			//--------------
			'class_set_connect_func' => [
				'cpp-method' => "gtk_widget_class_set_connect_func",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkBuilderConnectFunc",
						'name' => "connect_func",
					],
					[
						'type' => "gpointer",
						'name' => "connect_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "connect_data_destroy",
					],
				],
			],
		]



	];