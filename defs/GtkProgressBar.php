<?php

	return [

		'configs' => [
			'cpp-object' => "GtkProgressBar",
			'name' => "GtkProgressBar_",
			'extends' => "GtkWidget_",
			'cast_macro' => "GTK_PROGRESS_BAR"
		],
		

		'dependences' => [
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_progress_bar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'pulse' => [
				'cpp-method' => "gtk_progress_bar_pulse",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_fraction' => [
				'cpp-method' => "gtk_progress_bar_set_fraction",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "fraction",
					],
				],
			],

			//--------------
			'get_fraction' => [
				'cpp-method' => "gtk_progress_bar_get_fraction",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => NULL
			],

			//--------------
			'set_inverted' => [
				'cpp-method' => "gtk_progress_bar_set_inverted",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "inverted",
					],
				],
			],

			//--------------
			'get_inverted' => [
				'cpp-method' => "gtk_progress_bar_get_inverted",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_text' => [
				'cpp-method' => "gtk_progress_bar_set_show_text",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_text",
					],
				],
			],

			//--------------
			'get_show_text' => [
				'cpp-method' => "gtk_progress_bar_get_show_text",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_text' => [
				'cpp-method' => "gtk_progress_bar_set_text",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'get_text' => [
				'cpp-method' => "gtk_progress_bar_get_text",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_ellipsize' => [
				'cpp-method' => "gtk_progress_bar_set_ellipsize",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "PangoEllipsizeMode",
						'name' => "mode",
					],
				],
			],

			//--------------
			'get_ellipsize' => [
				'cpp-method' => "gtk_progress_bar_get_ellipsize",
				'static' => FALSE,
				'return-type' => "PangoEllipsizeMode",
				'parameters' => NULL
			],

			//--------------
			'set_pulse_step' => [
				'cpp-method' => "gtk_progress_bar_set_pulse_step",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "fraction",
					],
				],
			],

			//--------------
			'get_pulse_step' => [
				'cpp-method' => "gtk_progress_bar_get_pulse_step",
				'static' => FALSE,
				'return-type' => "gdouble",
				'parameters' => NULL
			],
		]



	];