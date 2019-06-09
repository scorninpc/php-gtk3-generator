<?php

	return [

		'configs' => [
			'cpp-object' => "GtkGrid",
			'name'=>"GtkGrid_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_GRID"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkWidget.h",
			"GtkPackType.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_grid_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'attach' => [
				'cpp-method' => "gtk_grid_attach",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "gint",
						'name' => "left"
					],
					[
						'type' => "gint",
						'name' => "top"
					],
					[
						'type' => "gint",
						'name' => "width"
					],
					[
						'type' => "gint",
						'name' => "height"
					],
				],
			],

			// 
			'attach_next_to' => [
				'cpp-method' => "gtk_grid_attach_next_to",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "GtkWidget",
						'name' => "sibling"
					],
					[
						'type' => "enum GtkPositionType",
						'name' => "side"
					],
					[
						'type' => "gint",
						'name' => "width"
					],
					[
						'type' => "gint",
						'name' => "height"
					],
				],
			],

			// 
			'get_child_at' => [
				'cpp-method' => "gtk_grid_get_child_at",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "left"
					],
					[
						'type' => "gint",
						'name' => "top"
					],
				],
			],

			// 
			'insert_row' => [
				'cpp-method' => "gtk_grid_insert_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position"
					],
				],
			],

			// 
			'insert_column' => [
				'cpp-method' => "gtk_grid_insert_column",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position"
					],
				],
			],

			// 
			'remove_row' => [
				'cpp-method' => "gtk_grid_remove_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position"
					],
				],
			],

			// 
			'remove_column' => [
				'cpp-method' => "gtk_grid_remove_column",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position"
					],
				],
			],

			// 
			'insert_next_to' => [
				'cpp-method' => "gtk_grid_insert_next_to",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "sibling"
					],
					[
						'type' => "enum GtkPositionType",
						'name' => "side"
					],
				],
			],

			// 
			'set_row_homogeneous' => [
				'cpp-method' => "gtk_grid_set_row_homogeneous",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "homogeneous"
					],
				],
			],

			// 
			'get_row_homogeneous' => [
				'cpp-method' => "gtk_grid_get_row_homogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_row_spacing' => [
				'cpp-method' => "gtk_grid_set_row_spacing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "spacing"
					],
				],
			],

			// 
			'get_row_spacing' => [
				'cpp-method' => "gtk_grid_get_row_spacing",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [],
			],

			// 
			'set_column_homogeneous' => [
				'cpp-method' => "gtk_grid_set_column_homogeneous",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "homogeneous"
					],
				],
			],

			// 
			'get_column_homogeneous' => [
				'cpp-method' => "gtk_grid_get_column_homogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_column_spacing' => [
				'cpp-method' => "gtk_grid_set_column_spacing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "spacing"
					],
				],
			],

			// 
			'get_column_spacing' => [
				'cpp-method' => "gtk_grid_get_column_spacing",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [],
			],

			// 
			'set_baseline_row' => [
				'cpp-method' => "gtk_grid_set_baseline_row",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "row"
					],
				],
			],

			// 
			'get_baseline_row' => [
				'cpp-method' => "gtk_grid_get_baseline_row",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			// 
			'set_row_baseline_position' => [
				'cpp-method' => "gtk_grid_set_row_baseline_position",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "row"
					],
					[
						'type' => "enum GtkBaselinePosition",
						'name' => "pos"
					],
				],
			],

			// 
			'get_row_baseline_position' => [
				'cpp-method' => "gtk_grid_get_row_baseline_position",
				'static' => FALSE,
				'return-type' => "enum GtkBaselinePosition",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "row"
					],
				],
			],



			
			




			//
		]



	];