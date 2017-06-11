<?php add_action( 'vc_before_init', 'dt_sc_separator_vc_map' );
function dt_sc_separator_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Separator", 'kidsworld-core' ),
		"base" => "dt_sc_separator",
		"icon" => "dt_sc_separator",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Style
			array(
				'type' => 'dropdown',
				'param_name' => 'style',
				'value' => array(
					esc_html__( 'Horizontal', 'kidsworld-core' ) => 'horizontal',
					esc_html__( 'Vertical', 'kidsworld-core' ) => 'vertical',
				),
      			'admin_label' => true,
				'heading' => esc_html__( 'Style', 'kidsworld-core' ),
				'description' => esc_html__( 'Select separator display style', 'kidsworld-core' )
			),

			// Horizontal Separator
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type', 'kidsworld-core'),
				'param_name' => 'horizontal_type',
				'value' => array( esc_html__('Small','kidsworld-core') => 'small',
					esc_html__('Single Line','kidsworld-core') => 'single-line',
					esc_html__('Single Line Dashed','kidsworld-core') => 'single-line-dashed',
					esc_html__('Double Border','kidsworld-core') => 'double-border',
					esc_html__('Diamond','kidsworld-core') => 'diamond',
					esc_html__('Single Line Dotted','kidsworld-core') => 'single-line-dotted'
				),
				'std' => 'small',
				'dependency' => array( 'element' => 'style', 'value' => 'horizontal' )				
			),

			// Vertical Separator
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type', 'kidsworld-core'),
				'param_name' => 'vertical_type',
				'value' => array( esc_html__('Normal','kidsworld-core') => '', esc_html__('Small','kidsworld-core') => 'small' ),
				'std' => 'small',
				'dependency' => array( 'element' => 'style', 'value' => 'vertical' )				
			),
			
			# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'kidsworld-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','kidsworld-core')
      		)
		)
	) );	
}?>