<?php

	return [
		
		'configs' => [
			'cpp-object' => "GdkWindow",
			'name'=>"GdkWindow_",
			'extends'=>"GObject_",
			'cast_macro' => "GDK_WINDOW"
		],
		

		'dependences' => [
			"GObject.h",
		],


		'methods' => [

			// ----
			'beep' => [
				'cpp-method' => "gdk_window_beep",
				'return-type' => NULL,
			],


		],
	];
