<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFixed",
			'name' => "GtkFixed_",
			'extends' => "GtkContainer_",
			'cast_macro' => "GTK_FIXED"
		],
		

		'dependences' => [
			"GtkContainer.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_fixed_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'put' => [
				'cpp-method' => "gtk_fixed_put",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
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
				'cpp-method' => "gtk_fixed_move",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
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
		]



	];