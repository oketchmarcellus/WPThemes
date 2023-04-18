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
			  		'post_content'=>__('Welcome to your site! This is your homepage, which is what visitors will see when they come to your site for first time. You can change your homepage or choose to turn on or off the various features on this page.','Theme starter content'),
			  		'template'=>'agridrive',
			  		),
			  'whyus' =>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('Why Us','Theme starter content'),
			  		'post_content'=>__('Agridrive Limited is a social enterprise company whose aim is to transform the lives of African farmers through wealth creation by leveraging the power of agricultural technologies.With offices in Nigeria and Kenya, we are committed to providing innovative market edge agribusiness solutions throughout Sub-Saharan Africa. Supported by our team of seasoned professionals, we aim to maximize improvements in society as well as environmental well-being among farmers through commercial business operations.'),
			  		'template'=>'agridrive',),
			  'about-us'=>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('About 2','Theme starter content'),
			  		'post_content'=>__('Agridrive is an agritech company working with farmers to unlock agribusiness opportunities in Africa. With offices in Nigeria and Kenya, we provide end to end innovative market edge agribusiness solutions to farmers throughout the continent.Our philosophy is anchored on creating business opportunities for farmers through developing quality products and services as well as new markets. Our story is imprinted on excellence and quality that ushers a new world of wealth creation through agribusiness while leveraging the power of agricultural technology.'),
			  		'template'=>'agridrive',),
			  'services'=>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('About','Theme starter content'),
			  		'post_content'=>__('<h2>FIND THE BEST <span>SOLUTIONS FOR YOUR AGRIBUSINESS</span></h2>
			  			<p>Agridrive is bringing a completely new approach and solutions to Africa’s agricultural practices. We are motivated by the desire to nurture a novel generation of wealthy farmers and a food secure continent. In this respect, we are providing farm-to-market-to-table agribusiness solutions that will see farmers greatly improve their yields and profits.<p>
			  			<p>While we are in pursuit of world-class standards and excellence, our focus is on ensuring that all our customers are satisfied by providing value for money services and just-in-time delivery systems. Our services have been clustered under three thematic areas namely Farm Mechanizations, Agribusiness Consultancy, and Model Farms. We serve both large and small-scale farmers so matter the size of your farm, our solutions will be tailor-made to fit your operational level.</p>
			  			<ul class="unordered-list">
			  			<li>We provide one-stop-shop solutions for farmers of all farming categoriest</li>
			  			<li>We provide customized business solutions to meet varied farm sizes</li>
			  			<li>Our solutions are sustainable and in harmony with the local ecosystem</li>
			  			<li>We are creating great business opportunities for Agriprenuers in Sub-Saharan Africa</li>
			  			</ul>.'),
			  		'template'=>'agridrive',),
			  'contact',
			  'blog',
			  //Starter content defined here posts to 
			  'sample1'=>array(
			  		'post_type' =>'post',
			  		'post_title'=>__('Sample Post1','Theme starter content'),
			  		'post_content'=>__('The robust partnership between Agridrive Ltd and Allied Atlantic Distilleries Nigeria Limited (AADL)– the biggest ethanol factory in Sub Sahara Africa (SSA) is yielding incredible results and impacts. The factory which uses cassava as the primary raw material engaged Agridrive Ltd for the establishment of 500 ha of cassava field in Ottu community in Oyo state Nigeria to meet its daily requirement of 300 tonnes of cassava roots.  The partnership','Theme starter content'),
			  		'template'=>'agridrive',
			  		'thumbnail'=>'{{news-image1}}',
			  	),
			  'sample2'=>array(
			  		'post_type' =>'post',
			  		'post_title'=>__('Sample Post2','Theme starter content'),
			  		'post_content'=>__('Agridrive Nigeria Ltd is breaking new ground in removing age-long barrier to efficient mechanisation in Niger State, Nigeria  which has the largest arable land in Nigeria with a total of 76,363Km2. Having realised the need to empower the farmers in the state, Agridrive has initiated an efficient tractor hiring service model to farmers to ensure they have unlimited access to tractors in the Agridrive Depot close to their domain at an economic prices','Theme starter content'),
			  		'template'=>'agridrive',
			  		'thumbnail'=>'{{news-image2}}',
			  	),),
			//Starter content defined here attachments to include
		'attachments'=>array(
			  'logo'=>array(
			  	'post_title'=>_x('site logo','Theme starter content','agridrive' ),
			  		'file'=>'images/logo.png'),
			  'slider1'=>array(
			  	'post_title'=>_x('slide1','Theme starter content','agridrive' ),
			  		'file'=>'images/slides/slide-1.jpg'),
			  'slider2'=>array(
			  		'post_title'=>_x('slide2','Theme starter content','agridrive' ),
			  		'file'=>'images/slides/slide-2.jpg'),
			  'slider3'=>array(
			  		'post_title'=>_x('slide3','Theme starter content','agridrive' ),
			  		'file'=>'images/slides/slide-3.jpg'),
			  'slider4'=>array(
			  		'post_title'=>_x('slide4','Theme starter content','agridrive' ),
			  		'file'=>'images/slides/slide-4.jpg'),
			  'story1'=>array(
			  		'post_title'=>_x('Path P Youths','Theme starter content','agridrive' ),
			  		'file'=>'images/homepage/Homepage-SUCCESS-STORIES-1.jpg'),
			  'story2'=>array(
			  		'post_title'=>_x('Cassava Planting','Theme starter content','agridrive' ),
			  		'file'=>'images/homepage/Homepage-SUCCESS-STORIES-2.jpg'),
			  'story3'=>array(
			  		'post_title'=>_x('Bida Demonstration','Theme starter content','agridrive' ),
			  		'file'=>'images/homepage/Homepage-SUCCESS-STORIES-3.jpg'),
			  'stats-bg-image'=>array(
			  		'post_title'=>_x('Stats image Background','Theme starter content','agridrive' ),
			  		'file'=>'images/homepage/STATISTICS-IMAGE.png'),
			  'news-image1'=>array(
			  		'post_title'=>_x('distillers','Theme starter content','agridrive' ),
			  		'file'=>'images/blog/AGRIDRIVE-blog-images-1.jpg'),
			  'news-image2'=>array(
			  		'post_title'=>_x('mechanization','Theme starter content','agridrive' ),
			  		'file'=>'images/blog/AGRIDRIVE-blog-images-2.jpg'),
			),

			//Add pages to primary navigation menu
			'nav_menus' =>array(
			  'primary-navigation'=>array(
			   	'name'=>__('agridrive Primary Navigation','agridrive'),
			   	'items'=>array(
			   		'link_home',
			   		'page_whyus',
			   		'page_about',
			   		'services',
			   		'page_blog',
			   		'page_contact',),
			  	),
			 // Assign a menu to the "social" location.
			'social-links' => array(
				'name' => __( 'agridrive Social Links Menu', 'agridrive' ),
				'items' => array(
					'link_facebook',
					'link_twitter',
					'link_linkedin',
					'link_instagram',
					'link_email',
					),
				),
			'footer-nav'=>array(
			   	'name'=>__('agridrive Footer Links','agridrive'),
			   	'items'=>array(
			   		'link_home',
			   		'page_whyus',
			   		'page_about',
			   		'services',
			   		'page_blog',
			   		'page_contact',),
			  	),

			),
			// Set the front page section theme mods to the IDs of the core-registered pages & post for them to show.
			'theme_mods' => array(
				'welcome_post' => '{{home}}',
				
			),

			//Add custom_html widgets to header and footer sidebars
			'widgets' => array(
			// Add custom defined search widget to to the header.
			'header_search' => array(
				'search_input' =>array('search',
					array('title'=>'',
						  'content'=>'search')),
			),
			// Add custom defined html widget to to the header address area.
			'header_address' => array(
				'address_details' =>array('custom_html',
					array('title'=>'Our Locations',
						  'content'=>'Old Naivasha Road, Nairobi. <br  />ARCN Annex, No. 3, Ibrahim Idris St.Jabi-Abuja, Nigeria')),

			),
			// Add custom defined html widget to to the header email area.	
			'header_email' => array(
				'mail_details' =>array('custom_html',
					array('title'=>'Email Us',
						  'content'=>'info@agridrive.ke<br />info@agridrive.co.ng ')),

			),
			// Add custom defined html widget to to the header phone area.
			'header_phone' => array(
				'phone_details' =>array('custom_html',
					array('title'=>'Call Us',
						  'content'=>'+254 20 4223752 <br  />+234 9 8701684')),

			),
			// Add custom defined html widget to to the footer 1 area.
			'footer_widget1' => array(
				'footer_logo' =>array('media_image',
					array('title'=>'',
						  'url'=>get_template_directory_uri().'/images/footer-logo.png')),
				'logo_mission_stmnt' =>array('text',
					array('title'=>'',
						  'text'=>'We are a social enterprise company with a mission to transform the lives of African farmers by leveraging technology.')),

			),
			// Add custom defined html widget to the footer 2 area..
			'footer_widget2' => array(
				'footer_menu_title'=>array('heading_widget',
					array('title'=>'Quick Links'),
				),
				'footer_menu' =>array('nav_menu',
					array('title'=>'Quick Links menu'),
						  'nav_menu'=>'footer-nav'),
			),

			// Add custom defined html widget to the footer 3 area.
			'footer_widget3' => array(
				'kenya_contact_info' =>array('custom_html',
					array('title'=>'Contact Info (Kenya)',
						  'content'=>'<i class="fa fa-map-marker" aria-hidden="true"></i>ILRI, Old Naivasha Road <br />Nairobi, Kenya<br /><i class="fa fa-phone" aria-hidden="true"></i>+254-20-4223752<br /><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:support@agridrive.ke">info@agridrive.ke</a>')),
			),

			// Add custom defined html widget to the footer 4 area..
			'footer_widget4' => array(
				'nigeria_contact_txt' =>array('custom_html',
					array('title'=>'Contact Info (Nigeria)',
						  'content'=>'<i class="fa fa-map-marker" aria-hidden="true"></i>ARCN Annex, No. 3, Ibrahim <br>Idris St.Jabi-Abuja,Nigeria<br /><i class="fa fa-phone" aria-hidden="true"></i>+234-9-8701684<br /><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:support@sbtechnosoft.com">info@agridrive.co.ng</a>')),
				),
			),
			)
		);
	}
	);
