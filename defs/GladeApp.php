<?php

	return [

		'configs' => [
			'cpp-object' => "GladeApp",
			'name' => "GladeApp_",
			'extends' => "GObject_",
			'cast_macro' => "GLADE_APP"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkWidget.h",
			"GladeProject.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "glade_app_new",
				'static' => FALSE,
				'return-type' => NULL,
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get' => [
				'cpp-method' => "glade_app_get",
				'static' => TRUE,
				'return-type' => "GladeApp",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'set_window' => [
				'cpp-method' => "glade_app_set_window",
				'static' => FALSE,
				'return-type' => NULL,
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_window' => [
				'cpp-method' => "glade_app_get_window",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_clipboard' => [
				'cpp-method' => "glade_app_get_clipboard",
				'static' => FALSE,
				'return-type' => "GladeClipboard",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'add_project' => [
				'cpp-method' => "glade_app_add_project",
				'static' => FALSE,
				'return-type' => NULL,
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'remove_project' => [
				'cpp-method' => "glade_app_remove_project",
				'static' => FALSE,
				'return-type' => NULL,
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_projects' => [
				'cpp-method' => "glade_app_get_projects",
				'static' => FALSE,
				'return-type' => "GList",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_config' => [
				'cpp-method' => "glade_app_get_config",
				'static' => FALSE,
				'return-type' => "GKeyFile",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'is_project_loaded' => [
				'cpp-method' => "glade_app_is_project_loaded",
				'static' => FALSE,
				'return-type' => "gboolean",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_project_by_path' => [
				'cpp-method' => "glade_app_get_project_by_path",
				'static' => FALSE,
				'return-type' => "GladeProject",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'config_save' => [
				'cpp-method' => "glade_app_config_save",
				'static' => FALSE,
				'return-type' => "gint",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'set_accel_group' => [
				'cpp-method' => "glade_app_set_accel_group",
				'static' => FALSE,
				'return-type' => NULL,
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_catalogs_dir' => [
				'cpp-method' => "glade_app_get_catalogs_dir",
				'static' => FALSE,
				'return-type' => "gchar *",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_modules_dir' => [
				'cpp-method' => "glade_app_get_modules_dir",
				'static' => FALSE,
				'return-type' => "gchar *",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_pixmaps_dir' => [
				'cpp-method' => "glade_app_get_pixmaps_dir",
				'static' => FALSE,
				'return-type' => "gchar *",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],

			//--------------
			'get_locale_dir' => [
				'cpp-method' => "glade_app_get_locale_dir",
				'static' => FALSE,
				'return-type' => "gchar *",
				'unimplemented' => TRUE,
				'parameters' => NULL
			],
		]



	];