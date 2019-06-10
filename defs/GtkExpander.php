<?php

	return [

		'configs' => [
			'cpp-object' => "GtkExpander",
			'name' => "GtkExpander_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_EXPANDER"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_expander_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			//--------------
			'new_with_mnemonic' => [
				'cpp-method' => "gtk_expander_new_with_mnemonic",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			//--------------
			'set_expanded' => [
				'cpp-method' => "gtk_expander_set_expanded",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "expanded",
					],
				],
			],

			//--------------
			'get_expanded' => [
				'cpp-method' => "gtk_expander_get_expanded",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_spacing' => [
				'cpp-method' => "gtk_expander_set_spacing",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "spacing",
					],
				],
			],

			//--------------
			'get_spacing' => [
				'cpp-method' => "gtk_expander_get_spacing",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_label' => [
				'cpp-method' => "gtk_expander_set_label",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "label",
					],
				],
			],

			//--------------
			'get_label' => [
				'cpp-method' => "gtk_expander_get_label",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_use_underline' => [
				'cpp-method' => "gtk_expander_set_use_underline",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_underline",
					],
				],
			],

			//--------------
			'get_use_underline' => [
				'cpp-method' => "gtk_expander_get_use_underline",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_use_markup' => [
				'cpp-method' => "gtk_expander_set_use_markup",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_markup",
					],
				],
			],

			//--------------
			'get_use_markup' => [
				'cpp-method' => "gtk_expander_get_use_markup",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_label_widget' => [
				'cpp-method' => "gtk_expander_set_label_widget",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "label_widget",
					],
				],
			],

			//--------------
			'get_label_widget' => [
				'cpp-method' => "gtk_expander_get_label_widget",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_label_fill' => [
				'cpp-method' => "gtk_expander_set_label_fill",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "label_fill",
					],
				],
			],

			//--------------
			'get_label_fill' => [
				'cpp-method' => "gtk_expander_get_label_fill",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_resize_toplevel' => [
				'cpp-method' => "gtk_expander_set_resize_toplevel",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "resize_toplevel",
					],
				],
			],

			//--------------
			'get_resize_toplevel' => [
				'cpp-method' => "gtk_expander_get_resize_toplevel",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],
		]



	];