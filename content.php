<?php

/* The default template for displaying content. Used for both single and index/archive/search.
/*-----------------------------------------------------------------------------------*/

$image_settings = get_post_meta(get_the_ID(), "magazin_post_image", true);
$options = get_option("rimi_theme_options");

if(is_single()) { $more = 1; }?>
<article id="post-<?php the_ID(); ?>"  class="mt-blog-post <?php if ( is_sticky() and !is_single()){ ?> post_sticky <?php } ?>" <?php post_class(); ?>>

	<?php if( ! is_search()) { ?>
		<?php  if ( has_post_thumbnail() ) { ?>
			<div class="post-img">
				<?php if(is_single()) {
					if(!empty($image_settings)) {
						if($image_settings=="yes") {
							echo get_the_post_thumbnail(get_the_ID(),"large");
						}
					} else if(!empty($options['post_standart_image'])) {
						if($options['post_standart_image']=="yes") {
							echo get_the_post_thumbnail(get_the_ID(),"large");
						}
					} else {
						echo get_the_post_thumbnail(get_the_ID(),"large");
					}
				} else { ?>
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail(get_the_ID(),"large"); ?>
					</a>
				<?php } ?>
			</div>
		<?php } ?>
	<?php } ?>

	<?php if (!is_single()){ ?>
		<header class="entry-header">
			<h2 class="entry-title mt-blog-post-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'rimi' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a>
			</h2>
			<div class="mt-post-meta"><?php echo rimi_entry_meta(); ?></div>
		</header>
	<?php } ?>


	<div class="entry-content">
		<?php

		if(!is_single()) {

		 the_excerpt();

		} else {

			the_content();

		}

		?>
		<a  class="mt-post-btn mt-radius" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'rimi' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo esc_html__( 'Read More', 'rimi' );  ?></a>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rimi' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
<div class="clear"></div>
</article><!-- #post -->
