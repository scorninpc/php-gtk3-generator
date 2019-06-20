<?php

	return [

		'configs' => [
			'cpp-object' => "GtkPageSetupUnixDialog",
			'name' => "GtkPageSetupUnixDialog_",
			'extends' => "GtkDialog_",
			'cast_macro' => "GTK_PAGE_SETUP_UNIX_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h",
			"GtkPageSetup.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_page_setup_unix_dialog_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "itle",
					],
					[
						'type' => "GtkWindow",
						'name' => "parent",
					],
				],
			],

			//--------------
			'set_page_setup' => [
				'cpp-method' => "gtk_page_setup_unix_dialog_set_page_setup",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkPageSetup",
						'name' => "page_setup",
						"cast_macro" => ""
					],
				],
			],

			//--------------
			'get_page_setup' => [
				'cpp-method' => "gtk_page_setup_unix_dialog_get_page_setup",
				'static' => FALSE,
				'return-type' => "GtkPageSetup",
				'parameters' => NULL
			],

			//--------------
			'set_print_settings' => [
				'cpp-method' => "gtk_page_setup_unix_dialog_set_print_settings",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkPrintSettings",
						'name' => "print_settings",
						'cast_macro' => "GTK_PRINT_SETTINGS"
					],
				],
			],

			//--------------
			'get_print_settings' => [
				'cpp-method' => "gtk_page_setup_unix_dialog_get_print_settings",
				'static' => FALSE,
				'return-type' => "GtkPrintSettings",
				'parameters' => NULL
			],
		]



	];