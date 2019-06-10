<?php

	return [

		'configs' => [
			'cpp-object' => "GtkButtonBox",
			'name' => "GtkButtonBox_",
			'extends' => "GtkBox_",
			'cast_macro' => "GTK_BUTTON_BOX"
		],
		

		'dependences' => [
			"GtkBox.h",
			"GtkBox.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_button_box_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkOrientation",
						'name' => "orientation"
					]
				]
			],

			//--------------
			'get_layout' => [
				'cpp-method' => "gtk_button_box_get_layout",
				'static' => FALSE,
				'return-type' => "enum GtkButtonBoxStyle",
				'parameters' => NULL
			],

			//--------------
			'get_child_secondary' => [
				'cpp-method' => "gtk_button_box_get_child_secondary",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'get_child_non_homogeneous' => [
				'cpp-method' => "gtk_button_box_get_child_non_homogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'set_layout' => [
				'cpp-method' => "gtk_button_box_set_layout",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkButtonBoxStyle",
						'name' => "layout_style",
					],
				],
			],

			//--------------
			'set_child_secondary' => [
				'cpp-method' => "gtk_button_box_set_child_secondary",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gboolean",
						'name' => "is_secondary",
					],
				],
			],

			//--------------
			'set_child_non_homogeneous' => [
				'cpp-method' => "gtk_button_box_set_child_non_homogeneous",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gboolean",
						'name' => "non_homogeneous",
					],
				],
			],
		]



	];