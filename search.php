<?php
/**
 * @author madars.bitenieks
 * @copyright 2016
 */
?>
<?php get_header(); ?>
<div class="mt-container-wrap">
	<?php rimi_title(); ?>
<div class="container mt-content-container">
<div class="row">

	<div class="col-md-8">
		<?php if ( have_posts() ) : ?>

			<?php if ( shortcode_exists( 'posts_' ) ) {

				echo do_shortcode('[posts pagination=on type=normal-right ]');

			} else {

					if (have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>
							<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'rimi' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a></h2>
						<?php endwhile; ?>
					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'rimi'  ); ?></p>
					<?php endif;

			} ?>

		<?php else : ?>
						<div id="post-0" class="post no-results not-found">
							<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'rimi'  ); ?></h2>
							<div class="entry-content">
								<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'rimi'  ); ?></p>

							</div>
						</div>

		<?php endif; ?>
	</div>

	<div class="col-md-4 sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>
