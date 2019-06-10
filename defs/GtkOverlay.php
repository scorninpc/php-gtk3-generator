<?php

	return [

		'configs' => [
			'cpp-object' => "GtkOverlay",
			'name' => "GtkOverlay_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_OVERLAY"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_overlay_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'add_overlay' => [
				'cpp-method' => "gtk_overlay_add_overlay",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
				],
			],

			//--------------
			'reorder_overlay' => [
				'cpp-method' => "gtk_overlay_reorder_overlay",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			//--------------
			'get_overlay_pass_through' => [
				'cpp-method' => "gtk_overlay_get_overlay_pass_through",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
				],
			],

			//--------------
			'set_overlay_pass_through' => [
				'cpp-method' => "gtk_overlay_set_overlay_pass_through",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
					[
						'type' => "gboolean",
						'name' => "pass_through",
					],
				],
			],
		]



	];