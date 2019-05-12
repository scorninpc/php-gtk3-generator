<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextBuffer",
			'name'=>"GtkTextBuffer_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_TEXT_BUFFER"
		],
		

		'dependences' => [
			"GtkContainer.h",
			"GtkTextIter.h",
			"GtkTextTag.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_text_buffer_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'get_line_count' => [
				'cpp-method' => "gtk_text_buffer_get_line_count",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_char_count' => [
				'cpp-method' => "gtk_text_buffer_get_char_count",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_tag_table' => [
				'cpp-method' => "gtk_text_buffer_get_tag_table",
				'return-type' => "GtkTextTagTable",
				'parameters' => NULL
			],

			'insert' => [
				'cpp-method' => "gtk_text_buffer_insert",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
					[
						'type' => "gint",
						'name' => "len",
					],
				]
			],

			'insert_at_cursor' => [
				'cpp-method' => "gtk_text_buffer_insert_at_cursor",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
					[
						'type' => "gint",
						'name' => "len",
					],
				]
			],

			'insert_interactive' => [
				'cpp-method' => "gtk_text_buffer_insert_interactive",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
					[
						'type' => "gint",
						'name' => "len",
					],
					[
						'type' => "gboolean",
						'name' => "default_editable",
					],
				]
			],

			'insert_interactive_at_cursor' => [
				'cpp-method' => "gtk_text_buffer_insert_interactive_at_cursor",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
					[
						'type' => "gint",
						'name' => "len",
					],
					[
						'type' => "gboolean",
						'name' => "default_editable",
					],
				]
			],

			'insert_range' => [
				'cpp-method' => "gtk_text_buffer_insert_range",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					],
				]
			],

			'insert_range_interactive' => [
				'cpp-method' => "gtk_text_buffer_insert_range_interactive",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "default_editable"
					],
				]
			],

			'insert_with_tags' => [
				'cpp-method' => "gtk_text_buffer_insert_with_tags",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gchar *",
						'name' => "text"
					],
					[
						'type' => "gint",
						'name' => "len",
					],
					[
						'type' => "GtkTextTag",
						'name' => "first_tag",
						'cast_macro' => ""
					],
				]
			],

			'insert_with_tags_by_name' => [
				'cpp-method' => "gtk_text_buffer_insert_with_tags_by_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gchar *",
						'name' => "text"
					],
					[
						'type' => "gint",
						'name' => "len",
					],
					[
						'type' => "gchar",
						'name' => "first_tag_name"
					],
				]
			],

			'insert_markup' => [
				'cpp-method' => "gtk_text_buffer_insert_markup",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gchar *",
						'name' => "markup"
					],
					[
						'type' => "gint",
						'name' => "len",
					]
				]
			],

			'delete' => [
				'cpp-method' => "gtk_text_buffer_delete",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					],
				]
			],

			'delete_interactive' => [
				'cpp-method' => "gtk_text_buffer_delete_interactive",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "default_editable"
					],
				]
			],

			'backspace' => [
				'cpp-method' => "gtk_text_buffer_backspace",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "interactive"
					],
					[
						'type' => "gboolean",
						'name' => "default_editable"
					],
				]
			],

			'set_text' => [
				'cpp-method' => "gtk_text_buffer_set_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text"
					],
					[
						'type' => "gint",
						'name' => "len"
					],
				]
			],

			'get_text' => [
				'cpp-method' => "gtk_text_buffer_get_text",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "include_hidden_chars"
					],
				]
			],

			'get_slice' => [
				'cpp-method' => "gtk_text_buffer_get_slice",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "include_hidden_chars"
					],
				]
			],

			'insert_pixbuf' => [
				'cpp-method' => "gtk_text_buffer_insert_pixbuf",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GdkPixbuf",
						'name' => "pixbuf",
						'cast_macro' => ""
					],
				]
			],

			'create_mark' => [
				'cpp-method' => "gtk_text_buffer_create_mark",
				'return-type' => "GtkTextMark",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "mark_name"
					],
					[
						'type' => "GtkTextIter",
						'name' => "where",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "left_gravity"
					],
				]
			],

			'move_mark' => [
				'cpp-method' => "gtk_text_buffer_move_mark",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					],
					[
						'type' => "GtkTextIter",
						'name' => "where",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "left_gravity"
					],
				]
			],

			'move_mark_by_name' => [
				'cpp-method' => "gtk_text_buffer_move_mark_by_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name",
					],
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					]
				]
			],

			'add_mark' => [
				'cpp-method' => "gtk_text_buffer_add_mark",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					],
					[
						'type' => "GtkTextIter",
						'name' => "where",
						'nocast_macro' => TRUE
					],
				]
			],

			'delete_mark' => [
				'cpp-method' => "gtk_text_buffer_delete_mark",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					]
				]
			],

			'delete_mark_by_name' => [
				'cpp-method' => "gtk_text_buffer_delete_mark_by_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name"
					]
				]
			],

			'get_mark' => [
				'cpp-method' => "gtk_text_buffer_get_mark",
				'return-type' => "GtkTextMark",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name"
					]
				]
			],

			'get_insert' => [
				'cpp-method' => "gtk_text_buffer_get_insert",
				'return-type' => "GtkTextMark",
				'parameters' => MULL
			],

			'get_selection_bound' => [
				'cpp-method' => "gtk_text_buffer_get_selection_bound",
				'return-type' => "GtkTextMark",
				'parameters' => MULL
			],

			'get_has_selection' => [
				'cpp-method' => "gtk_text_buffer_get_has_selection",
				'return-type' => "gboolean",
				'parameters' => MULL
			],

			'place_cursor' => [
				'cpp-method' => "gtk_text_buffer_place_cursor",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "where",
						'nocast_macro' => TRUE
					]
				]
			],

			'select_range' => [
				'cpp-method' => "gtk_text_buffer_select_range",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "ins",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "bound",
						'nocast_macro' => TRUE
					]
				]
			],

			'apply_tag' => [
				'cpp-method' => "gtk_text_buffer_apply_tag",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextTag",
						'name' => "tag",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'remove_tag' => [
				'cpp-method' => "gtk_text_buffer_remove_tag",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextTag",
						'name' => "tag",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'apply_tag_by_name' => [
				'cpp-method' => "gtk_text_buffer_apply_tag_by_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name"
					],
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'remove_tag_by_name' => [
				'cpp-method' => "gtk_text_buffer_remove_tag_by_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "name"
					],
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'remove_all_tags' => [
				'cpp-method' => "gtk_text_buffer_remove_all_tags",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'create_tag' => [
				'cpp-method' => "gtk_text_buffer_create_tag",
				'return-type' => "GtkTextTag",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "tag_name"
					],
					[
						'type' => "gchar *",
						'name' => "first_property_name"
					]
				]
			],

			'get_iter_at_line_offset' => [
				'cpp-method' => "gtk_text_buffer_get_iter_at_line_offset",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gint",
						'name' => "line_number"
					],
					[
						'type' => "gint",
						'name' => "char_offset"
					]
				]
			],

			'get_iter_at_offset' => [
				'cpp-method' => "gtk_text_buffer_get_iter_at_offset",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gint",
						'name' => "char_offset"
					]
				]
			],

			'get_iter_at_line' => [
				'cpp-method' => "gtk_text_buffer_get_iter_at_line",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gint",
						'name' => "line_number"
					]
				]
			],

			'get_iter_at_line_index' => [
				'cpp-method' => "gtk_text_buffer_get_iter_at_line_index",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gint",
						'name' => "line_number"
					],
					[
						'type' => "gint",
						'name' => "byte_index"
					]
				]
			],

			'get_iter_at_mark' => [
				'cpp-method' => "gtk_text_buffer_get_iter_at_mark",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextMark",
						'name' => "mark",
						'cast_macro' => "GTK_TEXT_MARK"
					]
				]
			],

			'get_start_iter' => [
				'cpp-method' => "gtk_text_buffer_get_start_iter",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					]
				]
			],

			'get_end_iter' => [
				'cpp-method' => "gtk_text_buffer_get_end_iter",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "iter",
						'nocast_macro' => TRUE
					]
				]
			],

			'get_bounds' => [
				'cpp-method' => "gtk_text_buffer_get_bounds",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'get_modified' => [
				'cpp-method' => "gtk_text_buffer_get_modified",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'set_modified' => [
				'cpp-method' => "gtk_text_buffer_set_modified",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "setting"
					]
				]
			],

			'delete_selection' => [
				'cpp-method' => "gtk_text_buffer_delete_selection",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "interactive"
					],
					[
						'type' => "gboolean",
						'name' => "default_editable"
					]
				]
			],

			'paste_clipboard' => [
				'cpp-method' => "gtk_text_buffer_paste_clipboard",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					],
					[
						'type' => "GtkTextIter",
						'name' => "override_location",
						'nocast_macro' => TRUE
					],
					[
						'type' => "gboolean",
						'name' => "default_editable"
					]
				]
			],

			'copy_clipboard' => [
				'cpp-method' => "gtk_text_buffer_copy_clipboard",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'cut_clipboard' => [
				'cpp-method' => "gtk_text_buffer_cut_clipboard",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					],
					[
						'type' => "gboolean",
						'name' => "default_editable"
					]
				]
			],

			'get_selection_bounds' => [
				'cpp-method' => "gtk_text_buffer_get_selection_bounds",
				'return-type' => "GtkTextIter",
				'parameters' => [
					[
						'type' => "GtkTextIter",
						'name' => "start",
						'nocast_macro' => TRUE
					],
					[
						'type' => "GtkTextIter",
						'name' => "end",
						'nocast_macro' => TRUE
					]
				]
			],

			'begin_user_action' => [
				'cpp-method' => "gtk_text_buffer_begin_user_action",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'end_user_action' => [
				'cpp-method' => "gtk_text_buffer_end_user_action",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'remove_selection_clipboard' => [
				'cpp-method' => "gtk_text_buffer_remove_selection_clipboard",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'deserialize' => [
				'cpp-method' => "gtk_text_buffer_deserialize",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'deserialize_get_can_create_tags' => [
				'cpp-method' => "gtk_text_buffer_deserialize_get_can_create_tags",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'deserialize_set_can_create_tags' => [
				'cpp-method' => "gtk_text_buffer_deserialize_set_can_create_tags",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'get_copy_target_list' => [
				'cpp-method' => "gtk_text_buffer_get_copy_target_list",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'get_deserialize_formats' => [
				'cpp-method' => "gtk_text_buffer_get_deserialize_formats",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'get_paste_target_list' => [
				'cpp-method' => "gtk_text_buffer_get_paste_target_list",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'get_serialize_formats' => [
				'cpp-method' => "gtk_text_buffer_get_serialize_formats",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'register_deserialize_format' => [
				'cpp-method' => "gtk_text_buffer_register_deserialize_format",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'register_serialize_format' => [
				'cpp-method' => "gtk_text_buffer_register_serialize_format",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'register_serialize_tagset' => [
				'cpp-method' => "gtk_text_buffer_register_serialize_tagset",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'serialize' => [
				'cpp-method' => "gtk_text_buffer_serialize",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'unregister_deserialize_format' => [
				'cpp-method' => "gtk_text_buffer_unregister_deserialize_format",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],

			'unregister_serialize_format' => [
				'cpp-method' => "gtk_text_buffer_unregister_serialize_format",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkClipboard",
						'name' => "clipboard",
						'cast_macro' => "GTK_CLIPBOARD"
					]
				]
			],



		],
	];
