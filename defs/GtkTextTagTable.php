<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextTagTable",
			'name'=>"GtkTextTagTable_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_TEXT_TAG_TABLE"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkTextTag.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_text_tag_table_new",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			'add' => [
				'cpp-method' => "gtk_text_tag_table_add",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextTag",
						'name' => "tag",
						'nocast_macro' => "",
					]
				]
			],

			'remove' => [
				'cpp-method' => "gtk_text_tag_table_remove",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextTag",
						'name' => "tag",
						'nocast_macro' => "",
					]
				]
			],

			'lookup' => [
				'cpp-method' => "gtk_text_tag_table_lookup",
				'return-type' => "GtkTextTag",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name"
					]
				]
			],

			'foreach' => [
				'cpp-method' => "gtk_text_tag_table_foreach",
				'return-type' => "void",
				'parameters' => [
					[
						'type' => "GtkTextTagTableForeach",
						'name' => "func"
					],
					[
						'type' => "gpointer",
						'name' => "data"
					]
				]
			],

			'get_size' => [
				'cpp-method' => "gtk_text_tag_table_get_size",
				'return-type' => "gint",
				'parameters' => NULL
			],

			

		],
	];
