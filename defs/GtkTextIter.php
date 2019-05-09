<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextIter",
			'name'=>"GtkTextIter_",
			'extends'=>"Php::Base",
			'cast_macro' => "GTK_TEXT_ITER"
		],
		

		'dependences' => [
			"GtkTextTag.h",
		],


		'methods' => [


			// '__construct' => [
			// 	'cpp-method' => "gtk_text_view_new",
			// 	'return-type' => NULL,
			// 	'parameters' => [
			// 		[
			// 			'type' => NULL
			// 		]
			// 	]
			// ],

			'get_buffer' => [
				'cpp-method' => "gtk_text_iter_get_buffer",
				'return-type' => "GtkTextBuffer",
				'parameters' => NULL
			],

			'copy' => [
				'cpp-method' => "gtk_text_iter_copy",
				'return-type' => "GtkTextIter",
				'parameters' => NULL
			],

			'assign' => [
				'cpp-method' => "gtk_text_iter_assign",
				'return-type' => "GtkTextIter",
				'parameters' => NULL
			],

			'free' => [
				'cpp-method' => "gtk_text_iter_free",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'get_offset' => [
				'cpp-method' => "gtk_text_iter_get_offset",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_line' => [
				'cpp-method' => "gtk_text_iter_get_line",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_line_offset' => [
				'cpp-method' => "gtk_text_iter_get_line_offset",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_line_index' => [
				'cpp-method' => "gtk_text_iter_get_line_index",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_visible_line_offset' => [
				'cpp-method' => "gtk_text_iter_get_visible_line_offset",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_char' => [
				'cpp-method' => "gtk_text_iter_get_char",
				'return-type' => "gunichar",
				'parameters' => NULL
			],

			'get_slice' => [
				'cpp-method' => "gtk_text_iter_get_slice",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "end"
					]
				]
			],

			'get_text' => [
				'cpp-method' => "gtk_text_iter_get_text",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "end"
					]
				]
			],

			'get_visible_slice' => [
				'cpp-method' => "gtk_text_iter_get_visible_slice",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "end"
					]
				]
			],

			'get_visible_text' => [
				'cpp-method' => "gtk_text_iter_get_visible_text",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "end"
					]
				]
			],

			// 'get_pixbuf' => [
			// 	'cpp-method' => "gtk_text_iter_get_pixbuf",
			// 	'return-type' => "GdkPixbuf",
			// 	'parameters' =>NULL
			// ],

			// 'get_marks' => [
			// 	'cpp-method' => "gtk_text_iter_get_marks",
			// 	'return-type' => "GSList",
			// 	'parameters' =>NULL
			// ],

			'get_toggled_tags' => [
				'cpp-method' => "gtk_text_iter_get_toggled_tags",
				'return-type' => "GSList",
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "toggled_on"
					]
				]
			],

			// 'get_child_anchor' => [
			// 	'cpp-method' => "gtk_text_iter_get_child_anchor",
			// 	'return-type' => "GSList",
			// 	'parameters' => [
			// 		[
			// 			'type' => "gboolean",
			// 			'name' => "toggled_on"
			// 		]
			// 	]
			// ],

			// 'starts_tag' => [
			// 	'cpp-method' => "gtk_text_iter_starts_tag",
			// 	'return-type' => "gboolean",
			// 	'parameters' => [
			// 		[
			// 			'type' => "GtkTextTag",
			// 			'name' => "tag"
			// 		]
			// 	]
			// ],

			// 'ends_tag' => [
			// 	'cpp-method' => "gtk_text_iter_ends_tag",
			// 	'return-type' => "gboolean",
			// 	'parameters' => [
			// 		[
			// 			'type' => "GtkTextTag",
			// 			'name' => "tag"
			// 		]
			// 	]
			// ],

			// 'toggles_tag' => [
			// 	'cpp-method' => "gtk_text_iter_toggles_tag",
			// 	'return-type' => "gboolean",
			// 	'parameters' => [
			// 		[
			// 			'type' => "GtkTextTag",
			// 			'name' => "tag"
			// 		]
			// 	]
			// ],

			// 'has_tag' => [
			// 	'cpp-method' => "gtk_text_iter_has_tag",
			// 	'return-type' => "gboolean",
			// 	'parameters' => [
			// 		[
			// 			'type' => "GtkTextTag",
			// 			'name' => "tag"
			// 		]
			// 	]
			// ],

			// 'get_tags' => [
			// 	'cpp-method' => "gtk_text_iter_get_tags",
			// 	'return-type' => "GSList",
			// 	'parameters' => NULL
			// ],

			'editable' => [
				'cpp-method' => "gtk_text_iter_editable",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "default_setting"
					]
				]
			],

			'can_insert' => [
				'cpp-method' => "gtk_text_iter_can_insert",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "default_editability"
					]
				]
			],

			'starts_word' => [
				'cpp-method' => "gtk_text_iter_starts_word",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'ends_word' => [
				'cpp-method' => "gtk_text_iter_ends_word",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'inside_word' => [
				'cpp-method' => "gtk_text_iter_inside_word",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'starts_line' => [
				'cpp-method' => "gtk_text_iter_starts_line",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'ends_line' => [
				'cpp-method' => "gtk_text_iter_ends_line",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'starts_sentence' => [
				'cpp-method' => "gtk_text_iter_starts_sentence",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'ends_sentence' => [
				'cpp-method' => "gtk_text_iter_ends_sentence",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'inside_sentence' => [
				'cpp-method' => "gtk_text_iter_inside_sentence",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'is_cursor_position' => [
				'cpp-method' => "gtk_text_iter_is_cursor_position",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_chars_in_line' => [
				'cpp-method' => "gtk_text_iter_get_chars_in_line",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_bytes_in_line' => [
				'cpp-method' => "gtk_text_iter_get_bytes_in_line",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'is_end' => [
				'cpp-method' => "gtk_text_iter_is_end",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'is_start' => [
				'cpp-method' => "gtk_text_iter_is_start",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'forward_char' => [
				'cpp-method' => "gtk_text_iter_forward_char",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'backward_char' => [
				'cpp-method' => "gtk_text_iter_backward_char",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'forward_chars' => [
				'cpp-method' => "gtk_text_iter_forward_chars",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],

			'backward_chars' => [
				'cpp-method' => "gtk_text_iter_backward_chars",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],

			'forward_line' => [
				'cpp-method' => "gtk_text_iter_forward_line",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'backward_line' => [
				'cpp-method' => "gtk_text_iter_backward_line",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'forward_lines' => [
				'cpp-method' => "gtk_text_iter_forward_lines",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'backward_lines' => [
				'cpp-method' => "gtk_text_iter_backward_lines",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'forward_word_ends' => [
				'cpp-method' => "gtk_text_iter_forward_word_ends",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'backward_word_starts' => [
				'cpp-method' => "gtk_text_iter_backward_word_starts",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'forward_word_end' => [
				'cpp-method' => "gtk_text_iter_forward_word_end",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'backward_word_start' => [
				'cpp-method' => "gtk_text_iter_backward_word_start",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'forward_cursor_position' => [
				'cpp-method' => "gtk_text_iter_forward_cursor_position",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'backward_cursor_position' => [
				'cpp-method' => "gtk_text_iter_backward_cursor_position",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'forward_cursor_positions' => [
				'cpp-method' => "gtk_text_iter_forward_cursor_positions",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'backward_cursor_positions' => [
				'cpp-method' => "gtk_text_iter_backward_cursor_positions",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],

			'backward_sentence_start' => [
				'cpp-method' => "gtk_text_iter_backward_sentence_start",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'backward_sentence_starts' => [
				'cpp-method' => "gtk_text_iter_backward_sentence_starts",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],

			'forward_sentence_end' => [
				'cpp-method' => "gtk_text_iter_forward_sentence_end",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'forward_sentence_ends' => [
				'cpp-method' => "gtk_text_iter_forward_sentence_ends",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'forward_visible_word_ends' => [
				'cpp-method' => "gtk_text_iter_forward_visible_word_ends",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'backward_visible_word_starts' => [
				'cpp-method' => "gtk_text_iter_backward_visible_word_starts",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],

			'forward_visible_word_end' => [
				'cpp-method' => "gtk_text_iter_forward_visible_word_end",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'backward_visible_word_start' => [
				'cpp-method' => "gtk_text_iter_backward_visible_word_start",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'forward_visible_cursor_position' => [
				'cpp-method' => "gtk_text_iter_forward_visible_cursor_position",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'backward_visible_cursor_position' => [
				'cpp-method' => "gtk_text_iter_backward_visible_cursor_position",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'forward_visible_cursor_positions' => [
				'cpp-method' => "gtk_text_iter_forward_visible_cursor_positions",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'backward_visible_cursor_positions' => [
				'cpp-method' => "gtk_text_iter_backward_visible_cursor_positions",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],

			'forward_visible_line' => [
				'cpp-method' => "gtk_text_iter_forward_visible_line",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'backward_visible_line' => [
				'cpp-method' => "gtk_text_iter_backward_visible_line",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'forward_visible_lines' => [
				'cpp-method' => "gtk_text_iter_forward_visible_lines",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'backward_visible_lines' => [
				'cpp-method' => "gtk_text_iter_backward_visible_lines",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "count"
					]
				]
			],
			
			'set_offset' => [
				'cpp-method' => "gtk_text_iter_set_offset",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "char_offset"
					]
				]
			],
			
			'set_line' => [
				'cpp-method' => "gtk_text_iter_set_line",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "line_number"
					]
				]
			],
			
			'set_line_offset' => [
				'cpp-method' => "gtk_text_iter_set_line_offset",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "char_on_line"
					]
				]
			],
			
			'set_line_index' => [
				'cpp-method' => "gtk_text_iter_set_line_index",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "byte_on_line"
					]
				]
			],
			
			'set_visible_line_index' => [
				'cpp-method' => "gtk_text_iter_set_visible_line_index",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "byte_on_line"
					]
				]
			],
			
			'set_visible_line_offset' => [
				'cpp-method' => "gtk_text_iter_set_visible_line_offset",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "char_on_line"
					]
				]
			],
			
			'forward_to_end' => [
				'cpp-method' => "gtk_text_iter_forward_to_end",
				'return-type' => NULL,
				'parameters' => NULL
			],
			
			'forward_to_line_end' => [
				'cpp-method' => "gtk_text_iter_forward_to_line_end",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			
			'forward_to_tag_toggle' => [
				'cpp-method' => "gtk_text_iter_forward_to_tag_toggle",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextTag",
						'name' => "tag"
					]
				]
			],
			
			'backward_to_tag_toggle' => [
				'cpp-method' => "gtk_text_iter_backward_to_tag_toggle",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextTag",
						'name' => "tag"
					]
				]
			],
			
			'iter_equal' => [
				'cpp-method' => "gtk_text_iter_equal",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "rhs"
					]
				]
			],
			
			'iter_compare' => [
				'cpp-method' => "gtk_text_iter_compare",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "rhs"
					]
				]
			],
			
			'in_range' => [
				'cpp-method' => "gtk_text_iter_in_range",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start"
					],
					[
						'type' => "GtkTextIter",
						'name' => "end"
					]
				]
			],
			
			'order' => [
				'cpp-method' => "gtk_text_iter_order",
				'return-type' => "gboolean",
				'parameters' => NULL
			],


		],
	];
