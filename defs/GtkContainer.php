<?php

	return [

		'configs' => [
			'cpp-object' => "GtkContainer",
			'name' => "GtkContainer_",
			'extends' => "GtkWidget_",
			'cast_macro' => "GTK_CONTAINER"
		],
		

		'dependences' => [
			"GtkWidget.h",
			"GtkWidgetPath.h",
		],


		'methods' => [
			'add' => [
				'cpp-method' => "gtk_container_add",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
				],
			],

			//--------------
			'remove' => [
				'cpp-method' => "gtk_container_remove",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
				],
			],

			//--------------
			'add_with_properties' => [
				'cpp-method' => "gtk_container_add_with_properties",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
					[
						'type' => "gchar *",
						'name' => "first_prop_name",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'get_resize_mode' => [
				'cpp-method' => "gtk_container_get_resize_mode",
				'static' => FALSE,
				'return-type' => "enum GtkResizeMode",
				'parameters' => NULL
			],

			//--------------
			'set_resize_mode' => [
				'cpp-method' => "gtk_container_set_resize_mode",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkResizeMode",
						'name' => "resize_mode",
					],
				],
			],

			//--------------
			'check_resize' => [
				'cpp-method' => "gtk_container_check_resize",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'foreach' => [
				'cpp-method' => "gtk_container_foreach",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkCallback",
						'name' => "callback",
					],
					[
						'type' => "gpointer",
						'name' => "callback_data",
					],
				],
			],

			//--------------
			'get_children' => [
				'cpp-method' => "gtk_container_get_children",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => NULL
			],

			//--------------
			'get_path_for_child' => [
				'cpp-method' => "gtk_container_get_path_for_child",
				'static' => FALSE,
				'return-type' => "GtkWidgetPath",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'set_reallocate_redraws' => [
				'cpp-method' => "gtk_container_set_reallocate_redraws",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "needs_redraws",
					],
				],
			],

			//--------------
			'get_focus_child' => [
				'cpp-method' => "gtk_container_get_focus_child",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_focus_child' => [
				'cpp-method' => "gtk_container_set_focus_child",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'get_focus_vadjustment' => [
				'cpp-method' => "gtk_container_get_focus_vadjustment",
				'static' => FALSE,
				'return-type' => "GtkAdjustment",
				'parameters' => NULL
			],

			//--------------
			'set_focus_vadjustment' => [
				'cpp-method' => "gtk_container_set_focus_vadjustment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAdjustment",
						'name' => "adjustment",
						'cast_macro' => "GTK_ADJUSTMENT"
					],
				],
			],

			//--------------
			'get_focus_hadjustment' => [
				'cpp-method' => "gtk_container_get_focus_hadjustment",
				'static' => FALSE,
				'return-type' => "GtkAdjustment",
				'parameters' => NULL
			],

			//--------------
			'set_focus_hadjustment' => [
				'cpp-method' => "gtk_container_set_focus_hadjustment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAdjustment",
						'name' => "adjustment",
						'cast_macro' => "GTK_ADJUSTMENT"
					],
				],
			],

			//--------------
			'resize_children' => [
				'cpp-method' => "gtk_container_resize_children",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'child_type' => [
				'cpp-method' => "gtk_container_child_type",
				'static' => FALSE,
				'return-type' => "GType",
				'parameters' => NULL
			],

			//--------------
			'child_get' => [
				'cpp-method' => "gtk_container_child_get",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "first_prop_name",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'child_set' => [
				'cpp-method' => "gtk_container_child_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "first_prop_name",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'child_get_property' => [
				'cpp-method' => "gtk_container_child_get_property",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
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
			'child_set_property' => [
				'cpp-method' => "gtk_container_child_set_property",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
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
			'child_get_valist' => [
				'cpp-method' => "gtk_container_child_get_valist",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
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
			'child_set_valist' => [
				'cpp-method' => "gtk_container_child_set_valist",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
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
			'child_notify' => [
				'cpp-method' => "gtk_container_child_notify",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "child_property",
					],
				],
			],

			//--------------
			'child_notify_by_pspec' => [
				'cpp-method' => "gtk_container_child_notify_by_pspec",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "GParamSpec",
						'name' => "pspec",
					],
				],
			],

			//--------------
			'forall' => [
				'cpp-method' => "gtk_container_forall",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkCallback",
						'name' => "callback",
					],
					[
						'type' => "gpointer",
						'name' => "callback_data",
					],
				],
			],

			//--------------
			'get_border_width' => [
				'cpp-method' => "gtk_container_get_border_width",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'set_border_width' => [
				'cpp-method' => "gtk_container_set_border_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "border_width",
					],
				],
			],

			//--------------
			'propagate_draw' => [
				'cpp-method' => "gtk_container_propagate_draw",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "cairo_t",
						'name' => "cr",
					],
				],
			],

			//--------------
			'get_focus_chain' => [
				'cpp-method' => "gtk_container_get_focus_chain",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GList",
						'name' => "focusable_widgets",
					],
				],
			],

			//--------------
			'set_focus_chain' => [
				'cpp-method' => "gtk_container_set_focus_chain",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GList",
						'name' => "focusable_widgets",
					],
				],
			],

			//--------------
			'unset_focus_chain' => [
				'cpp-method' => "gtk_container_unset_focus_chain",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'class_find_child_property' => [
				'cpp-method' => "gtk_container_class_find_child_property",
				'static' => FALSE,
				'return-type' => "GParamSpec",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "property_name",
					],
				],
			],

			//--------------
			'class_install_child_property' => [
				'cpp-method' => "gtk_container_class_install_child_property",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "property_id",
					],
					[
						'type' => "GParamSpec",
						'name' => "pspec",
					],
				],
			],

			//--------------
			'class_install_child_properties' => [
				'cpp-method' => "gtk_container_class_install_child_properties",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "n_pspecs",
					],
					[
						'type' => "GParamSpec",
						'name' => "pspecs",
					],
				],
			],

			//--------------
			'*class_list_child_properties' => [
				'cpp-method' => "*gtk_container_class_list_child_properties",
				'static' => FALSE,
				'return-type' => "GParamSpec",
				'parameters' => [
					[
						'type' => "guint",
						'name' => "n_properties",
					],
				],
			],

			//--------------
			'class_handle_border_width' => [
				'cpp-method' => "gtk_container_class_handle_border_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],
		]



	];