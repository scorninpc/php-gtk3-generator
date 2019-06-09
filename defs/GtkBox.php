<?php

	return [

		'configs' => [
			'cpp-object' => "GtkBox",
			'name'=>"GtkBox_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_BOX"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkWidget.h",
			"GtkPackType.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_box_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkOrientation",
						'name' => "child"
					],
					[
						'type' => "gint",
						'name' => "spacing"
					],
				],
			],

			// 
			'pack_start' => [
				'cpp-method' => "gtk_box_pack_start",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "gboolean",
						'name' => "expand"
					],
					[
						'type' => "gboolean",
						'name' => "fill"
					],
					[
						'type' => "guint",
						'name' => "padding"
					],
				],
			],

			// 
			'pack_end' => [
				'cpp-method' => "gtk_box_pack_end",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "gboolean",
						'name' => "expand"
					],
					[
						'type' => "gboolean",
						'name' => "fill"
					],
					[
						'type' => "guint",
						'name' => "padding"
					],
				],
			],

			// 
			'get_homogeneous' => [
				'cpp-method' => "gtk_box_get_homogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_homogeneous' => [
				'cpp-method' => "gtk_box_set_homogeneous",
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
			'get_spacing' => [
				'cpp-method' => "gtk_box_get_spacing",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_spacing' => [
				'cpp-method' => "gtk_box_set_spacing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "spacing"
					],
				],
			],

			// 
			'reorder_child' => [
				'cpp-method' => "gtk_box_reorder_child",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "gboolean",
						'name' => "position"
					],
				],
			],

			// 
			'query_child_packing' => [
				'cpp-method' => "gtk_box_query_child_packing",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "gboolean",
						'name' => "expand"
					],
					[
						'type' => "gboolean",
						'name' => "fill"
					],
					[
						'type' => "guint",
						'name' => "padding"
					],
					[
						'type' => "enum GtkPackType",
						'name' => "pack_type"
					],
				],
			],

			// 
			'set_child_packing' => [
				'cpp-method' => "gtk_box_set_child_packing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child"
					],
					[
						'type' => "gboolean",
						'name' => "expand"
					],
					[
						'type' => "gboolean",
						'name' => "fill"
					],
					[
						'type' => "guint",
						'name' => "padding"
					],
					[
						'type' => "enum GtkPackType",
						'name' => "pack_type"
					],
				],
			],

			// 
			'get_baseline_position' => [
				'cpp-method' => "gtk_box_get_baseline_position",
				'static' => FALSE,
				'return-type' => "enum GtkBaselinePosition",
				'parameters' => [],
			],

			// 
			'set_baseline_position' => [
				'cpp-method' => "gtk_box_set_baseline_position",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkBaselinePosition",
						'name' => "position"
					],
				],
			],

			// 
			'get_center_widget' => [
				'cpp-method' => "gtk_box_get_center_widget",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [],
			],

			// 
			'set_center_widget' => [
				'cpp-method' => "gtk_box_set_center_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget"
					],
				],
			],


			
			




			//
		]



	];