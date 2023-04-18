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
			  		'template'=>'production',
			  		),
			  'test' =>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('Test page','Theme starter content'),
			  		'post_content'=>__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.','Theme starter content'),
			  		'template'=>'production',),
			  'about'=>array(
			  		'post_type' =>'page',
			  		'post_title'=>__('About','Theme starter content'),
			  		'post_content'=>__('This Page lets you learn more about Adroit Themes Templates.Visit <a>www.adroit-themes.net</a> for support and more themes. Production artist and sound engineers may find this theme very desirable for their work','Theme starter content'),
			  		'template'=>'production',),
			  'contact',
			  'blog',
			  //Starter content defined here posts to include
			  'sample1'=>array(
			  		'post_type' =>'post',
			  		'post_title'=>__('Sample Post1','Theme starter content'),
			  		'post_content'=>__('Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod','Theme starter content'),
			  		'thumbnail'=>'{{sample1-featured-image}}',
			  	),
			  'sample2'=>array(
			  		'post_type' =>'post',
			  		'post_title'=>__('Sample Post2','Theme starter content'),
			  		'post_content'=>__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem','Theme starter content'),
			  		'template'=>'production',
			  		'thumbnail'=>'{{sample2-featured-image}}',
			  	),
			  'sample3'=>array(
			  		'post_type' =>'post',
			  		'post_title'=>__('Sample Post3','Theme starter content'),
			  		'post_content'=>__('Verterem electram te mei. Nibh volutpat principes ne sit. Quo altera impetus detraxit ex, no','Theme starter content'),
			  		'template'=>'production',
			  		'thumbnail'=>'{{sample3-featured-image}}',
			  	),
			  'hello-world' => array(
			  	'post_type' =>'post',
				'thumbnail' => '{{sample0-featured-image}}',
			    ),),
			//Starter content defined here attachments to include
		'attachments'=>array(
			  'sample0-featured-image'=>array(
			  	'post_title'=>_x('Macro Mic','Theme starter content','production' ),
			  		'file'=>'assets/img/macro-mic.jpg'),
			  'sample1-featured-image'=>array(
			  		'post_title'=>_x('kane reinholdtsen','Theme starter content','production' ),
			  		'file'=>'assets/img/kane-reinholdtsen-145944-unsplash.jpg'),
			  'sample2-featured-image'=>array(
			  		'post_title'=>_x('lechon kirb','Theme starter content','production' ),
			  		'file'=>'assets/img/lechon-kirb-25696-unsplash.jpg'),
			  'sample3-featured-image'=>array(
			  		'post_title'=>_x('Bass Mixer','Theme starter content','production' ),
			  		'file'=>'assets/img/bass-mixer.jpg'),
			  'divider-image'=>array(
			  		'post_title'=>_x('Divider image Background','Theme starter content','production' ),
			  		'file'=>'assets/img/production-template-welcome-section.jpg'),
			    ),

			//Add pages to primary navigation menu
			'nav_menus' =>array(
			  'primary-navigation'=>array(
			   	'name'=>__('Production Primary Navigation','production'),
			   	'items'=>array(
			   		'link_home',
			   		'page_test',
			   		'page_about',
			   		'page_blog',
			   		'page_contact',),
			  	),
			 // Assign a menu to the "social" location.
			'social-links' => array(
				'name' => __( 'Production Social Links Menu', 'production' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
					),
				),
			),
			// Set the front page section theme mods to the IDs of the core-registered pages & post for them to show.
			'theme_mods' => array(
				'welcome_post' => '{{home}}',
				
			),

			//Add custom_html widgets to footer sidebar
			'widgets' => array(
			//Add the image widget to divider image area
			'divider-img-widget' => array(
				'divider_img' =>array('media_image',
					array('title'=>'',
						  'url'=>get_template_directory_uri().'/assets/img/production-template-welcome-section.jpg')),
			),
			// Add custom defined html widget to to the footer 1 area.
			'footer_widget1' => array(
				'location_txt' =>array('custom_html',
					array('title'=>'',
						  'content'=>'<p>Recording studio</p>
                            	      <p>music Avenue</p>
                                      <p>RS Building</p>
                                      <p>Nairobi, Kenya</p>')),
			),

			// Add custom defined html widget to the footer 2 area.
			'footer_widget2' => array(
				'phone_contact_txt' =>array('custom_html',
					array('title'=>'',
						  'content'=>'<p>Phone: +254 701 00 00 00</p>
                                   	  <p>operation </p>
                                      <p>Mon- Fri. 9.00 - 5.00p.m</p>
                                      <p>Sat - Sun 11.00 a.m - 16.00 p.m</p>')),
			),

			// Add custom defined html widget to the footer 3 area..
			'footer_widget3' => array(
				'email_info' =>array('custom_html',
					array('title'=>'',
						  'content'=>'<p>For booking inquiries please email</p>
                                      <p>info@recordingstudio.com </p>
                                      <p>For all other, contact</p>
                                      <p>rec@ recordingstudio.com</p>')),
			),
			),
			)
		);
	}
	);
