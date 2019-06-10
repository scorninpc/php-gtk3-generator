<?php

	return [

		'configs' => [
			'cpp-object' => "GtkButton",
			'name' => "GtkButton_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_BUTTON"
		],
		

		'dependences' => [
			"GtkBin.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_button_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_label' => [
				'cpp-method' => "gtk_button_new_with_label",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'new_with_mnemonic' => [
				'cpp-method' => "gtk_button_new_with_mnemonic",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'new_from_icon_name' => [
				'cpp-method' => "gtk_button_new_from_icon_name",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'new_from_stock' => [
				'cpp-method' => "gtk_button_new_from_stock",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'pressed' => [
				'cpp-method' => "gtk_button_pressed",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'released' => [
				'cpp-method' => "gtk_button_released",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'clicked' => [
				'cpp-method' => "gtk_button_clicked",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'enter' => [
				'cpp-method' => "gtk_button_enter",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'leave' => [
				'cpp-method' => "gtk_button_leave",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_relief' => [
				'cpp-method' => "gtk_button_set_relief",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkReliefStyle",
						'name' => "relief",
					],
				],
			],

			//--------------
			'get_relief' => [
				'cpp-method' => "gtk_button_get_relief",
				'static' => FALSE,
				'return-type' => "enum GtkReliefStyle",
				'parameters' => NULL
			],

			//--------------
			'get_label' => [
				'cpp-method' => "gtk_button_get_label",
				'static' => FALSE,
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'set_label' => [
				'cpp-method' => "gtk_button_set_label",
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
			'get_use_stock' => [
				'cpp-method' => "gtk_button_get_use_stock",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_use_stock' => [
				'cpp-method' => "gtk_button_set_use_stock",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "use_stock",
					],
				],
			],

			//--------------
			'get_use_underline' => [
				'cpp-method' => "gtk_button_get_use_underline",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_use_underline' => [
				'cpp-method' => "gtk_button_set_use_underline",
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
			'set_focus_on_click' => [
				'cpp-method' => "gtk_button_set_focus_on_click",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "focus_on_click",
					],
				],
			],

			//--------------
			'get_focus_on_click' => [
				'cpp-method' => "gtk_button_get_focus_on_click",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_alignment' => [
				'cpp-method' => "gtk_button_set_alignment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gfloat",
						'name' => "xalign",
					],
					[
						'type' => "gfloat",
						'name' => "yalign",
					],
				],
			],

			//--------------
			'get_alignment' => [
				'cpp-method' => "gtk_button_get_alignment",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gfloat",
						'name' => "xalign",
					],
					[
						'type' => "gfloat",
						'name' => "yalign",
					],
				],
			],

			//--------------
			'set_image' => [
				'cpp-method' => "gtk_button_set_image",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "image",
					],
				],
			],

			//--------------
			'get_image' => [
				'cpp-method' => "gtk_button_get_image",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_image_position' => [
				'cpp-method' => "gtk_button_set_image_position",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPositionType",
						'name' => "position",
					],
				],
			],

			//--------------
			'get_image_position' => [
				'cpp-method' => "gtk_button_get_image_position",
				'static' => FALSE,
				'return-type' => "enum GtkPositionType",
				'parameters' => NULL
			],

			//--------------
			'set_always_show_image' => [
				'cpp-method' => "gtk_button_set_always_show_image",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "always_show",
					],
				],
			],

			//--------------
			'get_always_show_image' => [
				'cpp-method' => "gtk_button_get_always_show_image",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'get_event_window' => [
				'cpp-method' => "gtk_button_get_event_window",
				'static' => FALSE,
				'return-type' => "GdkWindow",
				'parameters' => NULL
			],
		]



	];