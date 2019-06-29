<?php

	return [

		'configs' => [
			'cpp-object' => "GtkStyleContext",
			'name' => "GtkStyleContext_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_STYLE_CONTEXT"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_style_context_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'add_provider' => [
				'cpp-method' => "gtk_style_context_add_provider",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStyleProvider",
						'name' => "provider",
					],
					[
						'type' => "guint",
						'name' => "priority",
					],
				],
			],

			//--------------
			'add_provider_for_screen' => [
				'cpp-method' => "gtk_style_context_add_provider_for_screen",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStyleProvider",
						'name' => "provider",
					],
					[
						'type' => "guint",
						'name' => "priority",
					],
				],
			],

			//--------------
			'get' => [
				'cpp-method' => "gtk_style_context_get",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'get_direction' => [
				'cpp-method' => "gtk_style_context_get_direction",
				'static' => FALSE,
				'return-type' => "GtkTextDirection",
				'parameters' => NULL
			],

			//--------------
			'get_junction_sides' => [
				'cpp-method' => "gtk_style_context_get_junction_sides",
				'static' => FALSE,
				'return-type' => "GtkJunctionSides",
				'parameters' => NULL
			],

			//--------------
			'get_parent' => [
				'cpp-method' => "gtk_style_context_get_parent",
				'static' => FALSE,
				'return-type' => "GtkStyleContext",
				'parameters' => NULL
			],

			//--------------
			'get_path' => [
				'cpp-method' => "gtk_style_context_get_path",
				'static' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => NULL
			],

			//--------------
			'get_property' => [
				'cpp-method' => "gtk_style_context_get_property",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "property",
					],
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "GValue",
						'name' => "value",
					],
				],
			],

			//--------------
			'get_screen' => [
				'cpp-method' => "gtk_style_context_get_screen",
				'static' => FALSE,
				'return-type' => "GdkScreen",
				'parameters' => NULL
			],

			//--------------
			'get_frame_clock' => [
				'cpp-method' => "gtk_style_context_get_frame_clock",
				'static' => FALSE,
				'return-type' => "GdkFrameClock",
				'parameters' => NULL
			],

			//--------------
			'get_state' => [
				'cpp-method' => "gtk_style_context_get_state",
				'static' => FALSE,
				'return-type' => "enum GtkStateFlags",
				'parameters' => NULL
			],

			//--------------
			'get_style' => [
				'cpp-method' => "gtk_style_context_get_style",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'get_style_property' => [
				'cpp-method' => "gtk_style_context_get_style_property",
				'static' => FALSE,
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
			'get_style_valist' => [
				'cpp-method' => "gtk_style_context_get_style_valist",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "va_list",
						'name' => "args",
					],
				],
			],

			//--------------
			'get_valist' => [
				'cpp-method' => "gtk_style_context_get_valist",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "va_list",
						'name' => "args",
					],
				],
			],

			//--------------
			'get_section' => [
				'cpp-method' => "gtk_style_context_get_section",
				'static' => FALSE,
				'return-type' => "GtkCssSection",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "property",
					],
				],
			],

			//--------------
			'get_color' => [
				'cpp-method' => "gtk_style_context_get_color",
				'static' => FALSE,
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
			'get_background_color' => [
				'cpp-method' => "gtk_style_context_get_background_color",
				'static' => FALSE,
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
			'get_border_color' => [
				'cpp-method' => "gtk_style_context_get_border_color",
				'static' => FALSE,
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
			'get_border' => [
				'cpp-method' => "gtk_style_context_get_border",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "GtkBorder",
						'name' => "border",
					],
				],
			],

			//--------------
			'get_padding' => [
				'cpp-method' => "gtk_style_context_get_padding",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "GtkBorder",
						'name' => "padding",
					],
				],
			],

			//--------------
			'get_margin' => [
				'cpp-method' => "gtk_style_context_get_margin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
					[
						'type' => "GtkBorder",
						'name' => "margin",
					],
				],
			],

			//--------------
			'get_font' => [
				'cpp-method' => "gtk_style_context_get_font",
				'static' => FALSE,
				'return-type' => "PangoFontDescription",
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "state",
					],
				],
			],

			//--------------
			'invalidate' => [
				'cpp-method' => "gtk_style_context_invalidate",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'state_is_running' => [
				'cpp-method' => "gtk_style_context_state_is_running",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
					[
						'type' => "gdouble",
						'name' => "progress",
					],
				],
			],

			//--------------
			'lookup_color' => [
				'cpp-method' => "gtk_style_context_lookup_color",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "color_name",
					],
					[
						'type' => "GdkRGBA",
						'name' => "color",
					],
				],
			],

			//--------------
			'lookup_icon_set' => [
				'cpp-method' => "gtk_style_context_lookup_icon_set",
				'static' => FALSE,
				'return-type' => "GtkIconSet",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "stock_id",
					],
				],
			],

			//--------------
			'notify_state_change' => [
				'cpp-method' => "gtk_style_context_notify_state_change",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
					[
						'type' => "gpointer",
						'name' => "region_id",
					],
					[
						'type' => "GtkStateType",
						'name' => "state",
					],
					[
						'type' => "gboolean",
						'name' => "state_value",
					],
				],
			],

			//--------------
			'pop_animatable_region' => [
				'cpp-method' => "gtk_style_context_pop_animatable_region",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'push_animatable_region' => [
				'cpp-method' => "gtk_style_context_push_animatable_region",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gpointer",
						'name' => "region_id",
					],
				],
			],

			//--------------
			'cancel_animations' => [
				'cpp-method' => "gtk_style_context_cancel_animations",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gpointer",
						'name' => "region_id",
					],
				],
			],

			//--------------
			'scroll_animations' => [
				'cpp-method' => "gtk_style_context_scroll_animations",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
					[
						'type' => "gint",
						'name' => "dx",
					],
					[
						'type' => "gint",
						'name' => "dy",
					],
				],
			],

			//--------------
			'remove_provider' => [
				'cpp-method' => "gtk_style_context_remove_provider",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStyleProvider",
						'name' => "provider",
					],
				],
			],

			//--------------
			'remove_provider_for_screen' => [
				'cpp-method' => "gtk_style_context_remove_provider_for_screen",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStyleProvider",
						'name' => "provider",
					],
				],
			],

			//--------------
			'reset_widgets' => [
				'cpp-method' => "gtk_style_context_reset_widgets",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_background' => [
				'cpp-method' => "gtk_style_context_set_background",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkWindow",
						'name' => "window",
					],
				],
			],

			//--------------
			'restore' => [
				'cpp-method' => "gtk_style_context_restore",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'save' => [
				'cpp-method' => "gtk_style_context_save",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_direction' => [
				'cpp-method' => "gtk_style_context_set_direction",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextDirection",
						'name' => "direction",
					],
				],
			],

			//--------------
			'set_junction_sides' => [
				'cpp-method' => "gtk_style_context_set_junction_sides",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkJunctionSides",
						'name' => "sides",
					],
				],
			],

			//--------------
			'set_parent' => [
				'cpp-method' => "gtk_style_context_set_parent",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStyleContext",
						'name' => "parent",
					],
				],
			],

			//--------------
			'set_path' => [
				'cpp-method' => "gtk_style_context_set_path",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidgetPath",
						'name' => "path",
					],
				],
			],

			//--------------
			'add_class' => [
				'cpp-method' => "gtk_style_context_add_class",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "class_name",
					],
				],
			],

			//--------------
			'remove_class' => [
				'cpp-method' => "gtk_style_context_remove_class",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "class_name",
					],
				],
			],

			//--------------
			'has_class' => [
				'cpp-method' => "gtk_style_context_has_class",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "class_name",
					],
				],
			],

			//--------------
			'list_classes' => [
				'cpp-method' => "gtk_style_context_list_classes",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'add_region' => [
				'cpp-method' => "gtk_style_context_add_region",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "region_name",
					],
					[
						'type' => "GtkRegionFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'remove_region' => [
				'cpp-method' => "gtk_style_context_remove_region",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "region_name",
					],
				],
			],

			//--------------
			'has_region' => [
				'cpp-method' => "gtk_style_context_has_region",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "region_name",
					],
					[
						'type' => "GtkRegionFlags",
						'name' => "flags_return",
					],
				],
			],

			//--------------
			'list_regions' => [
				'cpp-method' => "gtk_style_context_list_regions",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'set_screen' => [
				'cpp-method' => "gtk_style_context_set_screen",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkScreen",
						'name' => "screen",
					],
				],
			],

			//--------------
			'set_frame_clock' => [
				'cpp-method' => "gtk_style_context_set_frame_clock",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkFrameClock",
						'name' => "frame_clock",
					],
				],
			],

			//--------------
			'set_state' => [
				'cpp-method' => "gtk_style_context_set_state",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStateFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'set_scale' => [
				'cpp-method' => "gtk_style_context_set_scale",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "scale",
					],
				],
			],

			//--------------
			'get_scale' => [
				'cpp-method' => "gtk_style_context_get_scale",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'to_string' => [
				'cpp-method' => "gtk_style_context_to_string",
				'static' => FALSE,
				'return-type' => "char",
				'parameters' => [
					[
						'type' => "GtkStyleContextPrintFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'gtk_border_new' => [
				'cpp-method' => "gtk_border_new",
				'static' => FALSE,
				'return-type' => "GtkBorder",
				'parameters' => NULL
			],

			//--------------
			'gtk_border_copy' => [
				'cpp-method' => "gtk_border_copy",
				'static' => FALSE,
				'return-type' => "GtkBorder",
				'parameters' => NULL
			],

			//--------------
			'gtk_border_free' => [
				'cpp-method' => "gtk_border_free",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'gtk_render_arrow' => [
				'cpp-method' => "gtk_render_arrow",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "angle",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "size",
					],
				],
			],

			//--------------
			'gtk_render_background' => [
				'cpp-method' => "gtk_render_background",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_background_get_clip' => [
				'cpp-method' => "gtk_render_background_get_clip",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
					[
						'type' => "GdkRectangle",
						'name' => "out_clip",
					],
				],
			],

			//--------------
			'gtk_render_check' => [
				'cpp-method' => "gtk_render_check",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_expander' => [
				'cpp-method' => "gtk_render_expander",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_extension' => [
				'cpp-method' => "gtk_render_extension",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
					[
						'type' => "GtkPositionType",
						'name' => "gap_side",
					],
				],
			],

			//--------------
			'gtk_render_focus' => [
				'cpp-method' => "gtk_render_focus",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_frame' => [
				'cpp-method' => "gtk_render_frame",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_frame_gap' => [
				'cpp-method' => "gtk_render_frame_gap",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
					[
						'type' => "GtkPositionType",
						'name' => "gap_side",
					],
					[
						'type' => "gdouble",
						'name' => "xy0_gap",
					],
					[
						'type' => "gdouble",
						'name' => "xy1_gap",
					],
				],
			],

			//--------------
			'gtk_render_handle' => [
				'cpp-method' => "gtk_render_handle",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_layout' => [
				'cpp-method' => "gtk_render_layout",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "PangoLayout",
						'name' => "layout",
					],
				],
			],

			//--------------
			'gtk_render_line' => [
				'cpp-method' => "gtk_render_line",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x0",
					],
					[
						'type' => "gdouble",
						'name' => "y0",
					],
					[
						'type' => "gdouble",
						'name' => "x1",
					],
					[
						'type' => "gdouble",
						'name' => "y1",
					],
				],
			],

			//--------------
			'gtk_render_option' => [
				'cpp-method' => "gtk_render_option",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_slider' => [
				'cpp-method' => "gtk_render_slider",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
					[
						'type' => "GtkOrientation",
						'name' => "orientation",
					],
				],
			],

			//--------------
			'gtk_render_activity' => [
				'cpp-method' => "gtk_render_activity",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "gdouble",
						'name' => "width",
					],
					[
						'type' => "gdouble",
						'name' => "height",
					],
				],
			],

			//--------------
			'gtk_render_icon_pixbuf' => [
				'cpp-method' => "gtk_render_icon_pixbuf",
				'static' => FALSE,
				'return-type' => "GdkPixbuf",
				'parameters' => [
					[
						'type' => "GtkIconSource",
						'name' => "source",
					],
					[
						'type' => "GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'gtk_render_icon_surface' => [
				'cpp-method' => "gtk_render_icon_surface",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "cairo_surface_t",
						'name' => "surface",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
				],
			],

			//--------------
			'gtk_render_icon' => [
				'cpp-method' => "gtk_render_icon",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "GdkPixbuf",
						'name' => "pixbuf",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
				],
			],

			//--------------
			'gtk_render_insertion_cursor' => [
				'cpp-method' => "gtk_render_insertion_cursor",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
					[
						'type' => "gdouble",
						'name' => "x",
					],
					[
						'type' => "gdouble",
						'name' => "y",
					],
					[
						'type' => "PangoLayout",
						'name' => "layout",
					],
					[
						'type' => "int",
						'name' => "index",
					],
					[
						'type' => "PangoDirection",
						'name' => "direction",
					],
				],
			],
		]



	];