<?php

	return [

		'configs' => [
			'cpp-object' => "GtkAppChooserButton",
			'name' => "GtkAppChooserButton_",
			'extends' => "GtkComboBox_",
			'cast_macro' => "GTK_APP_CHOOSER_BUTTON"
		],
		

		'dependences' => [
			"GtkComboBox.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_app_chooser_button_new",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'append_custom_item' => [
				'cpp-method' => "gtk_app_chooser_button_append_custom_item",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "gchar *",
						'name' => "label",
					],
					[
						'type' => "GIcon",
						'name' => "icon",
					],
				],
			],

			//--------------
			'append_separator' => [
				'cpp-method' => "gtk_app_chooser_button_append_separator",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_active_custom_item' => [
				'cpp-method' => "gtk_app_chooser_button_set_active_custom_item",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
				],
			],

			//--------------
			'get_show_default_item' => [
				'cpp-method' => "gtk_app_chooser_button_get_show_default_item",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_default_item' => [
				'cpp-method' => "gtk_app_chooser_button_set_show_default_item",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],

			//--------------
			'get_show_dialog_item' => [
				'cpp-method' => "gtk_app_chooser_button_get_show_dialog_item",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_dialog_item' => [
				'cpp-method' => "gtk_app_chooser_button_set_show_dialog_item",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],

			//--------------
			'get_heading' => [
				'cpp-method' => "gtk_app_chooser_button_get_heading",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_heading' => [
				'cpp-method' => "gtk_app_chooser_button_set_heading",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "heading",
					],
				],
			],
		]



	];