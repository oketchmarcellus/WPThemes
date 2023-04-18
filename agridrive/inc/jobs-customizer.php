<?php

function agridrive_jobs_customize_register( $wp_customize ) {
// Agridrive Jobs Categories
	$wp_customize->add_section(
        'agridrive_job_categories',
        array(
            'title' => __('Manage Agridrive Team Job Categories','agridrive'),
            'description' =>sprintf(__('Options for Team Job Categories','agridrive')),
            'panel'  => 'homepage',
            'priority' =>86,
    ));
	
	//Hide or Job category
	
	$wp_customize->add_setting(
    'agridrive_options[directors_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'agridrive_options[directors_enabled]',
    array(
        'label' => __('Enable Job Category Directors','agridrive'),
		'priority'   => 1,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
	);
    //Job Category Description         
    $wp_customize->add_setting('directors_job_description',array(
            'default' => __("The board is responsible for the overall conduct of Agridrive's business",'agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('directors_job_description',array(
            'label' => __('Add directors job description here','agridrive'),
            'section'   => 'agridrive_job_categories',
            'setting'   => 'directors_job_description',
            'priority'   => 2,
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
    $wp_customize->add_setting(
    'agridrive_options[senior_managers_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );
    $wp_customize->add_control(
    'agridrive_options[senior_managers_enabled]',
    array(
        'label' => __('Enable Job Category Senior Management','agridrive'),
        'priority'   => 3,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
    );
     //Job Category Description         
    $wp_customize->add_setting('senior_managers_job_description',array(
            'default' => __("The senior management team is responsible for the daily running of the company",'agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('senior_managers_job_description',array(
            'label' => __('Add Senior Management job description here','agridrive'),
            'priority'   => 4,
            'section'   => 'agridrive_job_categories',
            'setting'   => 'senior_managers_job_description',
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
     $wp_customize->add_setting(
    'agridrive_options[junior_managers_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );
    $wp_customize->add_control(
    'agridrive_options[junior_managers_enabled]',
    array(
        'label' => __('Enable Job Category junior Management','agridrive'),
        'priority'   => 5,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
    );
     //Job Category Description         
    $wp_customize->add_setting('junior_managers_job_description',array(
            'default' => __("The junior management team is responsible for the daily running of the company",'agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('junior_managers_job_description',array(
            'label' => __('Add junior Management job description here','agridrive'),
            'priority'   => 6,
            'section'   => 'agridrive_job_categories',
            'setting'   => 'junior_managers_job_description',
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
     $wp_customize->add_setting(
    'agridrive_options[senior_staff_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );
    $wp_customize->add_control(
    'agridrive_options[senior_staff_enabled]',
    array(
        'label' => __('Enable Job Category Senior staff','agridrive'),
        'priority'   => 7,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
    );
     //Job Category Description         
    $wp_customize->add_setting('senior_staff_job_description',array(
            'default' => __('','agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('senior_staff_job_description',array(
            'label' => __('Add Senior staff job description here','agridrive'),
            'priority'   => 8,
            'section'   => 'agridrive_job_categories',
            'setting'   => 'senior_managers_job_description',
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
     $wp_customize->add_setting(
    'agridrive_options[junior_staff_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );

    $wp_customize->add_control(
    'agridrive_options[junior_staff_enabled]',
    array(
        'label' => __('Enable Job Category junior staff','agridrive'),
        'priority'   => 9,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
    );
     //Job Category Description         
    $wp_customize->add_setting('junior_staff_job_description',array(
            'default' => __('','agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('junior_staff_job_description',array(
            'label' => __('Add junior staff job description here','agridrive'),
            'priority'   => 10,
            'section'   => 'agridrive_job_categories',
            'setting'   => 'senior_managers_job_description',
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
     $wp_customize->add_setting(
    'agridrive_options[contracted_staff_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );

    $wp_customize->add_control(
    'agridrive_options[contracted_staff_enabled]',
    array(
        'label' => __('Enable Job Category Contracted Staff','agridrive'),
        'priority'   => 11,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
    );
      //Job Category Description         
    $wp_customize->add_setting('contracted_staff_job_description',array(
            'default' => __('','agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('contracted_staff_job_description',array(
            'label' => __('Add Contracted staff job description here','agridrive'),
            'priority'   => 12,
            'section'   => 'agridrive_job_categories',
            'setting'   => 'senior_managers_job_description',
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
     $wp_customize->add_setting(
    'agridrive_options[Casual_staff_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );
    $wp_customize->add_control(
    'agridrive_options[casual_staff_enabled]',
    array(
        'label' => __('Enable Job Category Casual Staff','agridrive'),
        'priority'   => 13,
        'section' => 'agridrive_job_categories',
        'type' => 'checkbox',
    )
    );
      //Job Category Description         
    $wp_customize->add_setting('casual_staff_job_description',array(
            'default' => __('','agridrive'),
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' =>'postMessage',
            'sanitize_callback' => 'esc_textarea',
            
    ));
        $wp_customize->add_control('casual_staff_job_description',array(
            'label' => __('Add Casual staff job description here','agridrive'),
            'priority'   => 14,
            'section'   => 'agridrive_job_categories',
            'setting'   => 'senior_managers_job_description',
            'type' => 'textarea',
            'description' => 'Add default Content'
    ));
}
add_action('customize_register','agridrive_jobs_customize_register');

?>