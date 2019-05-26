<?php

	return [

		'configs' => [
			'cpp-object' => "GtkMenuShell",
			'name'=>"GtkMenuShell_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_MENU_SHELL"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'append' => [
				'cpp-method' => "gtk_menu_shell_append",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
						'cast_macro' => "GTK_WIDGET"
					]
				],
			],

			// 
			'prepend' => [
				'cpp-method' => "gtk_menu_shell_prepend",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
						'cast_macro' => "GTK_WIDGET"
					]
				],
			],

			// 
			'insert' => [
				'cpp-method' => "gtk_menu_shell_insert",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
						'cast_macro' => "GTK_WIDGET"
					],
					[
						'type' => "gint",
						'name' => "position",
					]
				],
			],

			// 
			'deactivate' => [
				'cpp-method' => "gtk_menu_shell_deactivate",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' =>NULL,
			],

			// 
			'select_item' => [
				'cpp-method' => "gtk_menu_shell_select_item",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
						'cast_macro' => "GTK_WIDGET"
					]
				],
			],

			// 
			'select_first' => [
				'cpp-method' => "gtk_menu_shell_select_first",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "search_sensitive",
					]
				],
			],

			// 
			'deselect' => [
				'cpp-method' => "gtk_menu_shell_deselect",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'activate_item' => [
				'cpp-method' => "gtk_menu_shell_activate_item",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "menu_item",
						'cast_macro' => "GTK_WIDGET"
					],
					[
						'type' => "gboolean",
						'name' => "force_deactivate",
					]
				],
			],

			// 
			'cancel' => [
				'cpp-method' => "gtk_menu_shell_cancel",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'set_take_focus' => [
				'cpp-method' => "gtk_menu_shell_set_take_focus",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "take_focus",
					]
				],
			],

			// 
			'get_take_focus' => [
				'cpp-method' => "gtk_menu_shell_get_take_focus",
				'return-type' => "gboolean",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'get_selected_item' => [
				'cpp-method' => "gtk_menu_shell_get_selected_item",
				'return-type' => "GtkWidget",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'get_parent_shell' => [
				'cpp-method' => "gtk_menu_shell_get_parent_shell",
				'return-type' => "GtkWidget",
				'static' => FALSE,
				'parameters' => NULL,
			],

			// 
			'bind_model' => [
				'cpp-method' => "gtk_menu_shell_bind_model",
				'return-type' => NULL,
				'static' => FALSE,
				'parameters' => [
					[
						'type' => "GMenuModel",
						'name' => "model",
						'cast_macro' => NULL
					],
					[
						'type' => "gchar *",
						'name' => "action_namespace"
					],
					[
						'type' => "gboolean",
						'name' => "with_separators"
					]
				],
			],






		]



	];