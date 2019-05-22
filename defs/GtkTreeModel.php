<?php

	return [

		'configs' => [
			'cpp-object' => "GtkTreeModel",
			'name'=>"GtkTreeModel_",
			'extends'=>"GtkButton_",
			'cast_macro' => "Php::Base"
		],
		

		'dependences' => [
			"GtkTreeIter.h"
			"GtkTreeModelFlags.h"
		],


		'methods' => [

			// 
			'get_flags' => [
				'cpp-method' => "gtk_tree_model_get_flags",
				'static' => FALSE,
				'return-type' => "enum GtkTreeModelFlags",
				'parameters' => NULL,
			],

			// 
			'get_n_columns' => [
				'cpp-method' => "gtk_tree_model_get_n_columns",
				'static' => FALSE,
				'return-type' => "int",
				'parameters' => [],
			],

			// 
			'get_column_type' => [
				'cpp-method' => "gtk_tree_model_get_column_type",
				'static' => TRUE,
				'return-type' => "GType",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "index",
					],
				],
			],

			// 
			'get_iter' => [
				'cpp-method' => "gtk_tree_model_get_iter",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTreeIter",
						'name' => "iter",
					],
					[
						'type' => "GtkTreePath",
						'name' => "path",
					],
				],
			],


		]



	];