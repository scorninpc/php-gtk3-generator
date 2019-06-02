<?php

	return [

		'configs' => [
			'cpp-object' => "GtkComboBox",
			'name'=>"GtkComboBox_",
			'extends'=>"GtkBin_",
			'cast_macro' => "GTK_COMBO_BOX"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
			"GtkTreeModel.h",
			"GtkTreeIter.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_combo_box_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// 
			'new_with_entry' => [
				'cpp-method' => "gtk_combo_box_new_with_entry",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'new_with_model' => [
				'cpp-method' => "gtk_combo_box_new_with_model",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeModel",
						'name' => "model",
						'cast_macro' => "GTK_TREE_MODEL"
					],
				],
			],

			// 
			'new_with_model_and_entry' => [
				'cpp-method' => "gtk_combo_box_new_with_model_and_entry",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeModel",
						'name' => "model",
						'cast_macro' => "GTK_TREE_MODEL"
					],
				],
			],

			// 
			'new_with_area' => [
				'cpp-method' => "gtk_combo_box_new_with_area",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkCellArea",
						'name' => "area",
						'cast_macro' => "GTK_CELL_AREA",
					],
				],
			],

			// 
			'new_with_area_and_entry' => [
				'cpp-method' => "gtk_combo_box_new_with_area_and_entry",
				'static' => TRUE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkCellArea",
						'name' => "area",
						'cast_macro' => "GTK_CELL_AREA",
					],
				],
			],

			// 
			'get_wrap_width' => [
				'cpp-method' => "gtk_combo_box_get_wrap_width",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			// 
			'set_wrap_width' => [
				'cpp-method' => "gtk_combo_box_set_wrap_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "width",
					],
				],
			],

			// 
			'get_row_span_column' => [
				'cpp-method' => "gtk_combo_box_get_row_span_column",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
				],
			],

			// 
			'set_row_span_column' => [
				'cpp-method' => "gtk_combo_box_set_row_span_column",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "row_span",
					],
				],
			],

			// 
			'get_column_span_column' => [
				'cpp-method' => "gtk_combo_box_get_column_span_column",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			// 
			'set_column_span_column' => [
				'cpp-method' => "gtk_combo_box_set_column_span_column",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "column_span",
					],
				],
			],

			// 
			'get_active' => [
				'cpp-method' => "gtk_combo_box_get_active",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			// 
			'set_active' => [
				'cpp-method' => "gtk_combo_box_set_active",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "index_",
					],
				],
			],

			// 
			'get_active_iter' => [
				'cpp-method' => "gtk_combo_box_get_active_iter",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
				'parameters' => [],
			],

			// 
			'set_active_iter' => [
				'cpp-method' => "gtk_combo_box_set_active_iter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
				],
			],

			// 
			'get_id_column' => [
				'cpp-method' => "gtk_combo_box_get_id_column",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			// 
			'set_id_column' => [
				'cpp-method' => "gtk_combo_box_set_id_column",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "id_column",
					],
				],
			],

			// 
			'get_active_id' => [
				'cpp-method' => "gtk_combo_box_get_active_id",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => [],
			],

			// 
			'set_active_id' => [
				'cpp-method' => "gtk_combo_box_set_active_id",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "active_id",
					],
				],
			],

			// 
			'get_model' => [
				'cpp-method' => "gtk_combo_box_get_model",
				'static' => FALSE,
				'return-type' => "GtkTreeModel",
				'parameters' => [],
			],

			// 
			'set_model' => [
				'cpp-method' => "gtk_combo_box_set_model",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeModel",
						'name' => "model",
						'cast_macro' => "GTK_TREE_MODEL",
					],
				],
			],

			// 
			'popup_for_device' => [
				'cpp-method' => "gtk_combo_box_popup_for_device",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkDevice",
						'name' => "device",
					],
				],
			],

			// 
			'popup' => [
				'cpp-method' => "gtk_combo_box_popup",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'popdown' => [
				'cpp-method' => "gtk_combo_box_popdown",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],
			
			// 
			'get_popup_accessible' => [
				'cpp-method' => "gtk_combo_box_get_popup_accessible",
				'static' => FALSE,
				'return-type' => "AtkObject",
				'parameters' => [],
			],
			
			// 
			'get_row_separator_func' => [
				'cpp-method' => "gtk_combo_box_get_row_separator_func",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => [],
			],

			
			// 
			'set_row_separator_func' => [
				'cpp-method' => "gtk_combo_box_set_row_separator_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "func"
					],
					[
						'type' => "gpointer",
						'name' => "data"
					],
					[
						'type' => "gchar *",
						'name' => "destroy"
					]
				],
			],

			// 
			'set_button_sensitivity' => [
				'cpp-method' => "gtk_combo_box_set_button_sensitivity",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSensitivityType",
						'name' => "sensitivity"
					],
				],
			],

			// 
			'get_button_sensitivity' => [
				'cpp-method' => "gtk_combo_box_get_button_sensitivity",
				'static' => FALSE,
				'return-type' => "enum GtkSensitivityType",
				'parameters' => [],
			],

			// 
			'get_has_entry' => [
				'cpp-method' => "gtk_combo_box_get_has_entry",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'get_entry_text_column' => [
				'cpp-method' => "gtk_combo_box_get_entry_text_column",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			// 
			'set_entry_text_column' => [
				'cpp-method' => "gtk_combo_box_set_entry_text_column",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "text_column",
					],
				],
			],

			// 
			'get_popup_fixed_width' => [
				'cpp-method' => "gtk_combo_box_get_popup_fixed_width",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_popup_fixed_width' => [
				'cpp-method' => "gtk_combo_box_set_popup_fixed_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "fixed",
					],
				],
			],

			
			




			//
		]



	];