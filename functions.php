<?php

// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
    'post',
    'page',
));

// Admin Bar
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

add_action( 'wp_enqueue_scripts', 'waptheme_scripts' );
function waptheme_scripts() {
    wp_enqueue_style( 'waptheme-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_script( 'waptheme-script', get_stylesheet_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true );
}

add_action('customize_register', 'waptheme_customize_register' );
function waptheme_customize_register( $wp_customize ) {
    $wp_customize->add_panel('waptheme_frontpage', array(
        'title'         =>  __('Portfolio Front Page Options', 'willallendev'),
        'description'   =>  '<p>Settings and Controls for the front page of Will Allen Portfolio.</p>',
        'priority'      =>  10,
    ));


    //  =============================
    //  = Name and photo section    =
    //  =============================
    $wp_customize->add_section('waptheme_hero', array(
        'title'         => __('Hero', 'willallendev'),
        'panel'         =>  'waptheme_frontpage',
        'priority'      =>  10,
    ));

    $wp_customize->add_setting('waptheme_options-first_name', array(
        'default'       =>  'Will',
    ) );

    $wp_customize->add_control('waptheme_options-first_name', array(
        'label'         =>  __('First Name', 'willallenportfolio'),
        'section'       =>  'waptheme_hero',
    ));

    $wp_customize->add_setting('waptheme_options-last_name', array(
        'default'       =>  'Allen',
    ));
    $wp_customize->add_control('waptheme_options-last_name',array(
        'label'         =>  __('Last Name', 'willallendev'),
        'section'       =>  'waptheme_hero',
    ));

    $wp_customize->add_setting('waptheme_options-hero_image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'waptheme_options-hero_image',
            array(
                'label'         =>  __('Hero Image', 'willallendev'),
                'section'       =>  'waptheme_hero',
                'settings'      =>  'waptheme_options-hero_image',
            )
        )
    );

    //  =============================
    //  = Introduction Section      =
    //  =============================
    $wp_customize->add_section('waptheme_intro', array(
        'title'         => __('Introduction', 'willallendev'),
        'panel'         =>  'waptheme_frontpage',
        'priority'      =>  20,
    ));

    $wp_customize->add_setting('waptheme_options-intro_title', array(
        'default'       =>  'Introduction',
    ));
    $wp_customize->add_control('waptheme_options-intro_title', array(
        'label'         =>  __('Title', 'willallendev'),
        'section'       =>  'waptheme_intro',
    ));

    $wp_customize->add_setting('waptheme_options-intro_text');
    $wp_customize->add_control('waptheme_options-intro_text', array(
        'label'         =>  __('Text', 'willallendev'),
        'section'       =>  'waptheme_intro',
        'type'         =>  'textarea',
    ));

    //  =============================
    //  = Goals & Skills Section    =
    //  =============================
    $wp_customize->add_section('waptheme_goals', array(
        'title'         => __('Goals & Skills', 'willallendev'),
        'panel'         =>  'waptheme_frontpage',
        'priority'      =>  30,
    ));

    //Title and Text
    $wp_customize->add_setting('waptheme_options-goals_title', array(
        'default'       =>  'Goals & Skills',
    ));
    $wp_customize->add_control('waptheme_options-goals_title', array(
        'label'         =>  __('Title', 'willallendev'),
        'section'       =>  'waptheme_goals',
    ));

    $wp_customize->add_setting('waptheme_options-goals_text');
    $wp_customize->add_control('waptheme_options-goals_text', array(
        'label'         =>  __('Text', 'willallendev'),
        'section'       =>  'waptheme_goals',
        'type'         =>  'textarea',
    ));

    //Bubble 1
    $wp_customize->add_setting('waptheme_options-bubble1_title', array(
        'default'       =>  'Professional',
    ));
    $wp_customize->add_control('waptheme_options-bubble1_title', array(
        'label'         =>  __('Title', 'willallendev'),
        'section'       =>  'waptheme_goals',
    ));

    $wp_customize->add_setting('waptheme_options-bubble1_text');
    $wp_customize->add_control('waptheme_options-bubble1_text', array(
        'label'         =>  __('Text', 'willallendev'),
        'section'       =>  'waptheme_goals',
        'type'         =>  'textarea',
    ));

    //  Bubble 2
    $wp_customize->add_setting('waptheme_options-bubble2_title', array(
        'default'       =>  'WordPress',
    ));
    $wp_customize->add_control('waptheme_options-bubble2_title', array(
        'label'         =>  __('Title', 'willallendev'),
        'section'       =>  'waptheme_goals',
    ));

    $wp_customize->add_setting('waptheme_options-bubble2_text');
    $wp_customize->add_control('waptheme_options-bubble2_text', array(
        'label'         =>  __('Text', 'willallendev'),
        'section'       =>  'waptheme_goals',
        'type'         =>  'textarea',
    ));

    //  Bubble 3
    $wp_customize->add_setting('waptheme_options-bubble3_title', array(
        'default'       =>  'Snowboarding',
    ));
    $wp_customize->add_control('waptheme_options-bubble3_title', array(
        'label'         =>  __('Title', 'willallendev'),
        'section'       =>  'waptheme_goals',
    ));

    $wp_customize->add_setting('waptheme_options-bubble3_text');
    $wp_customize->add_control('waptheme_options-bubble3_text', array(
        'label'         =>  __('Text', 'willallendev'),
        'section'       =>  'waptheme_goals',
        'type'         =>  'textarea',
    ));

    //  Pluralsight skills image
    $wp_customize->add_setting('waptheme_options-ps_image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'waptheme_options-ps_image',
            array(
                'label'         =>  __('Pluralsight Skills IQ Image', 'willallendev'),
                'section'       =>  'waptheme_goals',
                'settings'      =>  'waptheme_options-ps_image',
            )
        )
    );

    //  =========================
    //  =   Resume Section      =
    //  =========================

    $wp_customize->add_section('waptheme_resume', array(
        'priority'      =>  40,
        'panel'         =>  'waptheme_frontpage',
        'title'         =>  'Resume',
    ));

    //  Title and introduction
    $wp_customize->add_setting('waptheme_options-resume_title', array(
        'default'       =>  'Resume',
    ));
    $wp_customize->add_control('waptheme_options-resume_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Resume Title', 'willallendev'),
    ));

    $wp_customize->add_setting('waptheme_options-resume_text');
    $wp_customize->add_control('waptheme_options-resume_text', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Resume Text','willallendev'),
        'type'          =>  'textarea',
    ));

    //  Education Bubbles
    $wp_customize->add_setting('waptheme_options-ed_title');
    $wp_customize->add_control('waptheme_options-ed_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Education Title'),
    ));

    //  Education Bubble 1
    $wp_customize->add_setting('waptheme_options-edbubble1_title');
    $wp_customize->add_control('waptheme_options-edbubble1_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Education 1', 'willallendev'),
    ));
    $wp_customize->add_setting('waptheme_options-edbubble1_sub');
    $wp_customize->add_control('waptheme_options-edbubble1_sub', array(
        'section'       =>  'waptheme_resume',
    ));
    $wp_customize->add_setting('waptheme_options-edbubble1_text');
    $wp_customize->add_control('waptheme_options-edbubble1_text', array(
        'section'       =>  'waptheme_resume',
        'type'          =>  'textarea',
    ));

    //  Education Bubble 2
    $wp_customize->add_setting('waptheme_options-edbubble2_title');
    $wp_customize->add_control('waptheme_options-edbubble2_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Education 2', 'willallendev'),
    ));
    $wp_customize->add_setting('waptheme_options-edbubble2_sub');
    $wp_customize->add_control('waptheme_options-edbubble2_sub', array(
        'section'       =>  'waptheme_resume',
    ));
    $wp_customize->add_setting('waptheme_options-edbubble2_text');
    $wp_customize->add_control('waptheme_options-edbubble2_text', array(
        'section'       =>  'waptheme_resume',
        'type'          =>  'textarea',
    ));

    //  Experience Bubbles
    $wp_customize->add_setting('waptheme_options-exp_title');
    $wp_customize->add_control('waptheme_options-exp_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Experience Title'),
    ));

    //  Experience Bubble 1
    $wp_customize->add_setting('waptheme_options-expbubble1_title');
    $wp_customize->add_control('waptheme_options-expbubble1_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Experience 1', 'willallendev'),
    ));
    $wp_customize->add_setting('waptheme_options-expbubble1_sub1');
    $wp_customize->add_control('waptheme_options-expbubble1_sub1', array(
        'section'       =>  'waptheme_resume',
    ));
    $wp_customize->add_setting('waptheme_options-expbubble1_sub2');
    $wp_customize->add_control('waptheme_options-expbubble1_sub2', array(
        'section'       =>  'waptheme_resume',
    ));
    $wp_customize->add_setting('waptheme_options-expbubble1_text');
    $wp_customize->add_control('waptheme_options-expbubble1_text', array(
        'section'       =>  'waptheme_resume',
        'type'          =>  'textarea',
    ));

    //  Experience Bubble 2
    $wp_customize->add_setting('waptheme_options-expbubble2_title');
    $wp_customize->add_control('waptheme_options-expbubble2_title', array(
        'section'       =>  'waptheme_resume',
        'label'         =>  __('Experience 2', 'willallendev'),
    ));
    $wp_customize->add_setting('waptheme_options-expbubble2_sub');
    $wp_customize->add_control('waptheme_options-expbubble2_sub', array(
        'section'       =>  'waptheme_resume',
    ));
    $wp_customize->add_setting('waptheme_options-expbubble2_text');
    $wp_customize->add_control('waptheme_options-expbubble2_text', array(
        'section'       =>  'waptheme_resume',
        'type'          =>  'textarea',
    ));

    $wp_customize->add_setting('waptheme_options-resume_link_text');
    $wp_customize->add_control('waptheme_options-resume_link_text', array(
        'section'       =>  'waptheme_resume',
    ));

    //  Resume PDF Upload
    $wp_customize->add_setting('waptheme_options-resume_pdf');
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'waptheme_options-resume_pdf',
            array(
                'label'         =>  __('PDF Upload', 'willallendev'),
                'section'       =>  'waptheme_resume',
                'settings'      =>  'waptheme_options-resume_pdf',
            )
        )
    );

    //  ==========================
    //  =   Case Studies Section =
    //  ==========================
    $wp_customize->add_section('waptheme_caseStudies', array(
        'priority'      =>  50,
        'panel'         =>  'waptheme_frontpage',
        'title'         =>  'Case Studies',
    ));

    $wp_customize->add_setting('waptheme_options-caseStudies_title');
    $wp_customize->add_control('waptheme_options-caseStudies_title', array(
        'label'         =>  __('Case Studies Title', 'willallendev'),
        'section'       =>  'waptheme_caseStudies',
    ));
    $wp_customize->add_setting('waptheme_options-caseStudies_text');
    $wp_customize->add_control('waptheme_options-caseStudies_text', array(
        'section'       =>  'waptheme_caseStudies',
        'type'          =>  'textarea',
    ));

    $wp_customize->add_setting('waptheme_options-caseStudies_more');
    $wp_customize->add_control('waptheme_options-caseStudies_more', array(
        'label'         =>  __('More Button Text', 'willallendev'),
        'section'       =>  'waptheme_caseStudies',
    ));

    //  =========================
    //  =   Articles Section    =
    //  =========================
    $wp_customize->add_section('waptheme_articles', array(
        'priority'      =>  60,
        'panel'         =>  'waptheme_frontpage',
        'title'         =>  'Articles',
    ));

    $wp_customize->add_setting('waptheme_options-articles_title');
    $wp_customize->add_control('waptheme_options-articles_title', array(
        'label'         =>  __('Articles Title', 'willallendev'),
        'section'       =>  'waptheme_articles',
    ));
    $wp_customize->add_setting('waptheme_options-articles_text');
    $wp_customize->add_control('waptheme_options-articles_text', array(
        'section'       =>  'waptheme_articles',
        'type'          =>  'textarea',
    ));

    $wp_customize->add_setting('waptheme_options-articles_more');
    $wp_customize->add_control('waptheme_options-articles_more', array(
        'label'         =>  __('More Button Text', 'willallendev'),
        'section'       =>  'waptheme_articles',
    ));

    //  =========================
    //  =   About Section       =
    //  =========================
    $wp_customize->add_section('waptheme_about', array(
        'priority'      =>  70,
        'panel'         =>  'waptheme_frontpage',
        'title'         =>  'About',
    ));

    $wp_customize->add_setting('waptheme_options-about_title');
    $wp_customize->add_control('waptheme_options-about_title', array(
        'label'         =>  __('About Title', 'willallendev'),
        'section'       =>  'waptheme_about',
    ));
    $wp_customize->add_setting('waptheme_options-about_text');
    $wp_customize->add_control('waptheme_options-about_text', array(
        'label'         =>  __('About Text', 'willallendev'),
        'section'       =>  'waptheme_about',
        'type'          =>  'textarea',
    ));

    $wp_customize->add_setting('waptheme_options-about_image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'waptheme_options-about_image',
            array(
                'label'         =>  __('About Image', 'willallendev'),
                'section'       =>  'waptheme_about',
                'settings'      =>  'waptheme_options-about_image',
            )
        )
    );


    //  =========================
    //  =   Elsewhere Section   =
    //  =========================
    $wp_customize->add_section('waptheme_elsewhere', array(
        'priority'      =>  80,
        'panel'         =>  'waptheme_frontpage',
        'title'         =>  'Elsewhere',
    ));

    $wp_customize->add_setting('waptheme_options-elsewhere_title');
    $wp_customize->add_control('waptheme_options-elsewhere_title', array(
        'lable'         =>  'Title',
        'section'       =>  'waptheme_elsewhere',
    ));

    //  Twitter
    $wp_customize->add_setting('waptheme_options-twitter_text');
    $wp_customize->add_control('waptheme_options-twitter_text', array(
        'label'         =>  __('Twitter Text', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));
    $wp_customize->add_setting('waptheme_options-twitter_url');
    $wp_customize->add_control('waptheme_options-twitter_url', array(
        'label'         =>  __('Twitter URL', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));

    //  Git Hub
    $wp_customize->add_setting('waptheme_options-github_text');
    $wp_customize->add_control('waptheme_options-github_text', array(
        'label'         =>  __('Git Hub Text', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));
    $wp_customize->add_setting('waptheme_options-github_url');
    $wp_customize->add_control('waptheme_options-github_url', array(
        'label'         =>  __('Git Hub URL', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));

    //  Instagram
    $wp_customize->add_setting('waptheme_options-instagram_text');
    $wp_customize->add_control('waptheme_options-instagram_text', array(
        'label'         =>  __('Instagram Text', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));
    $wp_customize->add_setting('waptheme_options-instagram_url');
    $wp_customize->add_control('waptheme_options-instagram_url', array(
        'label'         =>  __('Instagram URL', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));

    //  LinkedIn
    $wp_customize->add_setting('waptheme_options-linkedin_text');
    $wp_customize->add_control('waptheme_options-linkedin_text', array(
        'label'         =>  __('LinkedIn Text', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));
    $wp_customize->add_setting('waptheme_options-linkedin_url');
    $wp_customize->add_control('waptheme_options-linkedin_url', array(
        'label'         =>  __('LinkedIn URL', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));

    //  Stack Overflow
    $wp_customize->add_setting('waptheme_options-so_text');
    $wp_customize->add_control('waptheme_options-so_text', array(
        'label'         =>  __('Stack Overflow Text', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));
    $wp_customize->add_setting('waptheme_options-so_url');
    $wp_customize->add_control('waptheme_options-so_url', array(
        'label'         =>  __('Stack Overflow URL', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));

    //  Pluralsight
    $wp_customize->add_setting('waptheme_options-ps_text');
    $wp_customize->add_control('waptheme_options-ps_text', array(
        'label'         =>  __('Pluralsight Text', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));
    $wp_customize->add_setting('waptheme_options-ps_url');
    $wp_customize->add_control('waptheme_options-ps_url', array(
        'label'         =>  __('Pluralsight URL', 'willallendev'),
        'section'       =>  'waptheme_elsewhere',
    ));

    //  =========================
    //  =   Contact Form        =
    //  =========================
    $wp_customize->add_section('waptheme_contact', array(
        'priority'      =>  90,
        'panel'         =>  'waptheme_frontpage',
        'title'         =>  'Contact',
    ));

    $wp_customize->add_setting('waptheme_options-contact_name', array(
        'default'   =>  'Name',
    ));
    $wp_customize->add_control('waptheme_options-contact_name', array(
        'label'         =>  __('Contact "Name" Text', 'willallendev'),
        'section'       =>  'waptheme_contact',
    ));

    $wp_customize->add_setting('waptheme_options-contact_email', array(
        'default'       =>  'eMail',
    ));
    $wp_customize->add_control('waptheme_options-contact_email', array(
        'label'         =>  __('Contact "eMail" Text', 'willallendev'),
        'section'       =>  'waptheme_contact',
    ));

    $wp_customize->add_setting('waptheme_options-contact_message', array(
        'default'       =>  'What can I helop you with today?',
    ));
    $wp_customize->add_control('waptheme_options-contact_message', array(
        'label'         =>  __('Contact message text', 'willallendev'),
        'section'       =>  'waptheme_contact',
    ));

    $wp_customize->add_setting('waptheme_options-contact_submit');
    $wp_customize->add_control('waptheme_options-contact_submit', array(
        'label'         =>  __('Contact Submit Button Text', 'willallendev'),
        'section'       =>  'waptheme_contact',
    ));
}