<?php
/*
--------------------------------------------------------
These are the starter content for the theme
--------------------------------------------------------
*/
add_action('after_setup_theme',
	function(){
		add_theme_support('starter-content',array(
			//Starter content defined here pages to include
			'posts' =>array(
			  'home' =>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('Home','Theme starter content'),
			  		'post_content'=>__('A tough duel that saw Western Stima edged out FC Talanta 3-2 at Kisumu’s Moi Stadium Saturday October 13th to finish the 2018 National as champions.'),
			  		'template'=>'fctalanta',
			  		),
			  'about-us'=>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('About Team','Theme starter content'),
			  		'post_content'=>__("Football Club Talanta, also known as FC Talanta, is a professional football club based in Nairobi, Kenya, formed in July 2012. We currently compete in the Kenyan National Super League, the second tier of the Kenyan football league system.
                        The club's corporate vision is to evolve into a model of successful, transparent and mass movementof Kenyan youth who believe in themselves and can take the country to the nextlevel in soccer."),'template'=>'fctalanta',),
			  'contact',
			  'blog',
			),
			  //Starter content defined here posts to 
			  
			//Starter content defined here attachments to include

			//Add pages to primary navigation menu
			'nav_menus' =>array(
			  'primary-navigation'=>array(
			   	'name'=>__('fctalanta Primary Navigation','fctalanta'),
			   	'items'=>array(
			   		'link_home',
			   		'page_blog',
			   		'page_contact',),
			  	),
			 // Assign a menu to the "social" location.
			'social-links' => array(
				'name' => __( 'fctalanta Social Links Menu', 'fctalanta' ),
				'items' => array(
					'link_facebook',
					'link_twitter',
					'link_linkedin',
					'link_instagram',
					'link_email',
					),
				),
			'footer-nav'=>array(
			   	'name'=>__('fctalanta Footer Links','fctalanta'),
			   	'items'=>array(
			   		'link_home',
			   		'page_blog',
			   		'page_contact',),
			  	),

			),
			// Set the front page section theme mods to the IDs of the core-registered pages & post for them to show.

			//Add custom_html widgets to header and footer sidebars
			'widgets' => array(
			// Add custom defined html widget to to the footer 1 area.
			'footer_widget1' => array(
				'widget1_txt' =>array('text',
					array('title'=>'',
						  'text'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.')),
				'widget1_contact_info' =>array('custom_html',
					array('title'=>'',
						  'content'=>'<i class="flaticon-placeholder"></i><p> PO Box 16122 Collins Street West Victoria 8007 Australia </p><i class="flaticon-customer-service"></i><p> +8801922296392 </p><i class="flaticon-mail"></i><p><a href="http://#/email-protection"></a></p>')),

			),
			// Add custom defined html widget to the footer 2 area..
			'footer_widget2' => array(
				'Information' =>array('custom_html',
					array('title'=>'Information',
						  'content'=>'<ul class="categoty"><li><a href="#">Pygmy miles</a></li><li><a href="#">About us</a></li><li><a href="#">Online Enquiry</a></li><li><a href="#">Call us</a></li><li><a href="#">Terms and Conditions</a></li></ul>')),
						),

			// Add custom defined html widget to the footer 3 area.
			'footer_widget3' => array(
				'experiences' =>array('custom_html',
					array('title'=>'Experiences',
						  'content'=>'<ul class="categoty"><li><a href="#">Pygmy miles</a></li><li><a href="#">About us</a></li><li><a href="#">Online Enquiry</a></li><li><a href="#">Call us</a></li><li><a href="#">Terms and Conditions</a></li></ul>')),
						),

			// Add custom defined html widget to the footer 4 area..
			'footer_widget4' => array(
				'flicker-photos' =>array('custom_html',
					array('title'=>'Flicker photos',
						  'content'=>'<ul class="gallery-list"></ul>')),
				),
			),));
	}
	);
