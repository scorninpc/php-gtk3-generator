<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkLabel",
			'name'=>"GtkLabel_",
			'extends'=>"GtkWidget_",
			'cast_macro' => "GTK_LABEL"
		],
		

		'dependences' => [
			"GtkWidget.h",
			"GtkJustification.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_label_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					]
				],
			],

			'set_text' => [
				'cpp-method' => "gtk_label_set_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					]
				],
			],

			'set_markup' => [
				'cpp-method' => "gtk_label_set_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					]
				],
			],

			'set_markup_with_mnemonic' => [
				'cpp-method' => "gtk_label_set_markup_with_mnemonic",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					]
				],
			],

			'set_pattern' => [
				'cpp-method' => "gtk_label_set_pattern",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					]
				],
			],

			'set_justify' => [
				'cpp-method' => "gtk_label_set_justify",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkJustification",
						'name' => "jtype",
					]
				],
			],

			'set_xalign' => [
				'cpp-method' => "gtk_label_set_xalign",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gfloat",
						'name' => "xalign",
					]
				],
			],

			'set_yalign' => [
				'cpp-method' => "gtk_label_set_yalign",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gfloat",
						'name' => "yalign",
					]
				],
			],

			'set_width_chars' => [
				'cpp-method' => "gtk_label_set_width_chars",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "n_chars",
					]
				],
			],

			'set_max_width_chars' => [
				'cpp-method' => "gtk_label_set_max_width_chars",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "n_chars",
					]
				],
			],

			'set_line_wrap' => [
				'cpp-method' => "gtk_label_set_line_wrap",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "wrap",
					]
				],
			],

			'set_lines' => [
				'cpp-method' => "gtk_label_set_lines",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "lines",
					]
				],
			],

			// 'get_layout_offsets' => [
			// 	'cpp-method' => "gtk_label_get_layout_offsets",
			// 	'return-type' => NULL,
			// 	'parameters' => [
			// 		[
			// 			'type' => "gint",
			// 			'name' => "x",
			// 		],
			// 		[
			// 			'type' => "gint",
			// 			'name' => "y",
			// 		]
			// 	],
			// ],

			'get_mnemonic_keyval' => [
				'cpp-method' => "gtk_label_get_mnemonic_keyval",
				'return-type' => "gint",
				'parameters' =>  NULL
			],

			'get_selectable' => [
				'cpp-method' => "gtk_label_get_selectable",
				'return-type' => "gboolean",
				'parameters' =>  NULL
			],

			'get_text' => [
				'cpp-method' => "gtk_label_get_text",
				'return-type' => "gchar *",
				'parameters' =>  NULL
			],

			// 'new_with_mnemonic' => [
			// 	'cpp-method' => "gtk_label_new_with_mnemonic",
			// 	'return-type' => "GtkWidget",
			// 	'parameters' =>  NULL
			// ],

			// 'select_region' => [
			// 	'cpp-method' => "gtk_label_select_region",
			// 	'return-type' => "GtkWidget",
			// 	'parameters' => [
			// 		[
			// 			'type' => "gint",
			// 			'name' => "start_offset",
			// 		],
			// 		[
			// 			'type' => "gint",
			// 			'name' => "end_offset",
			// 		]
			// 	],
			// ],

			'set_mnemonic_widget' => [
				'cpp-method' => "gtk_label_set_mnemonic_widget",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "widget",
					],
				],
			],

			'set_selectable' => [
				'cpp-method' => "gtk_label_set_selectable",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],

			'set_text_with_mnemonic' => [
				'cpp-method' => "gtk_label_set_text_with_mnemonic",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					],
				],
			],

			'get_justify' => [
				'cpp-method' => "gtk_label_get_justify",
				'return-type' => "enum GtkJustification",
				'parameters' => NULL
			],

			'get_xalign' => [
				'cpp-method' => "gtk_label_get_xalign",
				'return-type' => "gfloat",
				'parameters' => NULL
			],

			'get_yalign' => [
				'cpp-method' => "gtk_label_get_yalign",
				'return-type' => "gfloat",
				'parameters' => NULL
			],

			'get_width_chars' => [
				'cpp-method' => "gtk_label_get_width_chars",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_max_width_chars' => [
				'cpp-method' => "gtk_label_get_max_width_chars",
				'return-type' => "gint",
				'parameters' => NULL
			],
			
			'get_label' => [
				'cpp-method' => "gtk_label_get_label",
				'return-type' => "gchar *",
				'parameters' => NULL
			],
			
			'get_line_wrap' => [
				'cpp-method' => "gtk_label_get_line_wrap",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'get_lines' => [
				'cpp-method' => "gtk_label_get_lines",
				'return-type' => "gint",
				'parameters' => NULL
			],
			
			'get_mnemonic_widget' => [
				'cpp-method' => "gtk_label_get_mnemonic_widget",
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],
			
			'get_use_markup' => [
				'cpp-method' => "gtk_label_get_use_markup",
				'return-type' => "gboolean",
				'parameters' => NULL,
			],
			
			'get_use_underline' => [
				'cpp-method' => "gtk_label_get_use_underline",
				'return-type' => "gboolean",
				'parameters' => NULL,
			],
			
			'get_single_line_mode' => [
				'cpp-method' => "gtk_label_get_single_line_mode",
				'return-type' => "gboolean",
				'parameters' => NULL,
			],
			
			'get_angle' => [
				'cpp-method' => "gtk_label_get_angle",
				'return-type' => "gdouble",
				'parameters' => NULL,
			],
			
			'set_label' => [
				'cpp-method' => "gtk_label_set_label",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "str",
					],
				],
			],
			
			'set_use_markup' => [
				'cpp-method' => "gtk_label_set_use_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],
			
			'set_use_underline' => [
				'cpp-method' => "gtk_label_set_use_underline",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				],
			],
			
			'set_single_line_mode' => [
				'cpp-method' => "gtk_label_set_single_line_mode",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "single_line_mode",
					],
				],
			],
			
			'set_angle' => [
				'cpp-method' => "gtk_label_set_angle",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gdouble",
						'name' => "angle",
					],
				],
			],
			
			'get_current_uri' => [
				'cpp-method' => "gtk_label_get_current_uri",
				'return-type' => "gchar *",
				'parameters' => NULL,
			],
			
			'set_track_visited_links' => [
				'cpp-method' => "gtk_label_set_track_visited_links",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "track_links",
					],
				],
			],

			'get_track_visited_links' => [
				'cpp-method' => "gtk_label_get_track_visited_links",
				'return-type' => "gboolean",
				'parameters' => NULL
			],


		],
	];
