<?php

	return [

		'configs' => [
			'cpp-object' => "GtkCellRendererPixbuf",
			'name'=>"GtkCellRendererPixbuf_",
			'extends'=>"GtkCellRenderer_",
			'cast_macro' => "GTK_CELL_RENDERER_PIXBUF"
		],
		

		'dependences' => [
			"GtkCellRenderer.h"
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_cell_renderer_pixbuf_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],


			// 
		]



	];