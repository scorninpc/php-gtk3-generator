<?php

	return [

		'configs' => [
			'cpp-object' => "GtkListBox",
			'name'=>"GtkListBox_",
			'extends'=>"GtkBin_",
			'cast_macro' => "GTK_LIST_BOX"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
			"GtkSelectionMode.h",
			"GtkAdjustment.h",
			"GtkListBoxRow.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_list_box_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// 
			'prepend' => [
				'cpp-method' => "gtk_list_box_prepend",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			// 
			'insert' => [
				'cpp-method' => "gtk_list_box_insert",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			// 
			'select_row' => [
				'cpp-method' => "gtk_list_box_select_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkListBoxRow",
						'name' => "row",
					],
				],
			],

			// 
			'unselect_row' => [
				'cpp-method' => "gtk_list_box_unselect_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkListBoxRow",
						'name' => "row",
					],
				],
			],

			// 
			'select_all' => [
				'cpp-method' => "gtk_list_box_select_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'unselect_all' => [
				'cpp-method' => "gtk_list_box_unselect_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'get_selected_row' => [
				'cpp-method' => "gtk_list_box_get_selected_row",
				'static' => FALSE,
				'return-type' => "GtkListBoxRow",
				'parameters' => [],
			],

			// 
			'selected_foreach' => [
				'cpp-method' => "gtk_list_box_selected_foreach",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
				],
			],

			// 
			'get_selected_rows' => [
				'cpp-method' => "gtk_list_box_get_selected_rows",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => [],
			],

			// 
			'set_selection_mode' => [
				'cpp-method' => "gtk_list_box_set_selection_mode",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSelectionMode",
						'name' => "mode",
					],
				],
			],

			// 
			'get_selection_mode' => [
				'cpp-method' => "gtk_list_box_get_selection_mode",
				'static' => FALSE,
				'return-type' => "enum GtkSelectionMode",
				'parameters' => [],
			],

			// 
			'set_activate_on_single_click' => [
				'cpp-method' => "gtk_list_box_set_activate_on_single_click",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "single",
					],
				],
			],

			// 
			'get_activate_on_single_click' => [
				'cpp-method' => "gtk_list_box_get_activate_on_single_click",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'get_adjustment' => [
				'cpp-method' => "gtk_list_box_get_adjustment",
				'static' => FALSE,
				'return-type' => "GtkAdjustment",
				'parameters' => [],
			],

			// 
			'set_adjustment' => [
				'cpp-method' => "gtk_list_box_set_adjustment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAdjustment",
						'name' => "adjustment",
						'cast_macro' => "GTK_ADJUSTMENT",
					],
				],
			],

			// 
			'set_placeholder' => [
				'cpp-method' => "gtk_list_box_set_placeholder",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "placeholder",
					],
				],
			],

			// 
			'get_row_at_index' => [
				'cpp-method' => "gtk_list_box_get_row_at_index",
				'static' => FALSE,
				'return-type' => "GtkListBoxRow",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "index_",
					],
				],
			],

			// 
			'get_row_at_y' => [
				'cpp-method' => "gtk_list_box_get_row_at_y",
				'static' => FALSE,
				'return-type' => "GtkListBoxRow",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "y",
					],
				],
			],

			// 
			'invalidate_filter' => [
				'cpp-method' => "gtk_list_box_invalidate_filter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'invalidate_headers' => [
				'cpp-method' => "gtk_list_box_invalidate_headers",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'invalidate_sort' => [
				'cpp-method' => "gtk_list_box_invalidate_sort",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'set_filter_func' => [
				'cpp-method' => "gtk_list_box_set_filter_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
					[
						'type' => "gchar *",
						'name' => "destroy",
					],
				],
			],

			// 
			'set_header_func' => [
				'cpp-method' => "gtk_list_box_set_header_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
					[
						'type' => "gchar *",
						'name' => "destroy",
					],
				],
			],

			// 
			'set_sort_func' => [
				'cpp-method' => "gtk_list_box_set_sort_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
					[
						'type' => "gchar *",
						'name' => "destroy",
					],
				],
			],

			// 
			'drag_highlight_row' => [
				'cpp-method' => "gtk_list_box_drag_highlight_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkListBoxRow",
						'name' => "row",
					],
				],
			],

			// 
			'drag_unhighlight_row' => [
				'cpp-method' => "gtk_list_box_drag_unhighlight_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'bind_model' => [
				'cpp-method' => "gtk_list_box_bind_model",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "create_widget_func",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
					[
						'type' => "gchar *",
						'name' => "user_data_free_func",
					],
				],
			],

			




			//
		]



	];