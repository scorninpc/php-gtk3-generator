<?php

	return [

		'configs' => [
			'cpp-object' => "GtkAspectFrame",
			'name' => "GtkAspectFrame_",
			'extends' => "GtkFrame_",
			'cast_macro' => "GTK_ASPECT_FRAME"
		],
		

		'dependences' => [
			"GtkFrame.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_aspect_frame_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
					[
						'type' => "gfloat",
						'name' => "xalign",
					],
					[
						'type' => "gfloat",
						'name' => "yalign",
					],
					[
						'type' => "gfloat",
						'name' => "ratio",
					],
					[
						'type' => "gboolean",
						'name' => "obey_child",
					],
				],
			],

			//--------------
			'set' => [
				'cpp-method' => "gtk_aspect_frame_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gfloat",
						'name' => "xalign",
					],
					[
						'type' => "gfloat",
						'name' => "yalign",
					],
					[
						'type' => "gfloat",
						'name' => "ratio",
					],
					[
						'type' => "gboolean",
						'name' => "obey_child",
					],
				],
			],
		]



	];