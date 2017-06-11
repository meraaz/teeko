<?php add_action( 'vc_before_init', 'dt_sc_team_vc_map' );
function dt_sc_team_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Team", 'kidsworld-core' ),
		"base" => "dt_sc_team",
		"icon" => "dt_sc_team",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Name
			array(
				'type' => 'textfield',
				'param_name' => 'name',
				'heading' => esc_html__( 'Name', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter name', 'kidsworld-core' )
			),

			# Role
			array(
				'type' => 'textfield',
				'param_name' => 'role',
				'heading' => esc_html__( 'Role', 'kidsworld-core' ),
				'description' => esc_html__( 'Enter role', 'kidsworld-core' )
			),

			# Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','kidsworld-core'),
                'param_name' => 'image'
            ),

            # Team style
            array(
				'type' => 'dropdown',
				'heading' => esc_html__('Team Style','kidsworld-core'),
            	'param_name' => 'teamstyle',
            	'value' => array(
            		esc_html__('Default','kidsworld-core') => '',
					esc_html__('Social on hover','kidsworld-core') => 'hide-social-show-on-hover',
					esc_html__('Social and Role on hover','kidsworld-core') => 'hide-social-role-show-on-hover',
					esc_html__('Details on hover','kidsworld-core') => 'hide-details-show-on-hover',
					esc_html__('Show details & Social on hover','kidsworld-core') => 'hide-social-show-on-hover details-on-image',
					esc_html__('Horizontal','kidsworld-core') => 'type2',
					esc_html__('Rounded','kidsworld-core') => 'hide-social-show-on-hover rounded'
            	)
            ),

            # Social Icon Style
            array(
				'type' => 'dropdown',
				'heading' => esc_html__('Social Icon Style','kidsworld-core'),
            	'param_name' => 'socialstyle',
            	'value' => array(
            		esc_html__('Default','kidsworld-core') => '' ,
            		esc_html__('Rounded Border','kidsworld-core') => 'rounded-border' ,
            		esc_html__('Rounded Square','kidsworld-core') => 'rounded-square' ,
            		esc_html__('Square Border','kidsworld-core') => 'square-border' ,
            		esc_html__('Diamond Square Border','kidsworld-core') => 'diamond-square-border' ,
            		esc_html__('Hexagon Border','kidsworld-core') => 'hexagon-border'
            	)
            ),

            # Facebook
			array(
				'type' => 'textfield',
				'param_name' => 'facebook',
				'heading' => esc_html__( 'Facebook', 'kidsworld-core' ),
			),

            # Twitter
			array(
				'type' => 'textfield',
				'param_name' => 'twitter',
				'heading' => esc_html__( 'Twitter', 'kidsworld-core' ),
			),

            # Google
			array(
				'type' => 'textfield',
				'param_name' => 'google',
				'heading' => esc_html__( 'Google', 'kidsworld-core' ),
			),

            # Linkedin
			array(
				'type' => 'textfield',
				'param_name' => 'linkedin',
				'heading' => esc_html__( 'Linkedin', 'kidsworld-core' ),
			),

      		// Content
            array(
            	'type' => 'textarea_html',
            	'heading' => esc_html__('Content','kidsworld-core'),
            	'param_name' => 'content',
            	'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at.'
            ),

      		# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'kidsworld-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','kidsworld-core')
      		)			
		)
	) );	
}?>