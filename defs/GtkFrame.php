<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFrame",
			'name' => "GtkFrame_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_FRAME"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_frame_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			//--------------
			'set_label' => [
				'cpp-method' => "gtk_frame_set_label",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			//--------------
			'set_label_widget' => [
				'cpp-method' => "gtk_frame_set_label_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "label_widget",
					],
				],
			],

			//--------------
			'set_label_align' => [
				'cpp-method' => "gtk_frame_set_label_align",
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
				],
			],

			//--------------
			'set_shadow_type' => [
				'cpp-method' => "gtk_frame_set_shadow_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkShadowType",
						'name' => "type",
					],
				],
			],

			//--------------
			'get_label' => [
				'cpp-method' => "gtk_frame_get_label",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'get_label_align' => [
				'cpp-method' => "gtk_frame_get_label_align",
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
				],
			],

			//--------------
			'get_label_widget' => [
				'cpp-method' => "gtk_frame_get_label_widget",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'get_shadow_type' => [
				'cpp-method' => "gtk_frame_get_shadow_type",
				'static' => FALSE,
				'return-type' => "enum GtkShadowType",
				'parameters' => NULL
			],
		]



	];