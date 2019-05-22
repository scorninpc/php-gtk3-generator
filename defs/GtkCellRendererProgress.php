<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFileFilter",
			'name'=>"GtkCellRendererProgress_",
			'extends'=>"GtkCellRenderer_",
			'cast_macro' => "GTK_FILE_FILTER"
		],
		

		'dependences' => [
			"GObject.h"
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_cell_renderer_progress_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],


			// 
		]



	];