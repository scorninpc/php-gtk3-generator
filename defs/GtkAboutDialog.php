<?php

	return [

		'configs' => [
			'cpp-object' => "GtkAboutDialog",
			'name' => "GtkAboutDialog_",
			'extends' => "GtkDialog_",
			'cast_macro' => "GTK_ABOUT_DIALOG"
		],
		

		'dependences' => [
			"GtkDialog.h",
			"GdkPixbuf.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_about_dialog_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_program_name' => [
				'cpp-method' => "gtk_about_dialog_get_program_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_program_name' => [
				'cpp-method' => "gtk_about_dialog_set_program_name",
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
			'get_version' => [
				'cpp-method' => "gtk_about_dialog_get_version",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_version' => [
				'cpp-method' => "gtk_about_dialog_set_version",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "version",
					],
				],
			],

			//--------------
			'get_copyright' => [
				'cpp-method' => "gtk_about_dialog_get_copyright",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_copyright' => [
				'cpp-method' => "gtk_about_dialog_set_copyright",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "copyright",
					],
				],
			],

			//--------------
			'get_comments' => [
				'cpp-method' => "gtk_about_dialog_get_comments",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_comments' => [
				'cpp-method' => "gtk_about_dialog_set_comments",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "comments",
					],
				],
			],

			//--------------
			'get_license' => [
				'cpp-method' => "gtk_about_dialog_get_license",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_license' => [
				'cpp-method' => "gtk_about_dialog_set_license",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "license",
					],
				],
			],

			//--------------
			'get_wrap_license' => [
				'cpp-method' => "gtk_about_dialog_get_wrap_license",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_wrap_license' => [
				'cpp-method' => "gtk_about_dialog_set_wrap_license",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "wrap_license",
					],
				],
			],

			//--------------
			'get_license_type' => [
				'cpp-method' => "gtk_about_dialog_get_license_type",
				'static' => FALSE,
				'return-type' => "enum GtkLicense",
				'parameters' => NULL
			],

			//--------------
			'set_license_type' => [
				'cpp-method' => "gtk_about_dialog_set_license_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkLicense",
						'name' => "license_type",
					],
				],
			],

			//--------------
			'get_website' => [
				'cpp-method' => "gtk_about_dialog_get_website",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_website' => [
				'cpp-method' => "gtk_about_dialog_set_website",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "website",
					],
				],
			],

			//--------------
			'get_website_label' => [
				'cpp-method' => "gtk_about_dialog_get_website_label",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_website_label' => [
				'cpp-method' => "gtk_about_dialog_set_website_label",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "website_label",
					],
				],
			],

			//--------------
			'get_authors' => [
				'cpp-method' => "gtk_about_dialog_get_authors",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_authors' => [
				'cpp-method' => "gtk_about_dialog_set_authors",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "authors",
					],
				],
			],

			//--------------
			'get_artists' => [
				'cpp-method' => "gtk_about_dialog_get_artists",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_artists' => [
				'cpp-method' => "gtk_about_dialog_set_artists",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "artists",
					],
				],
			],

			//--------------
			'get_documenters' => [
				'cpp-method' => "gtk_about_dialog_get_documenters",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_documenters' => [
				'cpp-method' => "gtk_about_dialog_set_documenters",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "documenters",
					],
				],
			],

			//--------------
			'get_translator_credits' => [
				'cpp-method' => "gtk_about_dialog_get_translator_credits",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_translator_credits' => [
				'cpp-method' => "gtk_about_dialog_set_translator_credits",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "translator_credits",
					],
				],
			],

			//--------------
			'get_logo' => [
				'cpp-method' => "gtk_about_dialog_get_logo",
				'static' => FALSE,
				'return-type' => "GdkPixbuf",
				'parameters' => NULL
			],

			//--------------
			'set_logo' => [
				'cpp-method' => "gtk_about_dialog_set_logo",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkPixbuf",
						'name' => "logo",
					],
				],
			],

			//--------------
			'get_logo_icon_name' => [
				'cpp-method' => "gtk_about_dialog_get_logo_icon_name",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_logo_icon_name' => [
				'cpp-method' => "gtk_about_dialog_set_logo_icon_name",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "icon_name",
					],
				],
			],

			//--------------
			'add_credit_section' => [
				'cpp-method' => "gtk_about_dialog_add_credit_section",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "section_name",
					],
					[
						'type' => "gchar *",
						'name' => "people",
					],
				],
			],

			//--------------
			'gtk_show_about_dialog' => [
				'cpp-method' => "gtk_show_about_dialog",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "first_property_name",
					],
					[
						'type' => "...",
						'name' => "",
					],
				],
			],
		]



	];