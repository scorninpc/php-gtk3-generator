<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextMark",
			'name'=>"GtkTextMark_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_TEXT_MARK"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkTextBuffer.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_text_mark_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type'=> "gchar *",
						'name' => "name"
					],
					[
						'type'=> "gboolean",
						'name' => "left_gravity"
					]
				]
			],

			'set_visible' => [
				'cpp-method' => "gtk_text_mark_set_visible",
				'return-type' => NULL,
				'parameters' => [
					[
						'type'=> "gboolean",
						'name' => "setting"
					]
				]
			],

			'set_buffer' => [
				'cpp-method' => "gtk_text_mark_get_visible",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_deleted' => [
				'cpp-method' => "gtk_text_mark_get_deleted",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_name' => [
				'cpp-method' => "gtk_text_mark_get_name",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			'get_buffer' => [
				'cpp-method' => "gtk_text_mark_get_buffer",
				'return-type' => "GtkTextBuffer",
				'parameters' => NULL
			],

			'get_left_gravity' => [
				'cpp-method' => "gtk_text_mark_get_left_gravity",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			


		],
	];
