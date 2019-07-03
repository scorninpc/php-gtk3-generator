<?php

	return [

		'configs' => [
			'cpp-object' => "GtkInfoBar",
			'name' => "GtkInfoBar_",
			'extends' => "GtkBox_",
			'cast_macro' => "GTK_INFO_BAR"
		],
		

		'dependences' => [
			"GtkBox.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_info_bar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_buttons' => [
				'cpp-method' => "gtk_info_bar_new_with_buttons",
				'static' => TRUE,
				'return-type' => "GtkInfoBar",
				'parameters' => [
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'add_action_widget' => [
				'cpp-method' => "gtk_info_bar_add_action_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gint",
						'name' => "response_id",
					],
				],
			],

			//--------------
			'add_button' => [
				'cpp-method' => "gtk_info_bar_add_button",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "button_text",
					],
					[
						'type' => "gint",
						'name' => "response_id",
					],
				],
			],

			//--------------
			'add_buttons' => [
				'cpp-method' => "gtk_info_bar_add_buttons",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "first_button_text",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],

			//--------------
			'set_response_sensitive' => [
				'cpp-method' => "gtk_info_bar_set_response_sensitive",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					],
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],

			//--------------
			'set_default_response' => [
				'cpp-method' => "gtk_info_bar_set_default_response",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					],
				],
			],

			//--------------
			'response' => [
				'cpp-method' => "gtk_info_bar_response",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					],
				],
			],

			//--------------
			'set_message_type' => [
				'cpp-method' => "gtk_info_bar_set_message_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkMessageType",
						'name' => "message_type",
					],
				],
			],

			//--------------
			'get_message_type' => [
				'cpp-method' => "gtk_info_bar_get_message_type",
				'static' => FALSE,
				'return-type' => "enum GtkMessageType",
				'parameters' => NULL
			],

			//--------------
			'get_action_area' => [
				'cpp-method' => "gtk_info_bar_get_action_area",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'get_content_area' => [
				'cpp-method' => "gtk_info_bar_get_content_area",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'get_show_close_button' => [
				'cpp-method' => "gtk_info_bar_get_show_close_button",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_close_button' => [
				'cpp-method' => "gtk_info_bar_set_show_close_button",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],
		]



	];