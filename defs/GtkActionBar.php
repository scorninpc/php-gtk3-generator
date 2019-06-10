<?php

	return [

		'configs' => [
			'cpp-object' => "GtkActionBar",
			'name' => "GtkActionBar_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_ACTION_BAR"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_action_bar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'pack_start' => [
				'cpp-method' => "gtk_action_bar_pack_start",
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
			'pack_end' => [
				'cpp-method' => "gtk_action_bar_pack_end",
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
			'get_center_widget' => [
				'cpp-method' => "gtk_action_bar_get_center_widget",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_center_widget' => [
				'cpp-method' => "gtk_action_bar_set_center_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "center_widget",
					],
				],
			],
		]



	];