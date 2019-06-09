<?php

	return [

		'configs' => [
			'cpp-object' => "GladeEditor",
			'name'=>"GladeEditor_",
			'extends'=>"GtkBox_",
			'cast_macro' => "GLADE_EDITOR"
		],
		

		'dependences' => [
			"GtkBox.h",
			"GtkWidget.h",
			"GladeProject.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "glade_editor_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'load_widget' => [
				'cpp-method' => "glade_editor_load_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GladeWidget",
						'name' => "widget",
						'cast_macro' => "GLADE_WIDGET"
					]
				],
			],

			// 
			'query_dialog' => [
				'cpp-method' => "glade_editor_query_dialog",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GladeWidget",
						'name' => "widget",
						'cast_macro' => "GLADE_WIDGET"
					]
				],
			],




			
			




			//
		]



	];