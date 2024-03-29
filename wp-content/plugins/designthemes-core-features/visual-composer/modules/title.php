<?php add_action( 'vc_before_init', 'dt_sc_simple_heading_vc_map' );
function dt_sc_simple_heading_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Simple Heading", 'kidsworld-core' ),
		"base" => 'dt_sc_simple_heading',
		"icon" => 'dt_sc_simple_heading',
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Types
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Type','kidsworld-core'),
				'param_name' => 'type',
				'value' => array(
					esc_html__('Simple','kidsworld-core') => 'simple',
					esc_html__('Two Color','kidsworld-core') => 'two-color',
					esc_html__('Two Border','kidsworld-core') => 'two-border',
					esc_html__('Two Border With Sub Title','kidsworld-core') => 'two-border-with-subtitle',
					esc_html__('Icon With Link', 'kidsworld-core') => 'with-icon-link',
					esc_html__('Ribbon','kidsworld-core') => 'ribbon',
					esc_html__('Script','kidsworld-core') => 'script',
					esc_html__('Stripe','kidsworld-core') => 'stripe',
					esc_html__('Stripe 2','kidsworld-core') => 'mz-stripe',
					esc_html__('Split','kidsworld-core') => 'split',
					esc_html__('Decoration','kidsworld-core') => 'decoration',
					esc_html__('Triangle','kidsworld-core') => 'triangle',
				),
				'std' => 'two-border',
				'admin_label' => true
			),

			# Heading Tag
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Heading tag','kidsworld-core'),
				'param_name' => 'tag',
				'value' => array(
					'H1' => 'h1',
					'H2' => 'h2',
					'H3' => 'h3',
					'H4' => 'h4',
					'H5' => 'h5',
					'H6' => 'h6'
				),
				'std' => 'h2',
			),

			# Text
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Text', 'kidsworld-core' ),
				'param_name' => 'text',
				'value' => 'Lorem ipsum dolor'
			),

			# Sub Heading Tag
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Sub Heading tag','kidsworld-core'),
				'param_name' => 'subtag',
				'value' => array(
					'H1' => 'h1',
					'H2' => 'h2',
					'H3' => 'h3',
					'H4' => 'h4',
					'H5' => 'h5',
					'H6' => 'h6'
				),
				'std' => 'h3',
				'dependency' => array( 'element' => 'type', 'value' => array( 'two-border-with-subtitle', 'script', 'stripe' ) )
			),

			# Sub Heading Text
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Sub Text', 'kidsworld-core' ),
				'param_name' => 'subtext',
				'value' => 'Lorem ipsum dolor',
				'dependency' => array( 'element' => 'type', 'value' => array( 'two-border-with-subtitle', 'script', 'stripe' ) )
			),

			# Sub Heading Tag
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Sub Heading tag','kidsworld-core'),
				'param_name' => 'extra_text_tag',
				'value' => array(
					'H1' => 'h1',
					'H2' => 'h2',
					'H3' => 'h3',
					'H4' => 'h4',
					'H5' => 'h5',
					'H6' => 'h6'
				),
				'std' => 'h5',
				'dependency' => array( 'element' => 'type', 'value' => 'stripe' )
			),

			# Extra Text - type = stripe
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra text', 'kidsworld-core' ),
				'param_name' => 'extra_text',
				'value' => 'Lorem ipsum dolor',
				'dependency' => array( 'element' => 'type', 'value' => 'stripe' )
      		),

      		# Link - type = with-icon-link
      		array(
				'type' => 'vc_link',
				'heading' => esc_html__( 'URL (Link)', 'kidsworld-core' ),
				'param_name' => 'link',
				'dependency' => array( 'element' => 'type', 'value' => 'with-icon-link' )
			),
			
      		# Icon Class - type = with-icon-link
      		array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Icon Class', 'kidsworld-core' ),
				'param_name' => 'icon',
				'value' => 'icon icon-compactcamera',
				'description' => esc_html__( 'Eg: fa fa-home or icon icon-compactcamera', 'kidsworld-core' ),
				'dependency' => array( 'element' => 'type', 'value' => 'with-icon-link' )
			),

			# Content - type = Decoration , Triangle
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__( 'Content', 'kidsworld-core' ),
				'param_name' => 'content',
				'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi',
				'dependency' => array( 'element' => 'type', 'value' => array( 'decoration', 'triangle' ) )
			),

			# Extra class name
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'kidsworld-core' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Style particular element differently - add a class name and refer to it in custom CSS', 'kidsworld-core' )
      		)			
		)
	) );
}?>