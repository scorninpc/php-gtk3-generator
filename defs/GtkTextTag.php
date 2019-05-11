<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkTextTag",
			'name'=>"GtkTextTag_",
			'extends'=>"GObject_",
			'cast_macro' => "GTK_TEXT_ITER"
		],
		

		'dependences' => [
			"GObject.h",
			"GdkEvent.h",
			"GtkTextIter.h"
		],


		'methods' => [

			'__construct' => [
				'cpp-method' => "gtk_text_tag_new",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => 'gchar *',
						'name' => "name"
					]
				]
			],

			'get_priority' => [
				'cpp-method' => "gtk_text_tag_get_priority",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'set_priority' => [
				'cpp-method' => "gtk_text_tag_set_priority",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => 'gint',
						'name' => "priority"
					]
				]
			],

			'event' => [
				'cpp-method' => "gtk_text_tag_event",
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => 'GObject',
						'name' => "event_object"
					],
					[
						'type' => 'GdkEvent',
						'name' => "event"
					],
					[
						'type' => 'GtkTextIter',
						'name' => "iter"
					]
				]
			],

			'tag_changed' => [
				'cpp-method' => "gtk_text_tag_changed",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => 'gboolean',
						'name' => "size_changed"
					]
				]
			],
		],
	];
