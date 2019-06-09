<?php

	return [

		'configs' => [
			'cpp-object' => "GtkFlowBoxChild",
			'name' => "GtkFlowBoxChild_",
			'extends' => "GtkBin_",
			'cast_macro' => "GTK_FLOW_BOX_CHILD"
		],
		

		'dependences' => [
			"GtkBin.h",
			"GtkWidget.h",
		],


		'methods' => [
			
			//--------------
			'__construct' => [
				'cpp-method' => "gtk_flow_box_child_new",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => NULL
			],

			//--------------
			'get_index' => [
				'cpp-method' => "gtk_flow_box_child_get_index",
				'static' => FALSE,
				'return-type' => "gint",
				'parameters' => [],
			],

			//--------------
			'is_selected' => [
				'cpp-method' => "gtk_flow_box_child_is_selected",
				'static' => FALSE,
				'return-type' => "gboolean",
				'parameters' => [],
			],

			//--------------
			'changed' => [
				'cpp-method' => "gtk_flow_box_child_changed",
				'static' => FALSE,
				'return-type' => NULL,
				'parameters' => [],
			],
		]



	];