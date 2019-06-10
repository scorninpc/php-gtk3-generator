<?php

	return [

		'configs' => [
			'cpp-object' => "GtkLayout",
			'name' => "GtkLayout_",
			'extends' => "GtkContainer_",
			'cast_macro' => "GTK_LAYOUT"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkWindow.h",
			"GtkAdjustment.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_layout_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAdjustment",
						'name' => "hadjustment",
						'cast_macro' => "GTK_ADJUSTMENT"
					],
					[
						'type' => "GtkAdjustment",
						'name' => "vadjustment",
						'cast_macro' => "GTK_ADJUSTMENT"
					],
				],
			],

			//--------------
			'put' => [
				'cpp-method' => "gtk_layout_put",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child_widget",
					],
					[
						'type' => "gint",
						'name' => "x",
					],
					[
						'type' => "gint",
						'name' => "y",
					],
				],
			],

			//--------------
			'move' => [
				'cpp-method' => "gtk_layout_move",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child_widget",
					],
					[
						'type' => "gint",
						'name' => "x",
					],
					[
						'type' => "gint",
						'name' => "y",
					],
				],
			],

			//--------------
			'set_size' => [
				'cpp-method' => "gtk_layout_set_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "width",
					],
					[
						'type' => "guint",
						'name' => "height",
					],
				],
			],

			//--------------
			'get_size' => [
				'cpp-method' => "gtk_layout_get_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "width",
					],
					[
						'type' => "guint",
						'name' => "height",
					],
				],
			],

			//--------------
			'get_hadjustment' => [
				'cpp-method' => "gtk_layout_get_hadjustment",
				'static' => FALSE,
				'return-type' => "GtkAdjustment",
				'parameters' => NULL
			],

			//--------------
			'get_vadjustment' => [
				'cpp-method' => "gtk_layout_get_vadjustment",
				'static' => FALSE,
				'return-type' => "GtkAdjustment",
				'parameters' => NULL
			],

			//--------------
			'set_hadjustment' => [
				'cpp-method' => "gtk_layout_set_hadjustment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAdjustment",
						'name' => "adjustment",
						'cast_macro' => "GTK_ADJUSTMENT"
					],
				],
			],

			//--------------
			'set_vadjustment' => [
				'cpp-method' => "gtk_layout_set_vadjustment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkAdjustment",
						'name' => "adjustment",
						'cast_macro' => "GTK_ADJUSTMENT"
					],
				],
			],

			//--------------
			'get_bin_window' => [
				'cpp-method' => "gtk_layout_get_bin_window",
				'static' => FALSE,
				'return-type' => "GdkWindow",
				'parameters' => NULL
			],
		]



	];