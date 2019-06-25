<?php

	return [

		'configs' => [
			'cpp-object' => "GtkSpinner",
			'name' => "GtkSpinner_",
			'extends' => "GtkWidget_",
			'cast_macro' => "GTK_SPINNER"
		],
		

		'dependences' => [
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_spinner_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'start' => [
				'cpp-method' => "gtk_spinner_start",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'stop' => [
				'cpp-method' => "gtk_spinner_stop",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],
		]



	];