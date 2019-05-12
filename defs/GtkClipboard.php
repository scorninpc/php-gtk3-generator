<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkClipboard",
			'name'=>"GtkClipboard_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_CLIPBOARD"
		],
		

		'dependences' => [
			"GObject.h",
			"GdkSelection.h",
			"GdkPixbuf.h",
			"GtkTextBuffer.h",
		],


		'methods' => [


			'__construct' => [
				'cpp-method' => "gtk_clipboard_get",
				'return-type' => NULL,
				'parameters' =>  [
					[
						'type' => "enum GdkSelection",
						'name' => "selection",
					],
				]
			],

			'get_for_display' => [
				'cpp-method' => "gtk_clipboard_get_for_display",
				'return-type' => "GtkClipboard",
				'parameters' => [
					[
						'type' => "GdkDisplay",
						'name' => "display"
					],
					[
						'type' => "enum GdkSelection",
						'name' => "selection",
					],
				]
			],

			'get_display' => [
				'cpp-method' => "gtk_clipboard_get_display",
				'return-type' => "GdkDisplay",
				'parameters' => NULL
			],

			'set_with_data' => [
				'cpp-method' => "gtk_clipboard_set_with_data",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTargetEntry",
						'name' => "targets"
					],
					[
						'type' => "guint",
						'name' => "n_targets"
					]
				]
			],

			'set_with_owner' => [
				'cpp-method' => "gtk_clipboard_set_with_owner",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTargetEntry",
						'name' => "targets"
					],
					[
						'type' => "guint",
						'name' => "n_targets"
					]
				]
			],

			'get_owner' => [
				'cpp-method' => "gtk_clipboard_get_owner",
				'return-type' => "GObject",
				'parameters' => NULL
			],

			'clear' => [
				'cpp-method' => "gtk_clipboard_clear",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'set_text' => [
				'cpp-method' => "gtk_clipboard_set_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "text",
					],
					[
						'type' => "gint",
						'name' => "len",
					]
				]
			],

			'set_image' => [
				'cpp-method' => "gtk_clipboard_set_image",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkPixbuf",
						'name' => "pixbuf",
						'nocast_macro' => TRUE
					],
				]
			],

			'request_text' => [
				'cpp-method' => "gtk_clipboard_request_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "user_function"
					],
					[
						'type' => "gpointer",
						'name' => "user_data"
					],
				]
			],

			'request_image' => [
				'cpp-method' => "gtk_clipboard_request_image",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "user_function"
					],
					[
						'type' => "gpointer",
						'name' => "user_data"
					],
				]
			],

			'request_targets' => [
				'cpp-method' => "gtk_clipboard_request_targets",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "user_function"
					],
					[
						'type' => "gpointer",
						'name' => "user_data"
					],
				]
			],

			'rich_text' => [
				'cpp-method' => "gtk_clipboard_request_rich_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "user_function"
					],
					[
						'type' => "gpointer",
						'name' => "user_data"
					],
				]
			],

			'request_uris' => [
				'cpp-method' => "gtk_clipboard_request_uris",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "user_function"
					],
					[
						'type' => "gpointer",
						'name' => "user_data"
					],
				]
			],

			'wait_for_contents' => [
				'cpp-method' => "gtk_clipboard_wait_for_contents",
				'return-type' => "GtkSelectionData",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "target"
					],
				]
			],

			'wait_for_text' => [
				'cpp-method' => "gtk_clipboard_wait_for_text",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			'wait_for_image' => [
				'cpp-method' => "gtk_clipboard_wait_for_image",
				'return-type' => "GdkPixbuf",
				'parameters' => NULL
			],

			'wait_for_rich_text' => [
				'cpp-method' => "gtk_clipboard_wait_for_rich_text",
				'return-type' => "guint8",
				'parameters' => [
					[
						'type' => "GtkTextBuffer",
						'name' => "buffer",
						'cast_macro' => "GTK_TEXT_BUFFER"
					],
					[
						'type' => "gchar *",
						'name' => "target"
					],
				]
			],

			'wait_for_uris' => [
				'cpp-method' => "gtk_clipboard_wait_for_uris",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			'wait_is_text_available' => [
				'cpp-method' => "gtk_clipboard_wait_is_text_available",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'wait_is_image_available' => [
				'cpp-method' => "gtk_clipboard_wait_is_image_available",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'wait_is_image_available' => [
				'cpp-method' => "gtk_clipboard_wait_is_rich_text_available",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "GtkTextBuffer",
						'name' => "buffer",
						'cast_macro' => "GTK_TEXT_BUFFER"
					]
				]
			],

			'wait_is_uris_available' => [
				'cpp-method' => "gtk_clipboard_wait_is_uris_available",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'wait_is_target_available' => [
				'cpp-method' => "gtk_clipboard_wait_is_target_available",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "target"
					],
				]
			],

			'set_can_store' => [
				'cpp-method' => "gtk_clipboard_set_can_store",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTargetEntry",
						'name' => "targets"
					],
				]
			],

			'set_can_store' => [
				'cpp-method' => "gtk_clipboard_store",
				'return-type' => NULL,
				'parameters' => NULL
			],


			'get_selection' => [
				'cpp-method' => "gtk_clipboard_get_selection",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

		],
	];
