<?php

	return [

		'configs' => [
			'cpp-object' => "GtkHeaderBar",
			'name' => "GtkHeaderBar_",
			'extends' => "GtkContainer_",
			'cast_macro' => "GTK_HEADER_BAR"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_header_bar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_title' => [
				'cpp-method' => "gtk_header_bar_set_title",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "title",
					],
				],
			],

			//--------------
			'get_title' => [
				'cpp-method' => "gtk_header_bar_get_title",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_subtitle' => [
				'cpp-method' => "gtk_header_bar_set_subtitle",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "subtitle",
					],
				],
			],

			//--------------
			'get_subtitle' => [
				'cpp-method' => "gtk_header_bar_get_subtitle",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_has_subtitle' => [
				'cpp-method' => "gtk_header_bar_set_has_subtitle",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],

			//--------------
			'get_has_subtitle' => [
				'cpp-method' => "gtk_header_bar_get_has_subtitle",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_custom_title' => [
				'cpp-method' => "gtk_header_bar_set_custom_title",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "title_widget",
					],
				],
			],

			//--------------
			'get_custom_title' => [
				'cpp-method' => "gtk_header_bar_get_custom_title",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'pack_start' => [
				'cpp-method' => "gtk_header_bar_pack_start",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'pack_end' => [
				'cpp-method' => "gtk_header_bar_pack_end",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			//--------------
			'set_show_close_button' => [
				'cpp-method' => "gtk_header_bar_set_show_close_button",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],

			//--------------
			'get_show_close_button' => [
				'cpp-method' => "gtk_header_bar_get_show_close_button",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_decoration_layout' => [
				'cpp-method' => "gtk_header_bar_set_decoration_layout",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "layout",
					],
				],
			],

			//--------------
			'get_decoration_layout' => [
				'cpp-method' => "gtk_header_bar_get_decoration_layout",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],
		]



	];