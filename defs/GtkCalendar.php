<?php

	return [

		'configs' => [
			'cpp-object' => "GtkCalendar",
			'name' => "GtkCalendar_",
			'extends' => "GtkWidget_",
			'cast_macro' => "GTK_CALENDAR"
		],
		

		'dependences' => [
			"GtkWidget.h",
		],


		'methods' => [
			
			//--------------
			'__construct' => [
				'cpp-method' => "gtk_calendar_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'select_month' => [
				'cpp-method' => "gtk_calendar_select_month",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "month",
					],
					[
						'type' => "guint",
						'name' => "year",
					],
				],
			],

			//--------------
			'select_day' => [
				'cpp-method' => "gtk_calendar_select_day",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "day",
					],
				],
			],

			//--------------
			'mark_day' => [
				'cpp-method' => "gtk_calendar_mark_day",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "day",
					],
				],
			],

			//--------------
			'unmark_day' => [
				'cpp-method' => "gtk_calendar_unmark_day",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "day",
					],
				],
			],

			//--------------
			'get_day_is_marked' => [
				'cpp-method' => "gtk_calendar_get_day_is_marked",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [
					[
						'type' => "guint",
						'name' => "day",
					],
				],
			],

			//--------------
			'clear_marks' => [
				'cpp-method' => "gtk_calendar_clear_marks",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_display_options' => [
				'cpp-method' => "gtk_calendar_get_display_options",
				'static' => FALSE,
				'return-type' => "enum GtkCalendarDisplayOptions",
				'parameters' => NULL
			],

			//--------------
			'set_display_options' => [
				'cpp-method' => "gtk_calendar_set_display_options",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkCalendarDisplayOptions",
						'name' => "flags",
					],
				],
			],

			//--------------
			'get_date' => [
				'cpp-method' => "gtk_calendar_get_date",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "guint",
						'name' => "year",
					],
					[
						'type' => "guint",
						'name' => "month",
					],
					[
						'type' => "guint",
						'name' => "day",
					],
				],
			],

			//--------------
			'set_detail_func' => [
				'cpp-method' => "gtk_calendar_set_detail_func",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkCalendarDetailFunc",
						'name' => "func",
					],
					[
						'type' => "gpointer",
						'name' => "data",
					],
					[
						'type' => "GDestroyNotify",
						'name' => "destroy",
					],
				],
			],

			//--------------
			'get_detail_width_chars' => [
				'cpp-method' => "gtk_calendar_get_detail_width_chars",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_detail_width_chars' => [
				'cpp-method' => "gtk_calendar_set_detail_width_chars",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "chars",
					],
				],
			],

			//--------------
			'get_detail_height_rows' => [
				'cpp-method' => "gtk_calendar_get_detail_height_rows",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],

			//--------------
			'set_detail_height_rows' => [
				'cpp-method' => "gtk_calendar_set_detail_height_rows",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "rows",
					],
				],
			],
		]



	];