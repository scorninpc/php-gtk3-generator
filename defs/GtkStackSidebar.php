<?php

	return [

		'configs' => [
			'cpp-object' => "GtkStackSidebar",
			'name' => "GtkStackSidebar_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_STACK_SIDEBAR"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkStack.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_stack_sidebar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_stack' => [
				'cpp-method' => "gtk_stack_sidebar_set_stack",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkStack",
						'name' => "stack",
						'cast_macro' => "GTK_STACK",
					],
				],
			],

			//--------------
			'get_stack' => [
				'cpp-method' => "gtk_stack_sidebar_get_stack",
				'static' => FALSE,
				'return-type' => "GtkStack",
				'parameters' => NULL
			],
		]



	];