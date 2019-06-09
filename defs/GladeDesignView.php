<?php

	return [

		'configs' => [
			'cpp-object' => "GladeDesignView",
			'name'=>"GladeDesignView_",
			'extends'=>"GtkBox_",
			'cast_macro' => "GLADE_DESIGN_VIEW"
		],
		

		'dependences' => [
			"GtkBox.h",
			"GtkWidget.h",
			"GladeProject.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "glade_design_view_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GladeProject",
						'name' => "project",
						'cast_macro' => "GLADE_PROJECT"
					]
				],
			],

			// 
			'get_project' => [
				'cpp-method' => "glade_design_view_get_project",
				'static' => FALSE,
				'return-type' => "GladeProject",
				'parameters' => [],
			],

			// 
			'get_from_project' => [
				'cpp-method' => "glade_design_view_get_from_project",
				'static' => FALSE,
				'return-type' => "GladeDesignView",
				'parameters' => [],
			],




			
			




			//
		]



	];