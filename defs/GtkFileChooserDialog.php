<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkFileChooserDialog",
			'name'=>"GtkFileChooserDialog_",
			'extends'=>"GtkDialog_",
			'cast_macro' => "GTK_FILE_CHOOSER_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h"
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_file_chooser_dialog_new",
				'return-type' => NULL,
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
						'type' => "enum GtkFileChooserAction",
						'name' => "action",
					],
					[
						'type' => "gchar *",
						'name' => "first_button_text",
					]
				],
			],



		],
	];
