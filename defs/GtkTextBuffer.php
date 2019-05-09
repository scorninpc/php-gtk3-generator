<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextBuffer",
			'name'=>"GtkTextBuffer_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_TEXT_BUFFER"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkTextIter.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_text_view_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'get_line_count' => [
				'cpp-method' => "gtk_text_buffer_get_line_count",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_char_count' => [
				'cpp-method' => "gtk_text_buffer_get_char_count",
				'return-type' => "gint",
				'parameters' => NULL
			],

			// 'get_tag_table' => [
			// 	'cpp-method' => "gtk_text_buffer_get_tag_table",
			// 	'return-type' => "GtkTextTagTable",
			// 	'parameters' => NULL
			// ],

			'insert' => [
				'cpp-method' => "gtk_text_buffer_insert",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
					[
						'type' => "gint",
						'name' => "len",
					],
				]
			],

			


		],
	];
