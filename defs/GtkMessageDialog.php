<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkMessageDialog",
			'name' => "GtkMessageDialog_",
			'extends' => "GtkDialog_",
			'cast_macro' => "GTK_MESSAGE_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h"
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_message_dialog_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWindow",
						'name' => "parent"
					],
					[
						'type' => "enum GtkDialogFlags",
						'name' => "flags"
					],
					[
						'type' => "enum GtkMessageType",
						'name' => "type"
					],
					[
						'type' => "enum GtkButtonsType",
						'name' => "buttons"
					],
					[
						'type' => "gchar *",
						'name' => "message_format"
					],
					[
						'type' => "gchar *",
						'name' => "text"
					]
				]
			],

			'new_with_markup' => [
				'cpp-method' => "gtk_message_dialog_new_with_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWindow",
						'name' => "parent"
					],
					[
						'type' => "enum GtkDialogFlags",
						'name' => "flags"
					],
					[
						'type' => "enum GtkMessageType",
						'name' => "type"
					],
					[
						'type' => "enum GtkButtonsType",
						'name' => "buttons"
					],
					[
						'type' => "gchar *",
						'name' => "message_format"
					],
					[
						'type' => "gchar *",
						'name' => "text"
					]
				]
			],

			'set_markup' => [
				'cpp-method' => "gtk_message_dialog_set_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str"
					]
				]
			],

			'format_secondary_text' => [
				'cpp-method' => "gtk_message_dialog_format_secondary_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "message_format"
					],
					[
						'type' => "gchar *",
						'name' => "text"
					]
				]
			],

			'format_secondary_markup' => [
				'cpp-method' => "gtk_message_dialog_format_secondary_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "message_format"
					],
					[
						'type' => "gchar *",
						'name' => "text"
					]
				]
			],

			'get_message_area' => [
				'cpp-method' => "gtk_message_dialog_get_message_area",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],


		],
	];
