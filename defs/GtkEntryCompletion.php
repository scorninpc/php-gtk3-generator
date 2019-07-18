<?php

	return [

		'configs' => [
			'cpp-object' => "GtkEntryCompletion",
			'name' => "GtkEntryCompletion_",
			'extends' => "GObject_",
			'cast_macro' => "GTK_ENTRY_COMPLETION"
		],
		

		'dependences' => [
			"GObject.h",
			"GtkEntry.h",
			"GtkTreeModel.h",
		],


		'methods' => [
			
			//--------------
			'__construct' => [
				'cpp-method' => "gtk_entry_completion_new",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_with_area' => [
				'cpp-method' => "gtk_entry_completion_new_with_area",
				'static' => TRUE,
				'unimplemented' => TRUE,
				'deprecated' => "",
				'return-type' => "GtkEntryCompletion",
				'parameters' => NULL
			],

			//--------------
			'get_entry' => [
				'cpp-method' => "gtk_entry_completion_get_entry",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "GtkEntry",
				'parameters' => NULL
			],

			//--------------
			'set_model' => [
				'cpp-method' => "gtk_entry_completion_set_model",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkTreeModel",
						'name' => "model",
					],
				],
			],

			//--------------
			'get_model' => [
				'cpp-method' => "gtk_entry_completion_get_model",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "GtkTreeModel",
				'parameters' => NULL
			],

			//--------------
			'set_match_func' => [
				'cpp-method' => "gtk_entry_completion_set_match_func",
				'static' => FALSE,
				'unimplemented' => TRUE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkEntryCompletionMatchFunc",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "func_data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "func_notify",
					],
				],
			],

			//--------------
			'set_minimum_key_length' => [
				'cpp-method' => "gtk_entry_completion_set_minimum_key_length",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "length",
					],
				],
			],

			//--------------
			'get_minimum_key_length' => [
				'cpp-method' => "gtk_entry_completion_get_minimum_key_length",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'compute_prefix' => [
				'cpp-method' => "gtk_entry_completion_compute_prefix",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "key",
					],
				],
			],

			//--------------
			'complete' => [
				'cpp-method' => "gtk_entry_completion_complete",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_completion_prefix' => [
				'cpp-method' => "gtk_entry_completion_get_completion_prefix",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			//--------------
			'insert_prefix' => [
				'cpp-method' => "gtk_entry_completion_insert_prefix",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'insert_action_text' => [
				'cpp-method' => "gtk_entry_completion_insert_action_text",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "index_",
					],
					[
						'type' => "gchar *",
						'name' => "text",
					],
				],
			],

			//--------------
			'insert_action_markup' => [
				'cpp-method' => "gtk_entry_completion_insert_action_markup",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "index_",
					],
					[
						'type' => "gchar *",
						'name' => "markup",
					],
				],
			],

			//--------------
			'delete_action' => [
				'cpp-method' => "gtk_entry_completion_delete_action",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "index_",
					],
				],
			],

			//--------------
			'set_text_column' => [
				'cpp-method' => "gtk_entry_completion_set_text_column",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "column",
					],
				],
			],

			//--------------
			'get_text_column' => [
				'cpp-method' => "gtk_entry_completion_get_text_column",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_inline_completion' => [
				'cpp-method' => "gtk_entry_completion_set_inline_completion",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "inline_completion",
					],
				],
			],

			//--------------
			'get_inline_completion' => [
				'cpp-method' => "gtk_entry_completion_get_inline_completion",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_inline_selection' => [
				'cpp-method' => "gtk_entry_completion_set_inline_selection",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "inline_selection",
					],
				],
			],

			//--------------
			'get_inline_selection' => [
				'cpp-method' => "gtk_entry_completion_get_inline_selection",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_popup_completion' => [
				'cpp-method' => "gtk_entry_completion_set_popup_completion",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "popup_completion",
					],
				],
			],

			//--------------
			'get_popup_completion' => [
				'cpp-method' => "gtk_entry_completion_get_popup_completion",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_popup_set_width' => [
				'cpp-method' => "gtk_entry_completion_set_popup_set_width",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "popup_set_width",
					],
				],
			],

			//--------------
			'get_popup_set_width' => [
				'cpp-method' => "gtk_entry_completion_get_popup_set_width",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			//--------------
			'set_popup_single_match' => [
				'cpp-method' => "gtk_entry_completion_set_popup_single_match",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "popup_single_match",
					],
				],
			],

			//--------------
			'get_popup_single_match' => [
				'cpp-method' => "gtk_entry_completion_get_popup_single_match",
				'static' => FALSE,
				'unimplemented' => FALSE,
				'deprecated' => "",
				'return-type' => "gboolean",
				'parameters' => NULL
			],
		]



	];