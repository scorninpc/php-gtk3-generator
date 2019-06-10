<?php

	return [

		'configs' => [
			'cpp-object' => "GtkStack",
			'name' => "GtkStack_",
			'extends' => "GtkContainer_",
			'cast_macro' => "GTK_STACK"
		],
		

		'dependences' => [
			"GtkContainer.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_stack_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'add_named' => [
				'cpp-method' => "gtk_stack_add_named",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'add_titled' => [
				'cpp-method' => "gtk_stack_add_titled",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "gchar *",
						'name' => "title",
					],
				],
			],

			//--------------
			'get_child_by_name' => [
				'cpp-method' => "gtk_stack_get_child_by_name",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
				[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'set_visible_child' => [
				'cpp-method' => "gtk_stack_set_visible_child",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'get_visible_child' => [
				'cpp-method' => "gtk_stack_get_visible_child",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL,
			],

			//--------------
			'set_visible_child_name' => [
				'cpp-method' => "gtk_stack_set_visible_child_name",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'get_visible_child_name' => [
				'cpp-method' => "gtk_stack_get_visible_child_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL,
			],

			//--------------
			'set_visible_child_full' => [
				'cpp-method' => "gtk_stack_set_visible_child_full",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "enum GtkStackTransitionType",
						'name' => "transition",
					],
				],
			],

			//--------------
			'set_homogeneous' => [
				'cpp-method' => "gtk_stack_set_homogeneous",
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
				'cpp-method' => "gtk_stack_get_homogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL,
			],

			//--------------
			'set_hhomogeneous' => [
				'cpp-method' => "gtk_stack_set_hhomogeneous",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "hhomogeneous",
					],
				],
			],

			//--------------
			'get_hhomogeneous' => [
				'cpp-method' => "gtk_stack_get_hhomogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL,
			],

			//--------------
			'set_vhomogeneous' => [
				'cpp-method' => "gtk_stack_set_vhomogeneous",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "vhomogeneous",
					],
				],
			],

			//--------------
			'get_vhomogeneous' => [
				'cpp-method' => "gtk_stack_get_vhomogeneous",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
				],
			],

			//--------------
			'set_transition_duration' => [
				'cpp-method' => "gtk_stack_set_transition_duration",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "duration",
					],
				],
			],

			//--------------
			'get_transition_duration' => [
				'cpp-method' => "gtk_stack_get_transition_duration",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
				],
			],

			//--------------
			'set_transition_type' => [
				'cpp-method' => "gtk_stack_set_transition_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkStackTransitionType",
						'name' => "transition",
					],
				],
			],

			//--------------
			'get_transition_type' => [
				'cpp-method' => "gtk_stack_get_transition_type",
				'static' => FALSE,
				'return-type' => "enum GtkStackTransitionType",
				'parameters' => [
				],
			],

			//--------------
			'get_transition_running' => [
				'cpp-method' => "gtk_stack_get_transition_running",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
				],
			],

			//--------------
			'get_interpolate_size' => [
				'cpp-method' => "gtk_stack_get_interpolate_size",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
				],
			],

			//--------------
			'set_interpolate_size' => [
				'cpp-method' => "gtk_stack_set_interpolate_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "interpolate_size",
					],
				],
			],
		]



	];