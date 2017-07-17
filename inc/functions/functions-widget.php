<?php

function mellany_sidebar_widget_init() {

$mt_columns = get_option("mellany_theme_options");

/* --------------------------------------------------------------------------------------- Page Widget Area 1 */

	register_sidebar( array(
		'name' => esc_html__( 'Default Sidebar', 'mellany'),
		'id' => 'sidebar-widget-area-1',
		'description' => esc_html__( 'The page sidebar widget area 1', 'mellany' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );


/* --------------------------------------------------------------------------------------- Blog Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Blog/Category Sidebar', 'mellany'),
		'id' => 'sidebar-blog-widget-area',
		'description' => esc_html__( 'The blog sidebar widget area' , 'mellany'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );



/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Sidebar', 'mellany'),
		'id' => 'sidebar-woocommerce-widget-area',
		'description' => esc_html__( 'WooCommerce sidebar area', 'mellany' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Single Sidebar', 'mellany'),
		'id' => 'sidebar-woocommerce-single-widget-area',
		'description' => esc_html__( 'WooCommerce Single sidebar area', 'mellany' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Single Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Post Sidebar', 'mellany'),
		'id' => 'sidebar-single-widget-area',
		'description' => esc_html__( 'The single page sidebar widget area' , 'mellany'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

		register_sidebar( array(
			'name' => esc_html__( 'Post Bottom (Before Comments)', 'mellany'),
			'id' => 'sidebar-single-bottom-widget-area-before',
			'description' => esc_html__( 'The post bottom widget area' , 'mellany'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );

	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

			register_sidebar( array(
				'name' => esc_html__( 'Post Bottom (After Comments)', 'mellany'),
				'id' => 'sidebar-single-bottom-widget-area-after',
				'description' => esc_html__( 'The post bottom widget area' , 'mellany'),
				'before_widget' => '<div class="widget">',
				'after_widget' => '<div class="clear"></div></div>',
						'before_title' => '<h2 class="heading"><span>',
						'after_title' => '</span></h4>',
			) );


/* --------------------------------------------------------------------------------------- Search Widget Area */


	register_sidebar( array(
		'name' => esc_html__( 'Search Page Sidebar', 'mellany'),
		'id' => 'sidebar-search-widget-area',
		'description' => esc_html__( 'The search page sidebar widget area' , 'mellany'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );

	/* --------------------------------------------------------------------------------------- Menu widgets */


		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 1', 'mellany'),
			'id' => 'menu-column-1',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'mellany'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 2', 'mellany'),
			'id' => 'menu-column-2',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'mellany'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 3', 'mellany'),
			'id' => 'menu-column-3',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'mellany'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
		'name' => esc_html__( 'Author Page Sidebar', 'mellany'),
		'id' => 'sidebar-author-widget-area',
		'description' => esc_html__( 'The Author page sidebar widget area' , 'mellany'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );


	/* --------------------------------------------------------------------------------------- Mobile Menu Widgets */

		register_sidebar( array(
			'name' => esc_html__( 'Mobile Menu Widgets', 'mellany'),
			'id' => 'mobile-menu-widget-area',
			'description' => esc_html__( 'The Mobile Menu Widget area' , 'mellany'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );




}

add_action( 'widgets_init', 'mellany_sidebar_widget_init' );
?>
