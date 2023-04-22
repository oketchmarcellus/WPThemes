<?php if ( ! function_exists( 'anviltech_services_defaults_customize_register' ) ) :
	
	function anviltech_services_defaults_customize_register( $wp_customize ) {

			 $agridrive_services_content_control = $wp_customize->get_setting( 'agridrive_services_content' );
			if ( ! empty( $agridrive_services_content_control ) ) {
				$agridrive_services_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-gears',
					'title'      => esc_html__( 'farm mechanization', 'agridrive' ),
					'text'       => 'We provide advanced farming systems based on digital agriculture and precision farming that will see you attain higher yields at a much lower cost and with minimal labour involvement. Our services include Crop Production, Irrigation, Fertilization, and Inputs Support, Harvesting, Post-Harvest Management, Agro-Processing, and Sales services. Whatever phase of farming you are at, we will be able to provide the machines just at the right time and a competitive rate.',
					'id'         => 'customizer_repeater_56d7ea7f40b56',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-wechat',
					'title'      => esc_html__( 'agribusiness advisory', 'agridrive' ),
					'text'       => 'Agridrive offers tailor-made agribusiness consultancy that will enable you to move your farm to a higher level of profitability. Backed by a team of experts with long-standing experience in Agriculture within Sub-Saharan Africa, we provide various specialized services to boost your productivity. These include Agribusiness Advisory, Royalty Management, Technology Licensing, Farm-to-market linkages, and Financial linkages.',
					'id'         => 'customizer_repeater_56d7ea7f40b66',
					'color'      => '#113df0',
					),
					array(
					'icon_value' => 'fa fa-pagelines',
					'title'      => esc_html__( 'model farms', 'agridrive' ),
					'text'       => 'We provide paid for technology demonstration services for Research Institutions, Universities, Private companies (seed companies) and Farmers, both large as well as small scale. Through the model farms, we also offer Agribusiness Incubation and Business Support, Horticulture under greenhouse system, High-value cash crops, and production for export as well as local markets.',
					'id'         => 'customizer_repeater_56d7ea7f40b86',
					'color'      => '#113df0',
					),
					
					array(
					'icon_value' => 'fa fa-pagelines',
					'title'      => esc_html__( 'seed production', 'agridrive' ),
					'text'       => 'Through our research and innovation lab, we develop new breeds of various crops that are adapted to local climatic conditions of different geographical locations. The crops include maize, cassava, cowpea, rice, and beans among many others. We’ve partnered with leading agrichemical companies for seed production and distribution across Africa.  With our seeds, farmers will be able to enjoy higher yields and reduced cost in disease mitigation.',
					'id'         => 'customizer_repeater_56d7ea7f40b96',
					'color'      => '#113df0',
					),
					
					
				) );

			}
			
		}
	add_action( 'customize_register', 'anviltech_services_defaults_customize_register' );
	
endif;