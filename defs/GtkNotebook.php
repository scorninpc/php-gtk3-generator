<?php

	return [
		
		'configs' => [
			'cpp-object' => "GtkNotebook",
			'name'=>"GtkNotebook_",
			'extends'=>"GtkContainer_",
			'cast_macro' => "GTK_NOTEBOOK"
		],
		

		'dependences' => [
			"GtkContainer.h"
		],


		'methods' => [

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-new
			'__construct' => [
				'cpp-method' => "gtk_notebook_new",
				'return-type' => NULL,
				'parameters' => NULL
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-append-page
			'append_page' => [
				'cpp-method' => "gtk_notebook_append_page",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "GtkWidget",
						'name' => "tab_label",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-insert-page
			'insert_page' => [
				'cpp-method' => "gtk_notebook_insert_page",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "GtkWidget",
						'name' => "tab_label",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-remove-page
			'remove_page' => [
				'cpp-method' => "gtk_notebook_remove_page",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-detach-tab
			'detach_tab' => [
				'cpp-method' => "gtk_notebook_detach_tab",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-page-num
			'page_num' => [
				'cpp-method' => "gtk_notebook_page_num",
				'return-type' => "gint",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-next-page
			'next_page' => [
				'cpp-method' => "gtk_notebook_next_page",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-prev-page
			'prev_page' => [
				'cpp-method' => "gtk_notebook_prev_page",
				'return-type' => NULL,
				'parameters' => NULL,
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-reorder-child
			'reorder_child' => [
				'cpp-method' => "gtk_notebook_reorder_child",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gint",
						'name' => "position",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-set-tab-pos
			'set_tab_pos' => [
				'cpp-method' => "gtk_notebook_set_tab_pos",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "enum GtkPositionType",
						'name' => "pos",
					],
				],
			],

			// https://developer.gnome.org/gtk3/stable/GtkNotebook.html#gtk-notebook-set-tab-pos
			'set_show_tabs' => [
				'cpp-method' => "gtk_notebook_set_show_tabs",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_tabs",
					],
				],
			],

			'set_show_border' => [
				'cpp-method' => "gtk_notebook_set_show_border",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "show_border",
					],
				],
			],

			'set_scrollable' => [
				'cpp-method' => "gtk_notebook_set_scrollable",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gboolean",
						'name' => "scrollable",
					],
				],
			],

			'popup_enable' => [
				'cpp-method' => "gtk_notebook_popup_enable",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'popup_disable' => [
				'cpp-method' => "gtk_notebook_popup_disable",
				'return-type' => NULL,
				'parameters' => NULL
			],

			'get_current_page' => [
				'cpp-method' => "gtk_notebook_get_current_page",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_menu_label' => [
				'cpp-method' => "gtk_notebook_get_menu_label",
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				]
			],

			'get_nth_page' => [
				'cpp-method' => "gtk_notebook_get_nth_page",
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gint",
						'name' => "page_num",
					]
				]
			],

			'get_n_pages' => [
				'cpp-method' => "gtk_notebook_get_n_pages",
				'return-type' => "gint",
				'parameters' => NULL
			],

			'get_tab_label' => [
				'cpp-method' => "gtk_notebook_get_tab_label",
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				]
			],

			'set_menu_label' => [
				'cpp-method' => "gtk_notebook_set_menu_label",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "GtkWidget",
						'name' => "menu_label",
					]
				]
			],

			'set_menu_label_text' => [
				'cpp-method' => "gtk_notebook_set_menu_label_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "menu_text",
					]
				]
			],

			'set_tab_label' => [
				'cpp-method' => "gtk_notebook_set_tab_label",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "GtkWidget",
						'name' => "tab_label",
					],
				],
			],

			'set_tab_label_text' => [
				'cpp-method' => "gtk_notebook_set_tab_label_text",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gchar *",
						'name' => "tab_text",
					],
				],
			],

			'set_tab_reorderable' => [
				'cpp-method' => "gtk_notebook_set_tab_reorderable",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gboolean",
						'name' => "reorderable",
					],
				],
			],

			'set_tab_detachable' => [
				'cpp-method' => "gtk_notebook_set_tab_detachable",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "gboolean",
						'name' => "detachable",
					],
				],
			],

			'get_menu_label_text' => [
				'cpp-method' => "gtk_notebook_get_menu_label_text",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				],
			],

			'get_scrollable' => [
				'cpp-method' => "gtk_notebook_get_scrollable",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_show_border' => [
				'cpp-method' => "gtk_notebook_get_show_border",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_show_tabs' => [
				'cpp-method' => "gtk_notebook_get_show_tabs",
				'return-type' => "gboolean",
				'parameters' => NULL
			],

			'get_tab_label_text' => [
				'cpp-method' => "gtk_notebook_get_tab_label_text",
				'return-type' => "gchar *",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				],
			],

			'get_tab_pos' => [
				'cpp-method' => "gtk_notebook_get_tab_pos",
				'return-type' => "enum GtkPositionType",
				'parameters' => NULL,
			],

			'get_tab_reorderable' => [
				'cpp-method' => "gtk_notebook_get_tab_reorderable",
				'return-type' => "boolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				],
			],

			'get_tab_detachable' => [
				'cpp-method' => "gtk_notebook_get_tab_detachable",
				'return-type' => "boolean",
				'parameters' => [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				],
			],

			'set_current_page' => [
				'cpp-method' => "gtk_notebook_set_current_page",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "page_num",
					]
				],
			],

			'set_group_name' => [
				'cpp-method' => "gtk_notebook_set_group_name",
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "group_name",
					]
				],
			],

			'get_group_name' => [
				'cpp-method' => "gtk_notebook_get_group_name",
				'return-type' => "gchar *",
				'parameters' => NULL
			],

			'set_action_widget' => [
				'cpp-method' => "gtk_notebook_set_action_widget",
				'return-type' => NULL,
				'parameters' =>  [
					[
						'type' => "GtkWidget",
						'name' => "child",
					],
					[
						'type' => "enum GtkPackType",
						'name' => "pack_type",
					]
				],
			],

			'get_action_widget' => [
				'cpp-method' => "gtk_notebook_get_action_widget",
				'return-type' => "GtkWidget",
				'parameters' =>  [
					[
						'type' => "GtkWidget",
						'name' => "child",
					]
				],
			],
		],
	];
