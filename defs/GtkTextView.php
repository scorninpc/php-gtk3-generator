<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextView",
			'name'=>"GtkTextView_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_TEXT_VIEW"
		],
		

		'dependences' => [
			"GtkContainer.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_text_view_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			


		],
	];
