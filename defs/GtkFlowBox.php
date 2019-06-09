<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFlowBox",
			'name' => "GtkFlowBox_",
			'extends' => "GtkContainer_",
			'cast_macro' => "GTK_FLOW_BOX"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkFlowBoxChild.h",
			"GtkWidget.h",
			"GtkAdjustment.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_flow_box_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'insert' => [
				'cpp-method' => "gtk_flow_box_insert",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			//--------------
			'get_child_at_index' => [
				'cpp-method' => "gtk_flow_box_get_child_at_index",
				'static' => FALSE,
				'return-type' => "GtkFlowBoxChild",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "idx",
					],
				],
			],

			//--------------
			'set_hadjustment' => [
				'cpp-method' => "gtk_flow_box_set_hadjustment",
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

			//--------------
			'set_vadjustment' => [
				'cpp-method' => "gtk_flow_box_set_vadjustment",
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

			//--------------
			'set_homogeneous' => [
				'cpp-method' => "gtk_flow_box_set_homogeneous",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "homogeneous",
					],
				],
			],

			//--------------
			'get_homogeneous' => [
				'cpp-method' => "gtk_flow_box_get_homogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					
				],
			],

			//--------------
			'set_row_spacing' => [
				'cpp-method' => "gtk_flow_box_set_row_spacing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "spacing",
					],
				],
			],

			//--------------
			'get_row_spacing' => [
				'cpp-method' => "gtk_flow_box_get_row_spacing",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
				],
			],

			//--------------
			'set_column_spacing' => [
				'cpp-method' => "gtk_flow_box_set_column_spacing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "spacing",
					],
				],
			],

			//--------------
			'get_column_spacing' => [
				'cpp-method' => "gtk_flow_box_get_column_spacing",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
				],
			],

			//--------------
			'set_min_children_per_line' => [
				'cpp-method' => "gtk_flow_box_set_min_children_per_line",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "n_children",
					],
				],
			],

			//--------------
			'get_min_children_per_line' => [
				'cpp-method' => "gtk_flow_box_get_min_children_per_line",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
				],
			],

			//--------------
			'set_max_children_per_line' => [
				'cpp-method' => "gtk_flow_box_set_max_children_per_line",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "n_children",
					],
				],
			],

			//--------------
			'get_max_children_per_line' => [
				'cpp-method' => "gtk_flow_box_get_max_children_per_line",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
				],
			],

			//--------------
			'set_activate_on_single_click' => [
				'cpp-method' => "gtk_flow_box_set_activate_on_single_click",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "single",
					],
				],
			],

			//--------------
			'get_activate_on_single_click' => [
				'cpp-method' => "gtk_flow_box_get_activate_on_single_click",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
				],
			],

			//--------------
			'selected_foreach' => [
				'cpp-method' => "gtk_flow_box_selected_foreach",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkFlowBoxForeachFunc",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
				],
			],

			//--------------
			'get_selected_children' => [
				'cpp-method' => "gtk_flow_box_get_selected_children",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => [
				],
			],

			//--------------
			'select_child' => [
				'cpp-method' => "gtk_flow_box_select_child",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkFlowBoxChild",
						'name' => "child",
					],
				],
			],

			//--------------
			'unselect_child' => [
				'cpp-method' => "gtk_flow_box_unselect_child",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkFlowBoxChild",
						'name' => "child",
					],
				],
			],

			//--------------
			'select_all' => [
				'cpp-method' => "gtk_flow_box_select_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
				],
			],

			//--------------
			'unselect_all' => [
				'cpp-method' => "gtk_flow_box_unselect_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
				],
			],

			//--------------
			'set_selection_mode' => [
				'cpp-method' => "gtk_flow_box_set_selection_mode",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSelectionMode",
						'name' => "mode",
					],
				],
			],

			//--------------
			'get_selection_mode' => [
				'cpp-method' => "gtk_flow_box_get_selection_mode",
				'static' => FALSE,
				'return-type' => "enum GtkSelectionMode",
				'parameters' => [
				],
			],

			//--------------
			'set_filter_func' => [
				'cpp-method' => "gtk_flow_box_set_filter_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkFlowBoxFilterFunc",
						'name' => "filter_func",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "destroy",
					],
				],
			],

			//--------------
			'invalidate_filter' => [
				'cpp-method' => "gtk_flow_box_invalidate_filter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
				],
			],

			//--------------
			'set_sort_func' => [
				'cpp-method' => "gtk_flow_box_set_sort_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkFlowBoxSortFunc",
						'name' => "sort_func",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "destroy",
					],
				],
			],

			//--------------
			'invalidate_sort' => [
				'cpp-method' => "gtk_flow_box_invalidate_sort",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
				],
			],

			//--------------
			'bind_model' => [
				'cpp-method' => "gtk_flow_box_bind_model",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GListModel",
						'name' => "model",
					],
					[
						'type' => "GtkFlowBoxCreateWidgetFunc",
						'name' => "create_widget_func",
					],
					[
						'type' => "gpointer",
						'name' => "user_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "user_data_free_func",
					],
				],
			],
		]



	];