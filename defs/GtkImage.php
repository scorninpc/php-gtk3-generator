<?php

	return [

		'configs' => [
			'cpp-object' => "GtkImage",
			'name' => "GtkImage_",
			'extends' => "GtkMisc_",
			'cast_macro' => "GTK_IMAGE"
		],
		

		'dependences' => [
			"GtkMisc.h",
			"GtkWidget.h",
		],


		'methods' => [

			//--------------
			'__construct' => [
				'cpp-method' => "gtk_image_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'new_from_file' => [
				'cpp-method' => "gtk_image_new_from_file",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "filename",
					],
				]
			],

			//--------------
			'new_from_icon_set' => [
				'cpp-method' => "gtk_image_new_from_icon_set",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			// ------------
			'get_icon_set' => [
				'cpp-method' => "gtk_image_get_icon_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkIconSet",
						'name' => "icon_set",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'get_pixbuf' => [
				'cpp-method' => "gtk_image_get_pixbuf",
				'static' => FALSE,
				'return-type' => "GdkPixbuf",
				'parameters' => NULL
			],

			//--------------
			'get_stock' => [
				'cpp-method' => "gtk_image_get_stock",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "stock_id",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'get_animation' => [
				'cpp-method' => "gtk_image_get_animation",
				'static' => FALSE,
				'return-type' => "GdkPixbufAnimation",
				'parameters' => NULL
			],

			//--------------
			'get_icon_name' => [
				'cpp-method' => "gtk_image_get_icon_name",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "icon_name",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'get_gicon' => [
				'cpp-method' => "gtk_image_get_gicon",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GIcon",
						'name' => "gicon",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'get_storage_type' => [
				'cpp-method' => "gtk_image_get_storage_type",
				'static' => FALSE,
				'return-type' => "enum GtkImageType",
				'parameters' => NULL
			],

			

			//--------------
			'new_from_pixbuf' => [
				'cpp-method' => "gtk_image_new_from_pixbuf",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'new_from_stock' => [
				'cpp-method' => "gtk_image_new_from_stock",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'new_from_animation' => [
				'cpp-method' => "gtk_image_new_from_animation",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'new_from_icon_name' => [
				'cpp-method' => "gtk_image_new_from_icon_name",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'new_from_gicon' => [
				'cpp-method' => "gtk_image_new_from_gicon",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => [
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'new_from_resource' => [
				'cpp-method' => "gtk_image_new_from_resource",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'new_from_surface' => [
				'cpp-method' => "gtk_image_new_from_surface",
				'static' => FALSE,
				'return-type' => "GtkWidget",
				'parameters' => NULL
			],

			//--------------
			'set_from_file' => [
				'cpp-method' => "gtk_image_set_from_file",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "filename",
					],
				],
			],

			//--------------
			'set_from_icon_set' => [
				'cpp-method' => "gtk_image_set_from_icon_set",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GtkIconSet",
						'name' => "icon_set",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'set_from_pixbuf' => [
				'cpp-method' => "gtk_image_set_from_pixbuf",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkPixbuf",
						'name' => "pixbuf",
					],
				],
			],

			//--------------
			'set_from_stock' => [
				'cpp-method' => "gtk_image_set_from_stock",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "stock_id",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'set_from_animation' => [
				'cpp-method' => "gtk_image_set_from_animation",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GdkPixbufAnimation",
						'name' => "animation",
					],
				],
			],

			//--------------
			'set_from_icon_name' => [
				'cpp-method' => "gtk_image_set_from_icon_name",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "icon_name",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'set_from_gicon' => [
				'cpp-method' => "gtk_image_set_from_gicon",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "GIcon",
						'name' => "icon",
					],
					[
						'type' => "enum GtkIconSize",
						'name' => "size",
					],
				],
			],

			//--------------
			'set_from_resource' => [
				'cpp-method' => "gtk_image_set_from_resource",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gchar *",
						'name' => "resource_path",
					],
				],
			],

			//--------------
			'set_from_surface' => [
				'cpp-method' => "gtk_image_set_from_surface",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "cairo_surface_t",
						'name' => "surface",
					],
				],
			],

			//--------------
			'clear' => [
				'cpp-method' => "gtk_image_clear",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'set_pixel_size' => [
				'cpp-method' => "gtk_image_set_pixel_size",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [
					[
						'type' => "gint",
						'name' => "pixel_size",
					],
				],
			],

			//--------------
			'get_pixel_size' => [
				'cpp-method' => "gtk_image_get_pixel_size",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => NULL
			],
		]



	];