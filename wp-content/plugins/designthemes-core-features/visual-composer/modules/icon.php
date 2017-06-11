<?php add_action( 'vc_before_init', 'dt_sc_icon_vc_map' );
function dt_sc_icon_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Any Icon", 'kidsworld-core' ),
		"base" => "dt_sc_icon",
		"icon" => "dt_sc_icon",
		"category" => DT_VC_CATEGORY,
		"params" => array(
			// Icon Class
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Icon", 'kidsworld-core' ),
				"param_name" => "icon"
            ),
			
			# URL
      		array(
				'type' => 'vc_link',
				'heading' => esc_html__( 'URL (Link)', 'kidsworld-core' ),
				'param_name' => 'link',
				'description' => esc_html__( 'Add link to icon box', 'kidsworld-core' )
      		),
			
			// Additional Style
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Extra Styles", 'kidsworld-core' ),
				"param_name" => "styles"
			),                  
			
			# Class
      		array(
				"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'kidsworld-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','kidsworld-core')
      		),      		
		)
	) );
}?>