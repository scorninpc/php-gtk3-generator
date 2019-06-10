<?php

	return [

		'configs' => [
			'cpp-object' => "GtkStackSwitcher",
			'name' => "GtkStackSwitcher_",
			'extends' => "GtkBox_",
			'cast_macro' => "GTK_STACK_SWITCHER"
		],
		

		'dependences' => [
			"GtkBox.h",
			"GtkStack.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_stack_switcher_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_stack' => [
				'cpp-method' => "gtk_stack_switcher_set_stack",
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
				'cpp-method' => "gtk_stack_switcher_get_stack",
				'static' => FALSE,
				'return-type' => "GtkStack",
				'parameters' => NULL
			],
		]



	];