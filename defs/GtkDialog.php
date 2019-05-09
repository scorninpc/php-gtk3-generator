<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkDialog",
			'name'=>"GtkDialog_",
			'extends'=>"GtkWindow_",
			'cast_macro' => "GTK_DIALOG"
		],
		

		'dependences' => [
			"GtkWindow.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_dialog_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			'new_with_buttons' => [
				'cpp-method' => "gtk_dialog_new_with_buttons",
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "title",
					],
					[
						'type' => "GtkWindow",
						'name' => "parent",
					],
					[
						'type' => "enum GtkDialogFlags",
						'name' => "flags",
					],
					[
						'type' => "gchar *",
						'name' => "first_button_text",
					]
				],
			],

			'run' => [
				'cpp-method' => "gtk_dialog_run",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'response' => [
				'cpp-method' => "gtk_dialog_response",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					]
				],
			],

			'add_button' => [
				'cpp-method' => "gtk_dialog_add_button",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "button_text",
					],
					[
						'type' => "gint",
						'name' => "response_id",
					]
				],
			],

			'add_buttons' => [
				'cpp-method' => "gtk_dialog_add_buttons",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "button_text",
					],
					[
						'type' => "gint",
						'name' => "response_id",
					]
				],
			],

			'add_action_widget' => [
				'cpp-method' => "gtk_dialog_add_action_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gint",
						'name' => "response_id",
					]
				],
			],

			'set_default_response' => [
				'cpp-method' => "gtk_dialog_set_default_response",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					]
				],
			],

			'set_response_sensitive' => [
				'cpp-method' => "gtk_dialog_set_response_sensitive",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					],
					[
						'type' => "gboolean",
						'name' => "setting",
					]
				],
			],

			'get_response_for_widget' => [
				'cpp-method' => "gtk_dialog_get_response_for_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					]
				],
			],

			'get_widget_for_response' => [
				'cpp-method' => "gtk_dialog_get_widget_for_response",
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "response_id",
					]
				],
			],

			'get_content_area' => [
				'cpp-method' => "gtk_dialog_get_content_area",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			'get_header_bar' => [
				'cpp-method' => "gtk_dialog_get_header_bar",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],


		],
	];
