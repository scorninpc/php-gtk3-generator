<?php

	return [

		'configs' => [
			'cpp-object' => "GtkTreeSelection",
			'name'=>"GtkTreeSelection_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_TREE_SELECTION"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkTreeView.h",
			"GtkTreeIter.h",
			"GtkTreeModel.h",
		],


		'methods' => [

			// 
			'set_mode' => [
				'cpp-method' => "gtk_tree_selection_set_mode",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSelectionMode",
						'name' => "type",
					],
				],
			],

			// 
			'get_mode' => [
				'cpp-method' => "gtk_tree_selection_get_mode",
				'static' => FALSE,
				'return-type' => "enum GtkSelectionMode",
				'parameters' => [
					
				],
			],

			// 
			'set_select_function' => [
				'cpp-method' => "gtk_tree_selection_set_select_function",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			// 
			'get_select_function' => [
				'cpp-method' => "gtk_tree_selection_get_select_function",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "parent",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			// 
			'get_user_data' => [
				'cpp-method' => "gtk_tree_selection_get_user_data",
				'static' => FALSE,
				'return-type' => "gpointer",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "parent",
					],
					[
						'type' => "GtkTreeIter",
						'name' => "sibling",
					],
				],
			],

			// 
			'get_tree_view' => [
				'cpp-method' => "gtk_tree_selection_get_tree_view",
				'static' => FALSE,
				'return-type' => "GtkTreeView",
				'parameters' => [
				],
			],

			// 
			'get_selected' => [
				'cpp-method' => "gtk_tree_selection_get_selected",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
				'parameters' => [
					[
						'type' => "GtkTreeModel",
						'name' => "model",
					],
				],
			],

			// 
			'selected_foreach' => [
				'cpp-method' => "gtk_tree_selection_selected_foreach",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "parent",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			// 
			'get_selected_rows' => [
				'cpp-method' => "gtk_tree_selection_get_selected_rows",
				'static' => FALSE,
				'return-type' => "GList",
				'parameters' => [
					[
						'type' => "GtkTreeModel",
						'name' => "model",
					],
				],
			],

			// 
			'count_selected_rows' => [
				'cpp-method' => "gtk_tree_selection_count_selected_rows",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
				],
			],

			// 
			'select_path' => [
				'cpp-method' => "gtk_tree_selection_select_path",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreePath",
						'name' => "path",
					],
				],
			],

			// 
			'unselect_path' => [
				'cpp-method' => "gtk_tree_selection_unselect_path",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreePath",
						'name' => "path",
					],
				],
			],

			// 
			'path_is_selected' => [
				'cpp-method' => "gtk_tree_selection_path_is_selected",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTreePath",
						'name' => "path",
					],
				],
			],

			// 
			'select_iter' => [
				'cpp-method' => "gtk_tree_selection_select_iter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			// 
			'unselect_iter' => [
				'cpp-method' => "gtk_tree_selection_unselect_iter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			// 
			'iter_is_selected' => [
				'cpp-method' => "gtk_tree_selection_iter_is_selected",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			// 
			'select_all' => [
				'cpp-method' => "gtk_tree_selection_select_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
				],
			],

			// 
			'unselect_all' => [
				'cpp-method' => "gtk_tree_selection_unselect_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
				],
			],

			// 
			'unselect_range' => [
				'cpp-method' => "gtk_tree_selection_unselect_range",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreePath",
						'name' => "start_path",
					],
					[
						'type' => "GtkTreePath",
						'name' => "end_path",
					],
				],
			],



		]



	];