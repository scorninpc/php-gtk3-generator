<?php

	return [

		'configs' => [
			'cpp-object' => "GtkSourceView",
			'name' => "GtkSourceView_",
			'extends' => "GtkTextView_",
			'cast_macro' => "GTK_SOURCE_VIEW"
		],
		

		'dependences' => [
			"GtkTextView.h",
			"GtkTextIter.h",
		],


		'methods' => [
			'__construct' => [
				'cpp-method' => "gtk_source_view_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_buffer' => [
				'cpp-method' => "gtk_source_view_new_with_buffer",
				'static' => TRUE,
				'return-type' => "GtkWidget",
				'unimplemented' => TRUE,
				'parameters' => [
					[
						'type' => "GtkSourceBuffer",
						'name' => "buffer",
					],
				]
			],

			//--------------
			'set_show_line_numbers' => [
				'cpp-method' => "gtk_source_view_set_show_line_numbers",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show",
					],
				],
			],

			//--------------
			'get_show_line_numbers' => [
				'cpp-method' => "gtk_source_view_get_show_line_numbers",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_show_right_margin' => [
				'cpp-method' => "gtk_source_view_set_show_right_margin",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show",
					],
				],
			],

			//--------------
			'get_show_right_margin' => [
				'cpp-method' => "gtk_source_view_get_show_right_margin",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_right_margin_position' => [
				'cpp-method' => "gtk_source_view_set_right_margin_position",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "pos",
					],
				],
			],

			//--------------
			'get_right_margin_position' => [
				'cpp-method' => "gtk_source_view_get_right_margin_position",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'set_highlight_current_line' => [
				'cpp-method' => "gtk_source_view_set_highlight_current_line",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "highlight",
					],
				],
			],

			//--------------
			'get_highlight_current_line' => [
				'cpp-method' => "gtk_source_view_get_highlight_current_line",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_auto_indent' => [
				'cpp-method' => "gtk_source_view_set_auto_indent",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "enable",
					],
				],
			],

			//--------------
			'get_auto_indent' => [
				'cpp-method' => "gtk_source_view_get_auto_indent",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_indent_on_tab' => [
				'cpp-method' => "gtk_source_view_set_indent_on_tab",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "enable",
					],
				],
			],

			//--------------
			'get_indent_on_tab' => [
				'cpp-method' => "gtk_source_view_get_indent_on_tab",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_tab_width' => [
				'cpp-method' => "gtk_source_view_set_tab_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "width",
					],
				],
			],

			//--------------
			'get_tab_width' => [
				'cpp-method' => "gtk_source_view_get_tab_width",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => NULL
			],

			//--------------
			'set_indent_width' => [
				'cpp-method' => "gtk_source_view_set_indent_width",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "width",
					],
				],
			],

			//--------------
			'get_indent_width' => [
				'cpp-method' => "gtk_source_view_get_indent_width",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_insert_spaces_instead_of_tabs' => [
				'cpp-method' => "gtk_source_view_set_insert_spaces_instead_of_tabs",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "enable",
					],
				],
			],

			//--------------
			'get_insert_spaces_instead_of_tabs' => [
				'cpp-method' => "gtk_source_view_get_insert_spaces_instead_of_tabs",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'indent_lines' => [
				'cpp-method' => "gtk_source_view_indent_lines",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'cast_macro' => "",
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'cast_macro' => "",
					],
				],
			],

			//--------------
			'unindent_lines' => [
				'cpp-method' => "gtk_source_view_unindent_lines",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'cast_macro' => "",
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'cast_macro' => "",
					],
				],
			],

			//--------------
			'get_visual_column' => [
				'cpp-method' => "gtk_source_view_get_visual_column",
				'static' => FALSE,
				'return-type' => "guint",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'cast_macro' => "",
					],
				],
			],

			//--------------
			'set_smart_backspace' => [
				'cpp-method' => "gtk_source_view_set_smart_backspace",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "smart_backspace",
					],
				],
			],

			//--------------
			'get_smart_backspace' => [
				'cpp-method' => "gtk_source_view_get_smart_backspace",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_smart_home_end' => [
				'cpp-method' => "gtk_source_view_set_smart_home_end",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSourceSmartHomeEndType",
						'name' => "smart_home_end",
					],
				],
			],

			//--------------
			'get_smart_home_end' => [
				'cpp-method' => "gtk_source_view_get_smart_home_end",
				'static' => FALSE,
				'return-type' => "enum GtkSourceSmartHomeEndType",
				'parameters' => NULL
			],

			//--------------
			'set_mark_attributes' => [
				'cpp-method' => "gtk_source_view_set_mark_attributes",
				'static' => FALSE,
				'return-type' => NULL,
				'unimplemented' => TRUE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "category",
					],
					[
						'type' => "GtkSourceMarkAttributes",
						'name' => "attributes",
					],
					[
						'type' => "gint",
						'name' => "priority",
					],
				],
			],

			//--------------
			'get_mark_attributes' => [
				'cpp-method' => "gtk_source_view_get_mark_attributes",
				'static' => FALSE,
				'return-type' => "GtkSourceMarkAttributes",
				'unimplemented' => TRUE,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "category",
					],
					[
						'type' => "gint",
						'name' => "priority",
					],
				],
			],

			//--------------
			'set_show_line_marks' => [
				'cpp-method' => "gtk_source_view_set_show_line_marks",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show",
					],
				],
			],

			//--------------
			'get_show_line_marks' => [
				'cpp-method' => "gtk_source_view_get_show_line_marks",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_draw_spaces' => [
				'cpp-method' => "gtk_source_view_set_draw_spaces",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSourceDrawSpacesFlags",
						'name' => "flags",
					],
				],
			],

			//--------------
			'get_draw_spaces' => [
				'cpp-method' => "gtk_source_view_get_draw_spaces",
				'static' => FALSE,
				'return-type' => "enum GtkSourceDrawSpacesFlags",
				'parameters' => NULL
			],

			//--------------
			'get_completion' => [
				'cpp-method' => "gtk_source_view_get_completion",
				'static' => FALSE,
				'return-type' => "GtkSourceCompletion",
				'unimplemented' => TRUE,
				'parameters' => NULL,
			],

			//--------------
			'get_gutter' => [
				'cpp-method' => "gtk_source_view_get_gutter",
				'static' => FALSE,
				'return-type' => "GtkSourceGutter",
				'unimplemented' => TRUE,
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "window_type",
					],
				],
			],

			//--------------
			'set_background_pattern' => [
				'cpp-method' => "gtk_source_view_set_background_pattern",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkSourceBackgroundPatternType",
						'name' => "background_pattern",
					],
				],
			],

			//--------------
			'get_background_pattern' => [
				'cpp-method' => "gtk_source_view_get_background_pattern",
				'static' => FALSE,
				'return-type' => "enum GtkSourceBackgroundPatternType",
				'parameters' => NULL
			],
		]



	];