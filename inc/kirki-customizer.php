<?php


new \Kirki\Panel(
    'panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Bakul Panel', 'bakul' ),
        'description' => esc_html__( 'Bakul Panel Description.', 'bakul' ),
    ]
);

// header_top_section
function header_top_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_top_section',
        [
            'title'       => esc_html__( 'Header Info', 'bakul' ),
            'description' => esc_html__( 'Header Section Information.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 100,
        ]
    );

    // header_top_bar section 
    new \Kirki\Field\Radio_Image(        [
            'settings'    => 'header_layout_custom',
            'label'       => esc_html__( 'Chose Header Style', 'bakul' ),
            'section'     => 'header_top_section',
            'priority'    => 10,
            'choices'     => [
                'header_1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
                'header_2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
                'header_3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
            ],
            'default'     => 'header_1',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_topbar_switch',
            'label'       => esc_html__( 'Header Topbar Switch', 'bakul' ),
            'description' => esc_html__( 'Header Topbar switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    );    

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_right_switch',
            'label'       => esc_html__( 'Header Right Switch', 'bakul' ),
            'description' => esc_html__( 'Header Right switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    ); 

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_preloader_switch',
            'label'       => esc_html__( 'Header Preloader Switch', 'bakul' ),
            'description' => esc_html__( 'Header Preloader switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_search_switch',
            'label'       => esc_html__( 'Header Search Switch', 'bakul' ),
            'description' => esc_html__( 'Header Search switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    ); 

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_auth_switch',
            'label'       => esc_html__( 'Header Auth Switch', 'bakul' ),
            'description' => esc_html__( 'Header Auth switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    ); 


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_backtotop_switch',
            'label'       => esc_html__( 'Header Back to Top Switch', 'bakul' ),
            'description' => esc_html__( 'Header Back to Top switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_top_button_switch',
            'label'       => esc_html__( 'Header Top Button On/Off', 'bakul' ),
            'description' => esc_html__( 'Header Top Button switch On/Off', 'bakul' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label'    => esc_html__( 'Button Text', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'MAKE APPOINMENT', 'bakul' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_button_link',
            'label'    => esc_html__( 'Button URL', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_phone',
            'label'    => esc_html__( 'Phone Number', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '+99 (786) 8765', 'bakul' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'header_email',
            'label'    => esc_html__( 'Email ID', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'bakul@support.com', 'bakul' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'header_address',
            'label'    => esc_html__( 'Address Text', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '734 H, Bryan Burlington, NC 27215', 'bakul' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_address_link',
            'label'    => esc_html__( 'Address URL', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => 'https://www.google.com/maps/@36.0758266,-79.4558848,17z',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_top_time',
            'label'    => esc_html__( 'Header top time', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => 'Sunday - Friday: 9 am - 8 pm',
            'priority' => 10,
        ]
    );
    new \Kirki\Field\textarea(
        [
            'settings' => 'header_top_menu',
            'label'    => esc_html__( 'Header top menu', 'bakul' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'Here set your html menu', 'bakul' ),
            'priority' => 10,
        ]
    );


}
header_top_section();


// header_side_section
function header_side_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_side_section',
        [
            'title'       => esc_html__( 'Header Side Info', 'bakul' ),
            'description' => esc_html__( 'Header Side Information.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 110,
        ]
    );
    // header_side_section section 

    // header_side_logo_section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_side_logo',
            'label'       => esc_html__( 'Header Side Logo', 'bakul' ),
            'description' => esc_html__( 'Header Side Default/Primary Logo Here', 'bakul' ),
            'section'     => 'header_side_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/white-logo.png',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_info_switch',
            'label'       => esc_html__( 'Header Side Info Switch', 'bakul' ),
            'description' => esc_html__( 'Header Side Info switch On/Off', 'bakul' ),
            'section'     => 'header_side_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    );  

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'header_top_offcanvas_textarea',
            'label'       => esc_html__( 'Offcanvas About Us', 'bakul' ),
            'section'     => 'header_side_section',
            'default'     => esc_html__( 'Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'bakul' ),
        ]
    );

    // Contacts Text 
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_contacts_label',
            'label'    => esc_html__( 'Contacts Label Text', 'bakul' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( 'CONTACT US', 'bakul' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address',
            'label'    => esc_html__( 'Side Address', 'bakul' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( 'CONTACT US', 'bakul' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address_url',
            'label'    => esc_html__( 'Side Address', 'bakul' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( 'themepure@gmail.com', 'bakul' ),
            'priority' => 10,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_address_phone',
            'label'    => esc_html__( 'Side Phone', 'bakul' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( '+48 555 223 224', 'bakul' ),
            'priority' => 10,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_mailchimp',
            'label'    => esc_html__( 'Side Mailchimp', 'bakul' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( '', 'bakul' ),
            'priority' => 10,
        ]
    );

}
header_side_section();

// header_social_section
function header_social_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_social_section',
        [
            'title'       => esc_html__( 'Social Area', 'bakul' ),
            'description' => esc_html__( 'Social URL.', 'bakul' ),
            'panel'       => 'panel_id',
            'description' => esc_html__( 'For social hide just use blank', 'bakul' ),
            'priority'    => 120,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_facebook_link',
            'label'    => esc_html__( 'Facebook URL', 'bakul' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_twitter_link',
            'label'    => esc_html__( 'Twitter URL', 'bakul' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );  

    new \Kirki\Field\URL(
        [
            'settings' => 'header_linkedin_link',
            'label'    => esc_html__( 'Linkedin URL', 'bakul' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_instagram_link',
            'label'    => esc_html__( 'Instagram URL', 'bakul' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );  

    new \Kirki\Field\URL(
        [
            'settings' => 'header_youtube_link',
            'label'    => esc_html__( 'Youtube URL', 'bakul' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );  

    new \Kirki\Field\URL(
        [
            'settings' => 'header_fb_link',
            'label'    => esc_html__( 'Facebook URL', 'bakul' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 


}
header_social_section();

// header_logo_section
function header_logo_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'bakul' ),
            'description' => esc_html__( 'Header Logo Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 130,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'bakul' ),
            'description' => esc_html__( 'Theme Default/Primary Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/white-logo.png',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_secondary_logo',
            'label'       => esc_html__( 'Header Secondary Logo / Dark', 'bakul' ),
            'description' => esc_html__( 'Theme Secondary Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/black-logo.png',
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'header_search_logo',
            'label'       => esc_html__( 'Header Search Logo', 'bakul' ),
            'description' => esc_html__( 'Search Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/white-logo.png',
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'preloader_logo',
            'label'       => esc_html__( 'Preloader Icon', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/preloder.png',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'Sideimage1',
            'label'       => esc_html__( 'side image 1', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/sideimg/img1.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'Sideimage2',
            'label'       => esc_html__( 'side image 2', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/sideimg/img1.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'Sideimage3',
            'label'       => esc_html__( 'side image 3', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/sideimg/img1.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'Sideimage4',
            'label'       => esc_html__( 'side image 4', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/sideimg/img1.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'Sideimage5',
            'label'       => esc_html__( 'side image 5', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/sideimg/img1.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'Sideimage6',
            'label'       => esc_html__( 'side image 6', 'bakul' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'bakul' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/sideimg/img1.png',
        ]
    );
}
header_logo_section();


// header_logo_section
function header_breadcrumb_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'header_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'bakul' ),
            'description' => esc_html__( 'Breadcrumb Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 160,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_image',
            'label'       => esc_html__( 'Breadcrumb Image', 'bakul' ),
            'description' => esc_html__( 'Breadcrumb Image add/remove', 'bakul' ),
            'section'     => 'header_breadcrumb_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'breadcrumb_sub_title',
            'label'    => esc_html__( 'Breadcrumb Sub title', 'bakul' ),
            'section'  => 'header_breadcrumb_section',
            'default'  => esc_html__( 'Please set breadcrumb sub title', 'bakul' ),
            'priority' => 10,
        ]
    ); 


    new \Kirki\Field\Color(
        [
            'settings'    => 'breadcrumb_bg_color',
            'label'       => __( 'Breadcrumb BG Color', 'bakul' ),
            'description' => esc_html__( 'You can change breadcrumb bg color from here.', 'bakul' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => '#f3fbfe',
        ]
    );

    new \Kirki\Field\Dimensions(
        [
            'settings'    => 'breadcrumb_padding',
            'label'       => esc_html__( 'Dimensions Control', 'bakul' ),
            'description' => esc_html__( 'Description', 'bakul' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => [
                'padding-top'  => '',
                'padding-bottom' => '',
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'breadcrumb_typography',
            'label'       => esc_html__( 'Typography Control', 'bakul' ),
            'description' => esc_html__( 'The full set of options.', 'bakul' ),
            'section'     => 'header_breadcrumb_section',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );


}
header_breadcrumb_section();

// header_logo_section
function full_site_typography(){
    // header_logo_section section 
    new \Kirki\Section(
        'full_site_typography',
        [
            'title'       => esc_html__( 'Typography', 'bakul' ),
            'description' => esc_html__( 'Typography Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 190,
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_body',
            'label'       => esc_html__( 'Typography Body Text', 'bakul' ),
            'description' => esc_html__( 'Body Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'body',
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_h1',
            'label'       => esc_html__( 'Typography Heading 1 Font', 'bakul' ),
            'description' => esc_html__( 'H1 Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h1',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_h2',
            'label'       => esc_html__( 'Typography Heading 2 Font', 'bakul' ),
            'description' => esc_html__( 'H2 Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h2',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_h3',
            'label'       => esc_html__( 'Typography Heading 3 Font', 'bakul' ),
            'description' => esc_html__( 'H3 Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h3',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_h4',
            'label'       => esc_html__( 'Typography Heading 4 Font', 'bakul' ),
            'description' => esc_html__( 'H4 Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h4',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_h5',
            'label'       => esc_html__( 'Typography Heading 5 Font', 'bakul' ),
            'description' => esc_html__( 'H5 Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h5',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'bakul_typo_h6',
            'label'       => esc_html__( 'Typography Heading 6 Font', 'bakul' ),
            'description' => esc_html__( 'H6 Typography Control.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h6',
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'full_site_typography_settings',
            'label'       => esc_html__( 'Typography Control', 'bakul' ),
            'description' => esc_html__( 'The full set of options.', 'bakul' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );
}
full_site_typography();

// header_logo_section
function footer_layout_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'footer_layout_section',
        [
            'title'       => esc_html__( 'Footer', 'bakul' ),
            'description' => esc_html__( 'Footer Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 190,
        ]
    );
    // footer_widget_number section 
    new \Kirki\Field\Select(
        [
            'settings'    => 'footer_widget_number',
            'label'       => esc_html__( 'Footer Widget Number', 'bakul' ),
            'section'     => 'footer_layout_section',
            'default'     => '4',
            'placeholder' => esc_html__( 'Choose an option', 'bakul' ),
            'choices'     => [
                '1' => esc_html__( '1', 'bakul' ),
                '2' => esc_html__( '2', 'bakul' ),
                '3' => esc_html__( '3', 'bakul' ),
                '4' => esc_html__( '4', 'bakul' ),
            ],
        ]
    );

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'footer_layout',
            'label'       => esc_html__( 'Footer Layout Control', 'bakul' ),
            'section'     => 'footer_layout_section',
            'priority'    => 10,
            'choices'     => [
                'footer_1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
                'footer_2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
                'footer_3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
            ],
            'default'     => 'footer_1',
        ]
    );

    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_bg_image',
            'label'       => esc_html__( 'Footer BG Image', 'bakul' ),
            'description' => esc_html__( 'Footer Image add/remove', 'bakul' ),
            'section'     => 'footer_layout_section',
        ]
    );


    new \Kirki\Field\Color(
        [
            'settings'    => 'footer_bg_color',
            'label'       => __( 'Footer BG Color', 'bakul' ),
            'description' => esc_html__( 'You can change footer bg color from here.', 'bakul' ),
            'section'     => 'footer_layout_section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_2_switch',
            'label'       => esc_html__( 'Footer Style 2 Switch', 'bakul' ),
            'description' => esc_html__( 'Footer Style 2 On/Off', 'bakul' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'bakul' ),
                'off' => esc_html__( 'Disable', 'bakul' ),
            ],
        ]
    );      


    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Footer Copyright', 'bakul' ),
            'section'  => 'footer_layout_section',
            'default'  => esc_html__( 'Copyright &copy; 2024 Theme_Pure. All Rights Reserved', 'bakul' ),
            'priority' => 10,
        ]
    );  


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_social_switch',
            'label'       => esc_html__( 'Footer Social On / Off', 'bakul' ),
            'section'     => 'footer_layout_section',
            'default'     => false,
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_shape_switch',
            'label'       => esc_html__( 'Footer Shape On / Off', 'bakul' ),
            'section'     => 'footer_layout_section',
            'default'     => false,
            'priority' => 10,
        ]
    ); 




}
footer_layout_section();

// blog_section
function blog_section(){
    // blog_section section 
    new \Kirki\Section(
        'blog_section',
        [
            'title'       => esc_html__( 'Blog Section', 'bakul' ),
            'description' => esc_html__( 'Blog Section Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'bakul_blog_btn_switch',
            'label'       => esc_html__( 'Blog BTN On/Off', 'bakul' ),
            'section'     => 'blog_section',
            'default'     => true,
            'priority' => 10,
        ]
    ); 

    // blog_section BTN 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'bakul_blog_cat',
            'label'    => esc_html__( 'Blog Category Meta On/Off', 'bakul' ),
            'section'  => 'blog_section',
            'default'  => false,
            'priority' => 10,
        ]
    );

    // blog_section Author Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'bakul_blog_author',
            'label'    => esc_html__( 'Blog Author Meta On/Off', 'bakul' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );
    // blog_section Date Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'bakul_blog_date',
            'label'    => esc_html__( 'Blog Date Meta On/Off', 'bakul' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );

    // blog_section Comments Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'bakul_blog_comments',
            'label'    => esc_html__( 'Blog Comments Meta On/Off', 'bakul' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );


    // blog_section Blog BTN text 
    new \Kirki\Field\Text(
        [
            'settings' => 'bakul_blog_btn',
            'label'    => esc_html__( 'Blog Button Text', 'bakul' ),
            'section'  => 'blog_section',
            'default'  => "Read More",
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'bakul_social_share_switch',
            'label'    => esc_html__( 'Single Blog Social Share', 'bakul' ),
            'section'  => 'blog_section',
            'default'  => false,
            'priority' => 10,
        ]
    );

}
blog_section();


// 404 section
function error_404_section(){
    // 404_section section 
    new \Kirki\Section(
        'error_404_section',
        [
            'title'       => esc_html__( '404 Page', 'bakul' ),
            'description' => esc_html__( '404 Page Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );


    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'bakul_error_title',
            'label'    => esc_html__( 'Not Found Title', 'bakul' ),
            'section'  => 'error_404_section',
            'default'  => "Sorry We Can't Find That Page! ",
            'priority' => 10,
        ]
    );

    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'bakul_error_404',
            'label'    => esc_html__( 'Not Found 404', 'bakul' ),
            'section'  => 'error_404_section',
            'default'  => "404",
            'priority' => 10,
        ]
    );
    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'bakul_error_text',
            'label'    => esc_html__( 'Not Found 404', 'bakul' ),
            'section'  => 'error_404_section',
            'default'  => "Oops! The page you are looking for does not exist. It might have been moved or deleted.",
            'priority' => 10,
        ]
    );




    // 404_section description
    new \Kirki\Field\Text(
        [
            'settings' => 'bakul_error_link_text',
            'label'    => esc_html__( 'Error Link Text', 'bakul' ),
            'section'  => 'error_404_section',
            'default'  => "Back To Home",
            'priority' => 10,
        ]
    );


}
error_404_section();

// theme color section
function theme_color_section(){
    new \Kirki\Section(
        'theme_color_section',
        [
            'title'       => esc_html__( 'Theme Color', 'bakul' ),
            'description' => esc_html__( 'Bakul theme color Settings.', 'bakul' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'bakul_color_1',
            'label'       => __( 'Theme Color 1', 'bakul' ),
            'description' => esc_html__( 'this is theme color 1 control.', 'bakul' ),
            'section'     => 'theme_color_section',
            'default'     => '#00A3C3',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'bakul_color_2',
            'label'       => __( 'Theme Color 2', 'bakul' ),
            'description' => esc_html__( 'this is theme color 2 control.', 'bakul' ),
            'section'     => 'theme_color_section',
            'default'     => '#16243E',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'bakul_gra_color_1',
            'label'       => __( 'Gradient Color 1', 'bakul' ),
            'description' => esc_html__( 'this is theme gradient 1 color control.', 'bakul' ),
            'section'     => 'theme_color_section',
            'default'     => '#004D6E',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'bakul_gra_color_2',
            'label'       => __( 'Gradient Color 2', 'bakul' ),
            'description' => esc_html__( 'this is theme gradient 2 color control.', 'bakul' ),
            'section'     => 'theme_color_section',
            'default'     => '#00ACCC',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'bakul_body',
            'label'       => __( 'Body Text Color', 'bakul' ),
            'description' => esc_html__( 'this is theme body text color control.', 'bakul' ),
            'section'     => 'theme_color_section',
            'default'     => '#333F4D',
        ]
    );
}
theme_color_section();