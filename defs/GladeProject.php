<?php

	return [

		'configs' => [
			'cpp-object' => "GladeProject",
			'name'=>"GladeProject_",
			'extends'=>"GObject_",
			'cast_macro' => "GLADE_PROJECT"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkWidget.h",
			"GladeProject.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "glade_project_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],




			
			




			//
		]



	];