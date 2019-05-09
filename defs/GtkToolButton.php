<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkToolButton",
			'name'=>"GtkToolButton_",
			'extends'=>"GtkToolItem_",
			'cast_macro' => "GTK_TOOL_BUTTON"
		],
		

		'dependences' => [
			"GtkToolItem.h",
			"GtkWidget.h",
		],


		'methods' => [

			'__construct' => [
				'cpp-method' => "gtk_tool_button_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "icon_widget",
					],
					[
						'type' => "gchar *",
						'name' => "label",
					]
				]
			],

			'set_label' => [
				'cpp-method' => "gtk_tool_button_set_label",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					]
				]
			],

			'get_label' => [
				'cpp-method' => "gtk_tool_button_get_label",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			'set_use_underline' => [
				'cpp-method' => "gtk_tool_button_set_use_underline",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_underline",
					]
				]
			],

			'get_use_underline' => [
				'cpp-method' => "gtk_tool_button_get_use_underline",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_icon_name' => [
				'cpp-method' => "gtk_tool_button_set_icon_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "icon_name",
					]
				]
			],

			'get_icon_name' => [
				'cpp-method' => "gtk_tool_button_get_icon_name",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			'set_icon_widget' => [
				'cpp-method' => "gtk_tool_button_set_icon_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "icon_widget",
					]
				]
			],

			'get_icon_widget' => [
				'cpp-method' => "gtk_tool_button_get_icon_widget",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			'set_label_widget' => [
				'cpp-method' => "gtk_tool_button_set_label_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "label_widget",
					]
				]
			],

			'get_label_widget' => [
				'cpp-method' => "gtk_tool_button_get_label_widget",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],
		],
	];
