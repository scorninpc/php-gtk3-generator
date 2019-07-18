<?php

	return [

		'configs' => [
			'cpp-object' => "GtkListStore",
			'name' => "GtkListStore_",
			'extends' => "GtkTreeModel_",
			'cast_macro' => "GTK_LIST_STORE"
		],
		

		'dependences' => [
			"GtkTreeModel.h",
			"GtkTreeIter.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_list_store_new",
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
			'set_column_types' => [
				'cpp-method' => "gtk_list_store_set_column_types",
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

			//--------------
			'set' => [
				'cpp-method' => "gtk_list_store_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'set_valist' => [
				'cpp-method' => "gtk_list_store_set_valist",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "va_list",
						'name' => "var_args",
					],
				],
			],

			//--------------
			'set_value' => [
				'cpp-method' => "gtk_list_store_set_value",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "gint",
						'name' => "column",
					],
					[
						'type' => "GValue",
						'name' => "value",
					],
				],
			],

			//--------------
			'set_valuesv' => [
				'cpp-method' => "gtk_list_store_set_valuesv",
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
						'name' => "values",
					],
					[
						'type' => "gint",
						'name' => "n_values",
					],
				],
			],

			//--------------
			'remove' => [
				'cpp-method' => "gtk_list_store_remove",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			//--------------
			'insert' => [
				'cpp-method' => "gtk_list_store_insert",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			//--------------
			'insert_before' => [
				'cpp-method' => "gtk_list_store_insert_before",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "GtkTreeIter",
						'name' => "sibling",
					],
				],
			],

			//--------------
			'insert_after' => [
				'cpp-method' => "gtk_list_store_insert_after",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "GtkTreeIter",
						'name' => "sibling",
					],
				],
			],

			//--------------
			'insert_with_values' => [
				'cpp-method' => "gtk_list_store_insert_with_values",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'insert_with_valuesv' => [
				'cpp-method' => "gtk_list_store_insert_with_valuesv",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
					[
						'type' => "gint",
						'name' => "columns",
					],
					[
						'type' => "GValue",
						'name' => "values",
					],
					[
						'type' => "gint",
						'name' => "n_values",
					],
				],
			],

			//--------------
			'prepend' => [
				'cpp-method' => "gtk_list_store_prepend",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			//--------------
			'append' => [
				'cpp-method' => "gtk_list_store_append",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			//--------------
			'clear' => [
				'cpp-method' => "gtk_list_store_clear",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'iter_is_valid' => [
				'cpp-method' => "gtk_list_store_iter_is_valid",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
				],
			],

			//--------------
			'reorder' => [
				'cpp-method' => "gtk_list_store_reorder",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "new_order",
					],
				],
			],

			//--------------
			'swap' => [
				'cpp-method' => "gtk_list_store_swap",
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

			//--------------
			'move_before' => [
				'cpp-method' => "gtk_list_store_move_before",
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

			//--------------
			'move_after' => [
				'cpp-method' => "gtk_list_store_move_after",
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