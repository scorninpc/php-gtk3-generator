<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextView",
			'name'=>"GtkTextView_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_TEXT_VIEW"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkTextBuffer.h",
			"GtkTextMark.h",
			"GtkTextIter.h",
			"GtkInputPurpose.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_text_view_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			// RETURN line_top
			'new_with_buffer' => [
				'cpp-method' => "gtk_text_view_new_with_buffer",
				'return-type' => NULL,
				'parameters' => [
					[
						'type'=> "GtkTextBuffer",
						'name' => "buffer",
						'cast_macro' => "GTK_TEXT_BUFFER"
					]
				]
			],

			'set_buffer' => [
				'cpp-method' => "gtk_text_view_set_buffer",
				'return-type' => NULL,
				'parameters' => [
					[
						'type'=> "GtkTextBuffer",
						'name' => "buffer",
						'cast_macro' => "GTK_TEXT_BUFFER"
					]
				]
			],

			'get_buffer' => [
				'cpp-method' => "gtk_text_view_get_buffer",
				'return-type' => "GtkTextBuffer",
				'parameters' => NULL,
						'cast_macro' => "GTK_TEXT_BUFFER"
			],

			'scroll_to_mark' => [
				'cpp-method' => "gtk_text_view_scroll_to_mark",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					],
					[
						'type' => "gdouble",
						'name' => "within_margin"
					],
					[
						'type' => "gboolean",
						'name' => "use_align"
					],
					[
						'type' => "gdouble",
						'name' => "xalign"
					],
					[
						'type' => "gdouble",
						'name' => "yalign"
					]
				]
			],

			'scroll_to_iter' => [
				'cpp-method' => "gtk_text_view_scroll_to_iter",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'cast_macro' => ""
					],
					[
						'type' => "gdouble",
						'name' => "within_margin"
					],
					[
						'type' => "gboolean",
						'name' => "use_align"
					],
					[
						'type' => "gdouble",
						'name' => "xalign"
					],
					[
						'type' => "gdouble",
						'name' => "yalign"
					]
				]
			],

			'scroll_mark_onscreen' => [
				'cpp-method' => "gtk_text_view_scroll_mark_onscreen",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					]
				]
			],

			'move_mark_onscreen' => [
				'cpp-method' => "gtk_text_view_move_mark_onscreen",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					]
				]
			],

			'place_cursor_onscreen' => [
				'cpp-method' => "gtk_text_view_place_cursor_onscreen",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_line_at_y' => [
				'cpp-method' => "gtk_text_view_get_line_at_y",
				'return-type' => "gint",
				'ignore-cpp-return' => TRUE,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "target_iter",
						'cast_macro' => ""
					],
					[
						'type' => "gint",
						'name' => "y"
					],
					[
						'type' => "gint",
						'name' => "line_top",
						'return' => TRUE
					],
				]
			],

			'get_line_yrange' => [
				'cpp-method' => "gtk_text_view_get_line_yrange",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "target_iter",
						'cast_macro' => ""
					],
					[
						'type' => "gint",
						'name' => "y"
					],
					[
						'type' => "gint",
						'name' => "height",
						'return' => TRUE
					],
				]
			],

			'get_iter_at_location' => [
				'cpp-method' => "gtk_text_view_get_iter_at_location",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "target_iter",
						'cast_macro' => ""
					],
					[
						'type' => "gint",
						'name' => "x"
					],
					[
						'type' => "gint",
						'name' => "y",
					],
				]
			],

			'get_iter_at_position' => [
				'cpp-method' => "gtk_text_view_get_iter_at_position",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "target_iter",
						'cast_macro' => ""
					],
					[
						'type' => "gint",
						'name' => "trailing"
					],
					[
						'type' => "gint",
						'name' => "x"
					],
					[
						'type' => "gint",
						'name' => "y",
					],
				]
			],

			'buffer_to_window_coords' => [
				'cpp-method' => "gtk_text_view_buffer_to_window_coords",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "win"
					],
					[
						'type' => "gint",
						'name' => "buffer_x"
					],
					[
						'type' => "gint",
						'name' => "buffer_y"
					],
					[
						'type' => "gint",
						'name' => "window_x",
					],
					[
						'type' => "gint",
						'name' => "window_y",
					],
				]
			],

			'window_to_buffer_coords' => [
				'cpp-method' => "gtk_text_view_window_to_buffer_coords",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "win"
					],
					[
						'type' => "gint",
						'name' => "window_x",
					],
					[
						'type' => "gint",
						'name' => "window_y",
					],
					[
						'type' => "gint",
						'name' => "buffer_x"
					],
					[
						'type' => "gint",
						'name' => "buffer_y"
					],
					
				]
			],

			'get_window' => [
				'cpp-method' => "gtk_text_view_get_window",
				'return-type' => "GdkWindow",
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "win"
					]
					
				]
			],

			'get_window_type' => [
				'cpp-method' => "gtk_text_view_get_window_type",
				'return-type' => "enum GtkTextWindowType",
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "win"
					]
					
				]
			],

			'set_border_window_size' => [
				'cpp-method' => "gtk_text_view_set_border_window_size",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "type"
					],
					[
						'type' => "gint",
						'name' => "size"
					],
					
				]
			],

			'get_border_window_size' => [
				'cpp-method' => "gtk_text_view_get_border_window_size",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "enum GtkTextWindowType",
						'name' => "type"
					],
				]
			],

			'forward_display_line' => [
				'cpp-method' => "gtk_text_view_forward_display_line",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "type",
						'cast_macro' => ""
					],
				]
			],

			'backward_display_line' => [
				'cpp-method' => "gtk_text_view_backward_display_line",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "type",
						'cast_macro' => ""
					],
				]
			],

			'forward_display_line_end' => [
				'cpp-method' => "gtk_text_view_forward_display_line_end",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "type",
						'cast_macro' => ""
					],
				]
			],

			'backward_display_line_start' => [
				'cpp-method' => "gtk_text_view_backward_display_line_start",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "type",
						'cast_macro' => ""
					],
				]
			],

			'starts_display_line' => [
				'cpp-method' => "gtk_text_view_starts_display_line",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "type",
						'cast_macro' => ""
					],
				]
			],

			'move_visually' => [
				'cpp-method' => "gtk_text_view_move_visually",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "type",
						'cast_macro' => ""
					],
					[
						'type' => "gint",
						'name' => "count"
					],
				]
			],

			'add_child_in_window' => [
				'cpp-method' => "gtk_text_view_add_child_in_window",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
						'cast_macro' => "GTK_WIDGET"
					],
					[
						'type' => "enum GtkTextWindowType",
						'name' => "which_window"
					],
					[
						'type' => "gint",
						'name' => "xpos"
					],
					[
						'type' => "gint",
						'name' => "ypos"
					],
				]
			],

			'move_child' => [
				'cpp-method' => "gtk_text_view_move_child",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
						'cast_macro' => "GTK_WIDGET"
					],
					[
						'type' => "gint",
						'name' => "xpos"
					],
					[
						'type' => "gint",
						'name' => "ypos"
					],
				]
			],

			'set_wrap_mode' => [
				'cpp-method' => "gtk_text_view_set_wrap_mode",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkWrapMode",
						'name' => "wrap_mode",
					],
				]
			],

			'get_wrap_mode' => [
				'cpp-method' => "gtk_text_view_get_wrap_mode",
				'return-type' => "enum GtkWrapMode",
				'parameters' => NULL
			],

			'set_editable' => [
				'cpp-method' => "gtk_text_view_set_editable",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				]
			],

			'get_editable' => [
				'cpp-method' => "gtk_text_view_get_editable",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_cursor_visible' => [
				'cpp-method' => "gtk_text_view_set_cursor_visible",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				]
			],

			'get_cursor_visible' => [
				'cpp-method' => "gtk_text_view_get_cursor_visible",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'overwrite' => [
				'cpp-method' => "gtk_text_view_set_overwrite",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting",
					],
				]
			],

			'get_overwrite' => [
				'cpp-method' => "gtk_text_view_get_overwrite",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_pixels_above_lines' => [
				'cpp-method' => "gtk_text_view_set_pixels_above_lines",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pixels_above_lines",
					],
				]
			],

			'get_pixels_above_lines' => [
				'cpp-method' => "gtk_text_view_get_pixels_above_lines",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'set_pixels_below_lines' => [
				'cpp-method' => "gtk_text_view_set_pixels_below_lines",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pixels_below_lines",
					],
				]
			],

			'get_pixels_below_lines' => [
				'cpp-method' => "gtk_text_view_get_pixels_below_lines",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'set_pixels_inside_wrap' => [
				'cpp-method' => "gtk_text_view_set_pixels_inside_wrap",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pixels_inside_wrap",
					],
				]
			],

			'get_pixels_inside_wrap' => [
				'cpp-method' => "gtk_text_view_get_pixels_inside_wrap",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'set_justification' => [
				'cpp-method' => "gtk_justification",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkJustification",
						'name' => "justification",
					],
				]
			],

			'get_justification' => [
				'cpp-method' => "gtk_justification",
				'return-type' => "enum GtkJustification",
				'parameters' => NULL
			],

			'set_left_margin' => [
				'cpp-method' => "gtk_text_view_set_left_margin",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "left_margin",
					],
				]
			],

			'get_left_margin' => [
				'cpp-method' => "gtk_text_view_get_left_margin",
				'return-type' => "gint",
				'parameters' => NULL
			],
			
			'set_right_margin' => [
				'cpp-method' => "gtk_text_view_set_right_margin",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "right_margin",
					],
				]
			],

			'get_right_margin' => [
				'cpp-method' => "gtk_text_view_get_right_margin",
				'return-type' => "gint",
				'parameters' => NULL
			],
			
			'set_top_margin' => [
				'cpp-method' => "gtk_text_view_set_top_margin",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "top_margin",
					],
				]
			],

			'get_top_margin' => [
				'cpp-method' => "gtk_text_view_get_top_margin",
				'return-type' => "gint",
				'parameters' => NULL
			],
			
			'set_bottom_margin' => [
				'cpp-method' => "gtk_text_view_set_bottom_margin",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "bottom_margin",
					],
				]
			],

			'get_bottom_margin' => [
				'cpp-method' => "gtk_text_view_get_bottom_margin",
				'return-type' => "gint",
				'parameters' => NULL
			],
			
			'set_indent' => [
				'cpp-method' => "gtk_text_view_set_indent",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "indent",
					],
				]
			],

			'get_indent' => [
				'cpp-method' => "gtk_text_view_get_indent",
				'return-type' => "gint",
				'parameters' => NULL
			],



			'set_accepts_tab' => [
				'cpp-method' => "gtk_text_view_set_accepts_tab",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "accepts_tab",
					],
				]
			],

			'get_accepts_tab' => [
				'cpp-method' => "gtk_text_view_get_accepts_tab",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'im_context_filter_keypress' => [
				'cpp-method' => "gtk_text_view_im_context_filter_keypress",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GdkEventKey",
						'name' => "event"
					]
				]
			],

			'reset_im_context' => [
				'cpp-method' => "gtk_text_view_reset_im_context",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'set_input_purpose' => [
				'cpp-method' => "gtk_text_view_set_input_purpose",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkInputPurpose",
						'name' => "purpose"
					]
				]
			],

			'get_input_purpose' => [
				'cpp-method' => "gtk_text_view_get_input_purpose",
				'return-type' => "enum GtkInputPurpose",
				'parameters' => NULL
			],

			'set_input_hints' => [
				'cpp-method' => "gtk_text_view_set_input_hints",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkInputHints",
						'name' => "hints"
					]
				]
			],

			'get_input_hints' => [
				'cpp-method' => "gtk_text_view_get_input_hints",
				'return-type' => "enum GtkInputHints",
				'parameters' => NULL
			],

			'set_monospace' => [
				'cpp-method' => "gtk_text_view_set_monospace",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "monospace"
					]
				]
			],

			'get_monospace' => [
				'cpp-method' => "gtk_text_view_get_monospace",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
			


		],
	];
