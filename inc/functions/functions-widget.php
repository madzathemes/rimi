<?php

function rimi_sidebar_widget_init() {

$mt_columns = get_option("rimi_theme_options");

/* --------------------------------------------------------------------------------------- Page Widget Area 1 */

	register_sidebar( array(
		'name' => esc_html__( 'Default Sidebar', 'rimi'),
		'id' => 'sidebar-widget-area-1',
		'description' => esc_html__( 'The page sidebar widget area 1', 'rimi' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );


/* --------------------------------------------------------------------------------------- Blog Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Blog/Category Sidebar', 'rimi'),
		'id' => 'sidebar-blog-widget-area',
		'description' => esc_html__( 'The blog sidebar widget area' , 'rimi'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );



/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Sidebar', 'rimi'),
		'id' => 'sidebar-woocommerce-widget-area',
		'description' => esc_html__( 'WooCommerce sidebar area', 'rimi' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Single Sidebar', 'rimi'),
		'id' => 'sidebar-woocommerce-single-widget-area',
		'description' => esc_html__( 'WooCommerce Single sidebar area', 'rimi' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Single Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Post Sidebar', 'rimi'),
		'id' => 'sidebar-single-widget-area',
		'description' => esc_html__( 'The single page sidebar widget area' , 'rimi'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

		register_sidebar( array(
			'name' => esc_html__( 'Post Bottom (Before Comments)', 'rimi'),
			'id' => 'sidebar-single-bottom-widget-area-before',
			'description' => esc_html__( 'The post bottom widget area' , 'rimi'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );

	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

			register_sidebar( array(
				'name' => esc_html__( 'Post Bottom (After Comments)', 'rimi'),
				'id' => 'sidebar-single-bottom-widget-area-after',
				'description' => esc_html__( 'The post bottom widget area' , 'rimi'),
				'before_widget' => '<div class="widget">',
				'after_widget' => '<div class="clear"></div></div>',
						'before_title' => '<h2 class="heading"><span>',
						'after_title' => '</span></h4>',
			) );


/* --------------------------------------------------------------------------------------- Search Widget Area */


	register_sidebar( array(
		'name' => esc_html__( 'Search Page Sidebar', 'rimi'),
		'id' => 'sidebar-search-widget-area',
		'description' => esc_html__( 'The search page sidebar widget area' , 'rimi'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );

	/* --------------------------------------------------------------------------------------- Menu widgets */


		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 1', 'rimi'),
			'id' => 'menu-column-1',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'rimi'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 2', 'rimi'),
			'id' => 'menu-column-2',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'rimi'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 3', 'rimi'),
			'id' => 'menu-column-3',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'rimi'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
		'name' => esc_html__( 'Author Page Sidebar', 'rimi'),
		'id' => 'sidebar-author-widget-area',
		'description' => esc_html__( 'The Author page sidebar widget area' , 'rimi'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );


	/* --------------------------------------------------------------------------------------- Mobile Menu Widgets */

		register_sidebar( array(
			'name' => esc_html__( 'Mobile Menu Widgets', 'rimi'),
			'id' => 'mobile-menu-widget-area',
			'description' => esc_html__( 'The Mobile Menu Widget area' , 'rimi'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );




}

add_action( 'widgets_init', 'rimi_sidebar_widget_init' );
?>
