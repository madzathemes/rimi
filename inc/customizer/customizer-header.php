<?php

function mellany_customize_header($wp_customize){



  $wp_customize->add_section('layout_settings', array(
    'title'    	=> esc_html__('Layouts', 'mellany'),
    'panel'  => 'magazin_general'
  ));



	Kirki::add_field( 'mellany_theme_options[boxed]', array(
		'type'        => 'radio-image',
		'settings'    => 'mellany_theme_options[boxed]',
		'label'       => esc_html__( 'Page Layouts', 'mellany' ),
		'section'     => 'layout_settings',
		'default'     => '2',
		'option_type' => 'option',
		'priority'    => 10,
		'choices'     => array(
				'1'   => get_template_directory_uri() . '/inc/img/boxed.png',
				'2' => get_template_directory_uri() . '/inc/img/full.png',
			 ),
	));

	$wp_customize->add_section('mellany_header', array(
        'title'    	=> esc_html__('Header', 'mellany'),
        'priority' => 124,
    ));


	//	==================================================
    //  =============================
    //  = ==== Logo Options
    //  =============================
      $wp_customize->add_panel( 'panel_header', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Header', 'mellany'),
    'description'    => '',
	) );


    $wp_customize->add_section('mellany_logo', array(
        'title'    	=> esc_html__('Logo Image', 'mellany'),
        'priority' => 122,

    'panel'  => 'panel_header',
    ));

    $wp_customize->add_section('mellany_logo_settings', array(
        'title'    	=> esc_html__('Logo Settings', 'mellany'),
        'priority' => 123,

    'panel'  => 'panel_header',
    ));



    //  =============================
    //  = Logo             =
    //  =============================
    $wp_customize->add_setting('mellany_theme_options[header_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => esc_html__('Upload Logo', 'mellany'),
        'section'  => 'mellany_logo',
        'settings' => 'mellany_theme_options[header_logo]',
    )));

    //  = Logo Responsive            =
    $wp_customize->add_setting('mellany_theme_options[header_logox2]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logox2', array(
        'label'    => esc_html__('Upload Responsive Logo (x2)', 'mellany'),
        'section'  => 'mellany_logo',
        'settings' => 'mellany_theme_options[header_logox2]',
    )));

    Kirki::add_field( 'mellany_theme_options[mobile_logo]', array(
      'type'        => 'image',
      'settings'    => 'mellany_theme_options[mobile_logo]',
      'label'       => esc_html__( 'Mobile Logo', 'mellany' ),
      'section'     => 'mellany_logo',
      'default'     => '',
      'option_type' => 'option',
      'priority'    => 10,
    ) );

    //  =============================
    //  = Logo Widht
    //  =============================

    Kirki::add_field( 'mellany_theme_options[logo_width]', array(
    'type'        => 'number',
    'settings'    => 'mellany_theme_options[logo_width]',
    'label'       => esc_attr__( 'Width', 'mellany' ),
    'section'     => 'mellany_logo_settings',
    'default'     => 10,
    'option_type' => 'option',
    'choices'     => array(
      'min'  => 20,
      'max'  => 500,
      'step' => 1,
    ),
  ) );

    //  =============================
    //  = Logo Height
    //  =============================

    Kirki::add_field( 'mellany_theme_options[logo_height]', array(
    'type'        => 'number',
    'settings'    => 'mellany_theme_options[logo_height]',
    'label'       => esc_attr__( 'Height', 'mellany' ),
    'section'     => 'mellany_logo_settings',
    'default'     => 10,
    'option_type' => 'option',
    'choices'     => array(
      'min'  => 20,
      'max'  => 200,
      'step' => 1,
    ),
  ) );

	//  =============================
    //  = Logo margin Top
    //  =============================


    Kirki::add_field( 'mellany_theme_options[logo_top]', array(
  	'type'        => 'number',
  	'settings'    => 'mellany_theme_options[logo_top]',
  	'label'       => esc_attr__( 'Top Space', 'mellany' ),
  	'section'     => 'mellany_logo_settings',
  	'default'     => 18,
    'option_type' => 'option',
  	'choices'     => array(
  		'min'  => 0,
  		'max'  => 120,
  		'step' => 1,
  	),
  ) );

    //  =============================
    //  = Logo margin Bottom
    //  =============================
    Kirki::add_field( 'mellany_theme_options[logo_bottom]', array(
  	'type'        => 'number',
  	'settings'    => 'mellany_theme_options[logo_bottom]',
  	'label'       => esc_attr__( 'Top Space', 'mellany' ),
  	'section'     => 'mellany_logo_settings',
  	'default'     => 18,
    'option_type' => 'option',
  	'choices'     => array(
  		'min'  => 0,
  		'max'  => 120,
  		'step' => 1,
  	),
  ) );

    //  =============================
    //  = Logo Height fixed
    //  =============================
    $wp_customize->add_setting('mellany_theme_options[mt_logo_h_f]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_h_f', array(
        'label'    	=> esc_html__('Logo height (px)', 'mellany'),
        'section'    => 'mellany_menu_fixed',
        'description'    => esc_html__('Default: 40', 'mellany'),
        'settings'   => 'mellany_theme_options[mt_logo_h_f]',
    ));

    //	==================================================
    //  =============================
    //  = ==== Header Options
    //  =============================




    $wp_customize->add_section('mellany_menu_mobile_', array(
        'title'    	=> esc_html__('Mobile Menu', 'mellany'),
        'priority' => 126,
        'panel'  => 'panel_header',
    ));

      $wp_customize->add_section('mellany_header_parallax', array(
        'title'    	=> esc_html__('Parallax', 'mellany'),
        'priority' => 127,
        'panel'  => 'panel_header',
    ));





    //  =============================
    //  = Menu fixed
    //  =============================
    $wp_customize->add_setting('mellany_theme_options[mt_menu_fix]', array(
    	'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_menu_fix', array(
        'settings' => 'mellany_theme_options[mt_menu_fix]',
        'label'    	=> esc_html__('On/Off', 'mellany'),
        'priority'   => 2,
        'section'  => 'mellany_menu_fixed',
        'type'     => 'checkbox',
    ));




    //  =============================
    //  = Menu Small on/off  	    =
    //  =============================
     $wp_customize->add_setting('mellany_theme_options[mt_menu_small]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_small', array(
        'settings' => 'mellany_theme_options[mt_menu_small]',
        'label'    	=> esc_html__('Menu Icon', 'mellany'),
        'section' => 'mellany_menu_mobile',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));





   //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_bg', array(
        'label'    => esc_html__('Mobile Menu Background', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_bg',
    )));

     //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link', array(
        'label'    => esc_html__('Mobile Menu Link', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_link',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link_hover', array(
        'label'    => esc_html__('Mobile Menu Link Hover', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_link_hover',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_title', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_title', array(
        'label'    => esc_html__('Mobile Menu Title', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_title',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_text', array(
        'label'    => esc_html__('Mobile Menu Text', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_text',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon', array(
        'label'    => esc_html__('Mobile Menu Social Icon', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_icon',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon_hover', array(
        'label'    => esc_html__('Mobile Menu Social Icon Hover', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mt_color_mobile_icon_hover',
    )));

     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('mellany_theme_options[mt_mobile_menu_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_mobile_menu_bg_img', array(
        'label'    => esc_html__('Mobile Menu BG Image', 'mellany'),
        'section'  => 'mellany_menu_mobile',
        'settings' => 'mellany_theme_options[mt_mobile_menu_bg_img]',
    )));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('mellany_theme_options[mt_mobile_menu_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_style', array(
        'settings' => 'mellany_theme_options[mt_mobile_menu_bg_img_style]',
        'label'    	=> esc_html__('Mobile Menu BG Image Style', 'mellany'),
        'section' => 'mellany_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'Cover',
			'3' => 'Repeat',
			'4' => 'No-Repeat'

        ),
    ));
    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('mellany_theme_options[mt_mobile_menu_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_position', array(
        'settings' => 'mellany_theme_options[mt_mobile_menu_bg_img_position]',
        'label'    	=> esc_html__('Mobile Menu BG Image Position', 'mellany'),
        'section' => 'mellany_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
	        '0' => 'Default',
        	'1' => 'Center',
            '2' => 'Top Center',
			'3' => 'Bottom Center',
			'4' => 'Left Center',
			'5' => 'Left Top',
			'6' => 'Left Bottom',
			'7' => 'Right Center',
			'8' => 'Right Top',
			'9' => 'Right Bottom'

        ),
    ));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_fixed_menu_bg', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_fixed_menu_bg', array(
        'label'    => esc_html__('Background color', 'mellany'),
        'section'  => 'mellany_menu_fixed',
        'settings' => 'mt_color_fixed_menu_bg',
    )));




		//  =============================
		//  = Header Top                =
		//  =============================
		$wp_customize->add_section('mellany_header_top', array(
        'title'    	=> esc_html__('Header Top', 'mellany'),
        'priority' => 124,
				'panel'  => 'panel_header',
    ));

    // MENU TOP AD //

    Kirki::add_field( 'mellany_theme_options[menu_top_ad]', array(
      'type'        => 'radio-buttonset',
      'settings'    => 'mellany_theme_options[menu_top_ad]',
      'label'       => esc_attr__( 'Header Top Content', 'mellany' ),
      'section'     => 'mellany_header_top',
      'default'     => 'ad',
      'priority'    => 1,
      'option_type'           => 'option',
      'choices'     => array(
        'ad'   => esc_attr__( 'Logo, Ad', 'mellany' ),
        'content' => esc_attr__( 'Logo, Buttons, Time, Weather', 'mellany' ),
      ),
   ));


   Kirki::add_field( 'mt_header_link_blank', array(
      'type'        => 'switch',
      'settings'    => 'mt_header_link_blank',
      'label'       => esc_html__( 'Header Button Open In New Tap', 'mellany' ),
      'section'     => 'mellany_header_top',
      'default'     => 'on',
      'priority'    => 10,
      'choices'     => array(
        'on'  => esc_attr__( 'On', 'mellany' ),
        'off' => esc_attr__( 'Off', 'mellany' ),
      ),
   ) );

   Kirki::add_field( 'mt_menu_small_on', array(
     	'type'        => 'switch',
     	'settings'    => 'mt_menu_small_on',
     	'label'       => esc_attr__( 'Small Menu For Desktop', 'mellany' ),
     	'section'     => 'mellany_header_top',
     	'default'     => 'on',
     	'priority'    => 10,
     	'choices'     => array(
        'on'  => esc_attr__( 'On', 'mellany' ),
        'off' => esc_attr__( 'Off', 'mellany' ),
     	),
   ) );


   Kirki::add_field( 'mt_menu_search', array(
       'type'        => 'switch',
       'settings'    => 'mt_menu_search',
       'label'       => esc_attr__( 'Search Button', 'mellany' ),
       'section'     => 'mellany_header_top',
       'default'     => 'on',
       'priority'    => 10,
       'choices'     => array(
         'on'  => esc_attr__( 'On', 'mellany' ),
         'off' => esc_attr__( 'Off', 'mellany' ),
       ),
   ) );

   Kirki::add_field( 'mt_header_social', array(
       'type'        => 'switch',
       'settings'    => 'mt_header_social',
       'label'       => esc_attr__( 'Header Social', 'mellany' ),
       'section'     => 'mellany_header_top',
       'default'     => 'on',
       'priority'    => 10,
       'choices'     => array(
         'on'  => esc_attr__( 'On', 'mellany' ),
         'off' => esc_attr__( 'Off', 'mellany' ),
       ),
   ) );

   Kirki::add_field( 'mt_header_time', array(
       'type'        => 'switch',
       'settings'    => 'mt_header_time',
       'label'       => esc_attr__( 'Time and Date', 'mellany' ),
       'section'     => 'mellany_header_top',
       'default'     => 'off',
       'priority'    => 10,
       'choices'     => array(
         'on'  => esc_attr__( 'On', 'mellany' ),
         'off' => esc_attr__( 'Off', 'mellany' ),
       ),
   ) );

		// Latest Posts
		$wp_customize->add_setting('mellany_theme_options[url_latest]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'balanceTags'
		));
		$wp_customize->add_control('mellany_theme_options[url_latest]', array(
			'label' => esc_html__('Button: Latest Posts', 'mellany'),
			'section' => 'mellany_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'mellany_theme_options[url_latest]',
			'priority'   => 2,
		));

		// Popular Posts
		$wp_customize->add_setting('mellany_theme_options[url_popular]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'balanceTags'
		));
		$wp_customize->add_control('mellany_theme_options[url_popular]', array(
			'label' => esc_html__('Button: Popular Posts', 'mellany'),
			'section' => 'mellany_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'mellany_theme_options[url_popular]',
			'priority'   => 3,
		));

		// Hot Posts
		$wp_customize->add_setting('mellany_theme_options[url_hot]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'balanceTags'
		));
		$wp_customize->add_control('mellany_theme_options[url_hot]', array(
			'label' => esc_html__('Button: Hot Posts', 'mellany'),
			'section' => 'mellany_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'mellany_theme_options[url_hot]',
			'priority'   => 4,
		));

		// Trending Posts
		$wp_customize->add_setting('mellany_theme_options[url_trending]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'balanceTags'
		));
		$wp_customize->add_control('mellany_theme_options[url_trending]', array(
			'label' => esc_html__('Button: Trending Posts', 'mellany'),
			'section' => 'mellany_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'mellany_theme_options[url_trending]',
			'priority'   => 5,
		));



		$wp_customize->add_setting('mellany_theme_options[header_link_url]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
		));
		$wp_customize->add_control('mellany_theme_options[header_link_url]', array(
        'label'    	=> esc_html__('Header Button URL', 'mellany'),
				'description'        => 'Sample: http://www.yoururl.com',
        'section'    => 'mellany_header_top',
        'settings'   => 'mellany_theme_options[header_link_url]',
    ));

		$wp_customize->add_setting('mellany_header_link_name', array(
        'capability'     => 'edit_theme_options',
				'default'        => 'Download mellany',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_attr',
		));
		$wp_customize->add_control('mellany_header_link_name', array(
        'label'    	=> esc_html__('Header Button Name', 'mellany'),
        'section'    => 'mellany_header_top',
				'description'        => 'Default: Download mellany',
        'settings'   => 'mellany_header_link_name',
    ));



}

add_action('customize_register', 'mellany_customize_header');

?>
