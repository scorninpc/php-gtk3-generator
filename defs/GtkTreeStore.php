<?php

	return [

		'configs' => [
			'cpp-object' => "GtkTreeStore",
			'name'=>"GtkTreeStore_",
			'extends'=>"GtkTreeModel_",
			'cast_macro' => "GTK_TREE_STORE"
		],
		

		'dependences' => [
			"GtkTreeModel.h"
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_tree_store_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "c_columns"
					]
				],
			],

			// 
			'set_column_types' => [
				'cpp-method' => "gtk_tree_store_set_column_types",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "n_columns",
					],
					[
						'type' => "GType",
						'name' => "types",
					],
				],
			],

			// 
			'set_value' => [
				'cpp-method' => "gtk_tree_store_set_value",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "gint",
						'name' => "columns",
					],
					[
						'type' => "GValue",
						'name' => "value",
					],
				],
			],

			// 
			'remove' => [
				'cpp-method' => "gtk_tree_store_remove",
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
			'insert' => [
				'cpp-method' => "gtk_tree_store_insert",
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
			'insert_before' => [
				'cpp-method' => "gtk_tree_store_insert_before",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
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
			'insert_after' => [
				'cpp-method' => "gtk_tree_store_insert_after",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
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
			'insert_with_values' => [
				'cpp-method' => "gtk_tree_store_insert_with_values",
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
			'insert_with_values' => [
				'cpp-method' => "gtk_tree_store_insert_with_valuesv",
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
			'prepend' => [
				'cpp-method' => "gtk_tree_store_prepend",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "parent",
					],
				],
			],

			// 
			'append' => [
				'cpp-method' => "gtk_tree_store_append",
				'static' => FALSE,
				'return-type' => "GtkTreeIter",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "parent",
					],
				],
			],

			// 
			'is_ancestor' => [
				'cpp-method' => "gtk_tree_store_is_ancestor",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "descendant",
					],
				],
			],

			// 
			'iter_depth' => [
				'cpp-method' => "gtk_tree_store_iter_depth",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			// 
			'clear' => [
				'cpp-method' => "gtk_tree_store_clear",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [ ],
			],

			// 
			'reorder' => [
				'cpp-method' => "gtk_tree_store_reorder",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "parent",
					],
					[
						'type' => "gint",
						'name' => "new_order",
					],
				],
			],

			// 
			'swap' => [
				'cpp-method' => "gtk_tree_store_swap",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "a",
					],
					[
						'type' => "GtkTreeIter",
						'name' => "b",
					],
				],
			],

			// 
			'move_before' => [
				'cpp-method' => "gtk_tree_store_move_before",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "GtkTreeIter",
						'name' => "position",
					],
				],
			],

			// 
			'move_after' => [
				'cpp-method' => "gtk_tree_store_move_after",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "GtkTreeIter",
						'name' => "position",
					],
				],
			],



		]



	];