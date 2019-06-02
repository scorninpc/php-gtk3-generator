<?php

	return [

		'configs' => [
			'cpp-object' => "GtkStatusbar",
			'name'=>"GtkStatusbar_",
			'extends'=>"GtkBox_",
			'cast_macro' => "GTK_STATUSBAR"
		],
		

		'dependences' => [
			"GtkBox.h"
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_statusbar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// 
			'get_context_id' => [
				'cpp-method' => "gtk_statusbar_get_context_id",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "context_description",
					],
				],
			],

			// 
			'push' => [
				'cpp-method' => "gtk_statusbar_push",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "guint",
						'name' => "context_id",
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			// 
			'pop' => [
				'cpp-method' => "gtk_statusbar_pop",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "context_id",
					],
				],
			],

			// 
			'remove' => [
				'cpp-method' => "gtk_statusbar_remove",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "context_id",
					],
					[
						'type' => "guint",
						'name' => "message_id",
					],
				],
			],

			// 
			'remove_all' => [
				'cpp-method' => "gtk_statusbar_remove_all",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "context_id",
					],
				],
			],

			// 
			'get_message_area' => [
				'cpp-method' => "gtk_statusbar_get_message_area",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [],
			],




			//
		]



	];