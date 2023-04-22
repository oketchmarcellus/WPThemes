<?php

function template_data_setup()
{	
	$default_posts_bg_image=get_template_directory_uri().'/images/Our-Latest-News-BG-IMAGE.jpg';
	$service_upload_one=get_template_directory_uri().'/images/AGRIDRIVE---SUCCESS-STORIES-1.jpg';
	$service_upload_two=get_template_directory_uri().'/images/AGRIDRIVE---SUCCESS-STORIES-2.jpg';
	$service_upload_three=get_template_directory_uri().'/images/AGRIDRIVE---SUCCESS-STORIES-3.jpg';

	return $theme_options=array(
	'home_slider_enabled'=>true,
	'service_section_enabled'=>true,
	'service_title'=>true,
	'why_agridrive_enabled'=>true,
	'services_section_enabled'=>true,
	'success_stories_enabled'=>true,
	'stats_section_enabled'=>true,
	'latest_news_section_enabled'=>true,
	'net_partners_section_enabled'=>false,
	'newsletter_form_section_enabled'=>true,
	'latestnews_category_posts'=>'Uncategorised',
	
	'latest_news_heading'=>__('latest news','agridrive'),
	'success_stories_post_heading'=>__('Our Success Stories','agridrive'),
	'success_stories_intro'=>__('Successful Agribusiness Solutions Delivered to Our Customers','agridrive'),
	'success_stories_upload1_title'=>__('Path P Youths in Oyo State, Nigeria','agridrive'),
	'success_stories_upload2_title'=>__('Cassava Planting in Ayetoro Ogun state, Nigeria','agridrive'),
	'success_stories_upload3_title'=>__('Demonstration in Bida, Niger State,Nigeria','agridrive'),

	'net_partners_heading'=>__('Our Networks and Partners','agridrive'),
	'network_partners_intro_text'=>__('We Have an Extensive Network of Customers and Collaborating Partners across Africa. <br> Together, We Work To Make Africa a Food Sustainable Continent.','agridrive'),
	'directors_enabled'=>true,
	'directors_job_description'=>__("The board is responsible for the overall conduct of Agridrive's business",'agridrive'),
	'senior_managers_enabled'=>true,
	'senior_managers_job_description'=>__("The senior management team is responsible for the daily running of the company",'agridrive'),
	'junior_managers_enabled'=>false,
	'senior_staff_enabled'=>false,
	'junior_staff_enabled'=>false,
	'contracted_staff_enabled'=>false,
	'casual_staff_enabled'=>false,
	'contact_page_title'=>__('Get in touch','agridrive'),
	'latestnewsbg_img'=>$default_posts_bg_image,
	'success_stories_img_upload_one'=>$service_upload_one,
	'success_stories_img_upload_two'=>$service_upload_two,
	'success_stories_img_upload_three'=>$service_upload_three,
	);
}
function agridrive_frontpage() {
	return ( is_front_page() && ! is_home() );
}
?>