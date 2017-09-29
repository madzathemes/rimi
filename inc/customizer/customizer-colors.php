<?php
function rimi_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'rimi'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'rimi'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'rimi'),
    'panel'  => 'colors_settings'
  ));



  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General', 'rimi'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('rimi_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rimi_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'rimi'),
      'section'  => 'general_style_settings',
      'settings' => 'rimi_theme_options[colors_default]',
    )));


  $wp_customize->add_setting('rimi_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rimi_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'rimi'),
      'section'  => 'general_style_settings',
      'settings' => 'rimi_theme_options[colors_button]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header & Menu Colors', 'rimi'),
    'panel'  => 'colors_settings'
  ));



  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'rimi'),
    'panel'  => 'colors_settings'
  ));



  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'rimi'),
    'panel'  => 'colors_settings'
  ));





}

add_action('customize_register', 'rimi_customize_colors');


  Kirki::add_field( 'rimi_theme_options[background_image]', array(
    'type'        => 'image',
    'settings'    => 'rimi_theme_options[background_image]',
    'label'       => esc_html__( 'Background Image', 'rimi' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'rimi_theme_options[background_color]', array(
    'type'        => 'color',
    'settings'    => 'rimi_theme_options[background_color]',
    'label'       => esc_html__( 'Background Color', 'rimi' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'mt_colors_header', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header',
    'label'       => esc_attr__( 'Header', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'rimi' ),
        'link'   => esc_attr__( 'Link', 'rimi' ),
        'hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_header_icons', array(
       'type'        => 'multicolor',
       'settings'    => 'mt_colors_header_icons',
       'label'       => esc_attr__( 'Header Icons', 'rimi' ),
       'section'     => 'colors_menu',
       'option_type' => 'option',
       'priority'    => 1,
       'choices'     => array(
           'latest'    => esc_attr__( 'Latest', 'rimi' ),
           'popular'   => esc_attr__( 'Popular', 'rimi' ),
           'hot'  => esc_attr__( 'Hot', 'rimi' ),
           'trending'  => esc_attr__( 'Trending', 'rimi' ),
       ),
       'default'     => array(
           'latest'    => '',
           'popular'    => '',
           'hot'    => '',
           'trending'    => '',
      ),
   ));

   Kirki::add_field( 'mt_colors_time', array(
     'type'        => 'multicolor',
     'settings'    => 'mt_colors_time',
     'label'       => esc_attr__( 'Time', 'rimi' ),
     'section'     => 'colors_menu',
     'option_type' => 'option',
     'priority'    => 1,
     'choices'     => array(
         'clock'    => esc_attr__( 'Clock', 'rimi' ),
         'seconds'   => esc_attr__( 'Seconds', 'rimi' ),
         'date'  => esc_attr__( 'Date', 'rimi' ),
     ),
     'default'     => array(
         'clock'    => '',
         'seconds'    => '',
         'date'    => ''
     ),
   ));


  Kirki::add_field( 'mt_colors_header_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_button',
    'label'       => esc_attr__( 'Header Button', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'rimi' ),
        'text_hover'   => esc_attr__( 'Hover', 'rimi' ),
        'background'  => esc_attr__( 'Background', 'rimi' ),
        'background_hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_bg', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_bg',
    'label'       => esc_attr__( 'Menu Background', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'in'    => esc_attr__( 'In', 'rimi' ),
        'out'   => esc_attr__( 'Out', 'rimi' ),
    ),
    'default'     => array(
        'in'    => '',
        'out'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link',
    'label'       => esc_attr__( 'Menu Links', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'rimi' ),
        'text_hover'   => esc_attr__( 'Hover', 'rimi' ),
        'border'  => esc_attr__( 'Border', 'rimi' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'border'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link_sub', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link_sub',
    'label'       => esc_attr__( 'Menu Sub Links', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'rimi' ),
        'text_hover'   => esc_attr__( 'Hover', 'rimi' ),
        'background'  => esc_attr__( 'Background', 'rimi' ),
        'background_hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_button',
    'label'       => esc_attr__( 'Menu Smart Button', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'rimi' ),
        'text_hover'   => esc_attr__( 'Hover', 'rimi' ),
        'background'  => esc_attr__( 'Background', 'rimi' ),
        'background_hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_search', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_search',
    'label'       => esc_attr__( 'Menu Search', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'rimi' ),
        'text_hover'   => esc_attr__( 'Hover', 'rimi' ),
        'background'  => esc_attr__( 'Background', 'rimi' ),
        'background_hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_icon', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_icon',
    'label'       => esc_attr__( 'Menu Social Icons', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Icon', 'rimi' ),
        'hover'   => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'text'    => '',
        'hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_mobile', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_mobile',
    'label'       => esc_attr__( 'Mobile Header', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'rimi' ),
        'link'   => esc_attr__( 'Text', 'rimi' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_fixed', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_fixed',
    'label'       => esc_attr__( 'Fixed Header', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 99,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'rimi' ),
        'link'   => esc_attr__( 'Link', 'rimi' ),
        'hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_smart', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_smart',
    'label'       => esc_attr__( 'Smart Menu', 'rimi' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'rimi' ),
        'link'   => esc_attr__( 'Link', 'rimi' ),
        'hover'  => esc_attr__( 'Hover', 'rimi' ),
        'out'  => esc_attr__( 'Out', 'rimi' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => '',
        'out'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_footer_top', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_top',
    'label'       => esc_attr__( 'Footer Top Colors', 'rimi' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'rimi' ),
        'title'   => esc_attr__( 'Title', 'rimi' ),
        'text'   => esc_attr__( 'Text', 'rimi' ),
        'link'  => esc_attr__( 'Link', 'rimi' ),
        'hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'background'    => '',
        'text'    => '',
        'title'    => '',
        'link'    => '',
        'hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_footer_social', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_social',
    'label'       => esc_attr__( 'Footer Social Icons', 'rimi' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'icon'    => esc_attr__( 'Icon', 'rimi' ),
        'hover'   => esc_attr__( 'Hover', 'rimi' ),
        'background'   => esc_attr__( 'Background', 'rimi' ),
        'background_hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'icon'    => '',
        'hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_footer_bottom', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_footer_bottom',
    'label'       => esc_attr__( 'Footer Bottom Colors', 'rimi' ),
    'section'     => 'colors_footer',
    'option_type' => 'option',
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'rimi' ),
        'border'   => esc_attr__( 'Border', 'rimi' ),
        'text'   => esc_attr__( 'Text', 'rimi' ),
        'link'  => esc_attr__( 'Link', 'rimi' ),
        'hover'  => esc_attr__( 'Hover', 'rimi' ),
    ),
    'default'     => array(
        'background'    => '',
        'border'    => '',
        'text'    => '',
        'link'    => '',
        'hover'    => '',
    ),
  ));

Kirki::add_field( 'colors_post_share', array(
  'type'        => 'multicolor',
  'settings'    => 'colors_post_share',
  'label'       => esc_attr__( 'Post Share Count', 'rimi' ),
  'section'     => 'colors_other',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'rimi' ),
      'text_dark'   => esc_attr__( 'Photo bg', 'rimi' ),
      'icon'   => esc_attr__( 'Icon', 'rimi' ),
      'icon_dark'   => esc_attr__( 'Photo bg', 'rimi' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_dark'    => '',
      'icon'    => '',
      'icon_dark'    => '',
  ),
));
Kirki::add_field( 'colors_post_view', array(
  'type'        => 'multicolor',
  'settings'    => 'colors_post_view',
  'label'       => esc_attr__( 'Post View Count', 'rimi' ),
  'section'     => 'colors_other',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'rimi' ),
      'text_dark'   => esc_attr__( 'Photo bg', 'rimi' ),
      'icon'   => esc_attr__( 'Icon', 'rimi' ),
      'icon_dark'   => esc_attr__( 'Photo bg', 'rimi' ),
  ),
  'default'     => array(
      'text'    => '',
      'text_dark'    => '',
      'icon'    => '',
      'icon_dark'    => '',
  ),
));

Kirki::add_field( 'mt_colors_cat', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_cat',
  'label'       => esc_attr__( 'Post List Category', 'rimi' ),
  'section'     => 'colors_other',
  'option_type' => 'option',
  'priority'    => 100,
  'choices'     => array(
      'text'    => esc_attr__( 'Text', 'rimi' ),
      'background'   => esc_attr__( 'Background', 'rimi' ),
      'only_text'   => esc_attr__( 'Only Text', 'rimi' ),
  ),
  'default'     => array(
      'text'    => '',
      'background'    => '',
      'only_text'    => '',
  ),
));

?>
