<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkFileChooser",
			'name'=>"GtkFileChooser_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_FILE_CHOOSER"
		],
		

		'dependences' => [
			"GObject.h"
		],


		'methods' => [


			'get_filename' => [
				'cpp-method' => "gtk_file_chooser_get_filename",
				'return-type' => "gchar *",
				'parameters' => NULL,
			],



		],
	];
