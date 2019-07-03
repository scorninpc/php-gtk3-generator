<?php

	return [

		'configs' => [
			'cpp-object' => "GtkAppChooserDialog",
			'name' => "GtkAppChooserDialog_",
			'extends' => "GtkDialog_",
			'cast_macro' => "GTK_APP_CHOOSER_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h",
			"GtkDialogFlags.h",
			"GtkWindow.h",
		],


		'methods' => [
			'__construc' => [
				'cpp-method' => "gtk_app_chooser_dialog_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
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
						'name' => "file",
					],
				],
			],

			//--------------
			'new_for_content_type' => [
				'cpp-method' => "gtk_app_chooser_dialog_new_for_content_type",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "GtkWindow",
						'name' => "parent",
					],
					[
						'type' => "enum GtkDialogFlags",
						'name' => "flags",
					],
					[
						'type' => "gchar",
						'name' => "content_type",
					],
				],
			],

			//--------------
			'get_widget' => [
				'cpp-method' => "gtk_app_chooser_dialog_get_widget",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_heading' => [
				'cpp-method' => "gtk_app_chooser_dialog_set_heading",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar",
						'name' => "heading",
					],
				],
			],

			//--------------
			'get_heading' => [
				'cpp-method' => "gtk_app_chooser_dialog_get_heading",
				'static' => FALSE,
				'return-type' => "gchar",
				'parameters' => NULL
			],
		]



	];