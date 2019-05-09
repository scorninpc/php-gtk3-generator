<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkSizeGroup",
			'name'=>"GtkSizeGroup_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_SIZE_GROUP"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkWidget.h",
		],


		'methods' => [

			'__construct' => [
				'cpp-method' => "gtk_size_group_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSizeGroupMode",
						'name' => "mode",
					]
				]
			],

			'set_mode' => [
				'cpp-method' => "gtk_size_group_set_mode",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSizeGroupMode",
						'name' => "mode",
					]
				]
			],

			'get_mode' => [
				'cpp-method' => "gtk_size_group_get_mode",
				'return-type' => "enum GtkSizeGroupMode",
				'parameters' => NULL
			],

			'add_widget' => [
				'cpp-method' => "gtk_size_group_add_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					]
				]
			],

			'remove_widget' => [
				'cpp-method' => "gtk_size_group_remove_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					]
				]
			],

			'get_widgets' => [
				'cpp-method' => "gtk_size_group_get_widgets",
				'return-type' => "GSList",
				'parameters' => NULL
			],

		],
	];
