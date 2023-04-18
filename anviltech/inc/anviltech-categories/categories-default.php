<?php if ( ! function_exists( 'anviltech_categories_defaults_customize_register' ) ) :
	
	function anviltech_categories_defaults_customize_register( $wp_customize ) {

			 $anviltech_categories_content_control = $wp_customize->get_setting( 'anviltech_categories_content' );
			if ( ! empty( $anviltech_categories_content_control ) ) {
				$anviltech_categories_content_control->default = json_encode( array(
					array(
					'title'      => esc_html__( 'Blogs', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/blogs.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b21',
					),
					array(
					'title'      => esc_html__( 'Entertainment', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/musicstudio.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b22',
					),
					array(

					'title'      => esc_html__( 'News & Magazines', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/magazines.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b23',
					),
					
					array(
					'title'      => esc_html__( 'Studios', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/photostudio.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b24',
					),
					array(
					'title'      => esc_html__( 'Schools & Colleges', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/schools.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b25',
					),
					array(
					'title'      => esc_html__( 'e-commerce', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/ecommerce.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b26',
					),
					array(
					'title'      => esc_html__( 'Corporates & Businesses', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/corporates.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b27',
					),
					array(
					'title'      => esc_html__( 'Real Estate', 'anviltech' ),
					'link'       => '#',
					'image_url'  => get_template_directory_uri().'/assets/img/realestate.png',
					'open_new_tab' => 'no',
					'id'         => 'customizer_repeater_56d7ea7f40b28',
					),
				) );

			}
			
		}
	add_action( 'customize_register', 'anviltech_categories_defaults_customize_register' );
	
endif;