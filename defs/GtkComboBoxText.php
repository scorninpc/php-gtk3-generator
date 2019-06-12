<?php

	return [

		'configs' => [
			'cpp-object' => "GtkComboBoxText",
			'name' => "GtkComboBoxText_",
			'extends' => "GtkComboBox_",
			'cast_macro' => "GTK_COMBO_BOX_TEXT"
		],
		

		'dependences' => [
			"GtkComboBox.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_combo_box_text_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_entry' => [
				'cpp-method' => "gtk_combo_box_text_new_with_entry",
				'static' => TRUE,
				'return-type' => "GtkComboBoxText",
				'parameters' => NULL
			],

			//--------------
			'append' => [
				'cpp-method' => "gtk_combo_box_text_append",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "id",
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'prepend' => [
				'cpp-method' => "gtk_combo_box_text_prepend",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "id",
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'insert' => [
				'cpp-method' => "gtk_combo_box_text_insert",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position",
					],
					[
						'type' => "gchar *",
						'name' => "id",
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'append_text' => [
				'cpp-method' => "gtk_combo_box_text_append_text",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'prepend_text' => [
				'cpp-method' => "gtk_combo_box_text_prepend_text",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'insert_text' => [
				'cpp-method' => "gtk_combo_box_text_insert_text",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position",
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'remove' => [
				'cpp-method' => "gtk_combo_box_text_remove",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			//--------------
			'remove_all' => [
				'cpp-method' => "gtk_combo_box_text_remove_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_active_text' => [
				'cpp-method' => "gtk_combo_box_text_get_active_text",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],
		]



	];