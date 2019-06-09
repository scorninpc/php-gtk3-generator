<?php

	return [

		'configs' => [
			'cpp-object' => "GtkRevealer",
			'name'=>"GtkRevealer_",
			'extends'=>"GtkBin_",
			'cast_macro' => "GTK_REVEALER"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [

			// 
			'__construct' => [
				'cpp-method' => "gtk_revealer_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],

			// 
			'get_reveal_child' => [
				'cpp-method' => "gtk_revealer_get_reveal_child",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'set_reveal_child' => [
				'cpp-method' => "gtk_revealer_set_reveal_child",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "reveal_child"
					],
				],
			],

			// 
			'get_child_revealed' => [
				'cpp-method' => "gtk_revealer_get_child_revealed",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			// 
			'get_transition_duration' => [
				'cpp-method' => "gtk_revealer_get_transition_duration",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [],
			],

			// 
			'set_transition_duration' => [
				'cpp-method' => "gtk_revealer_set_transition_duration",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "duration"
					],
				],
			],

			// 
			'get_transition_type' => [
				'cpp-method' => "gtk_revealer_get_transition_type",
				'static' => FALSE,
				'return-type' => "enum GtkRevealerTransitionType",
				'parameters' => [],
			],

			// 
			'set_transition_type' => [
				'cpp-method' => "gtk_revealer_set_transition_type",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkRevealerTransitionType",
						'name' => "transition"
					],
				],
			],



			
			




			//
		]



	];