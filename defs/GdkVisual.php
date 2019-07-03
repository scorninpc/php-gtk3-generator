<?php

	return [
		
		'configs' => [
			'cpp-object' => "GdkVisual",
			'name'=>"GdkVisual_",
			'extends'=>"GObject_",
			'cast_macro' => "GDK_VISUAL"
		],
		

		'dependences' => [
			"GObject.h",
			"GdkScreen.h",
		],


		'methods' => [

			// ----
			'get_blue_pixel_details' => [
				'cpp-method' => "gdk_visual_get_blue_pixel_details",
				'return-type' => "GtkTextBuffer",
				'parameters' => [
					[
						'type' => "guint32",
						'name' => "mask"
					]
				]
			],

			// ----
			'get_green_pixel_details' => [
				'cpp-method' => "gdk_visual_get_green_pixel_details",
				'return-type' => "GtkTextBuffer",
				'parameters' => [
					[
						'type' => "guint32",
						'name' => "mask"
					]
				]
			],

			// ----
			'get_red_pixel_details' => [
				'cpp-method' => "gdk_visual_get_red_pixel_details",
				'return-type' => "GtkTextBuffer",
				'parameters' => [
					[
						'type' => "guint32",
						'name' => "mask"
					]
				]
			],

			// ----
			'get_depth' => [
				'cpp-method' => "gdk_visual_get_depth",
				'return-type' => "gint",
				'parameters' => NULL
			],

			// ----
			'get_visual_type' => [
				'cpp-method' => "gdk_visual_get_visual_type",
				'return-type' => "enum GdkVisualType",
				'parameters' => NULL
			],

			// ----
			'get_screen' => [
				'cpp-method' => "gdk_visual_get_screen",
				'return-type' => "GdkScreen",
				'parameters' => NULL
			],

		],
	];
