<?php
/**
 * @author madars.bitenieks
 * @copyright 2017
 */
?>
<?php get_header();

if ( false == get_theme_mod( 't_p_permalink_to', false ) ) { $t_p_permalink_to = esc_html__("Permalink to %s", "rimi");  } else { $t_p_permalink_to = get_theme_mod( 't_p_permalink_to' ).' %s'; }
if ( false == get_theme_mod( 't_p_sorry_search', false ) ) { $t_p_sorry_search = esc_html__("Sorry, but nothing matched your search criteria. Please try again with some different keywords.", "rimi");  } else { $t_p_sorry_search = get_theme_mod( 't_p_sorry_search' ).' %s'; }
if ( false == get_theme_mod( 't_p_nothing_found', false ) ) { $t_p_nothing_found = esc_html__("Nothing Found", "rimi");  } else { $t_p_nothing_found = get_theme_mod( 't_p_nothing_found' ); }

?>
<div class="mt-container-wrap">
	<?php rimi_title(); ?>
<div class="container mt-content-container">
<div class="row">

	<div class="col-md-8">
		<?php if ( have_posts() ) : ?>

			<?php if ( shortcode_exists( 'posts' ) ) {

				echo do_shortcode('[posts pagination=on type=normal-right ]');

			} else {

					if (have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post();
							get_template_part( 'content', get_post_format() );
						endwhile;
						the_posts_pagination();
						?>

					<?php else : ?>
						<p><?php echo esc_html($t_p_sorry_search); ?></p>
					<?php endif;

			} ?>

		<?php else : ?>
						<div id="post-0" class="post no-results not-found">
							<h2 class="entry-title"><?php echo esc_html($t_p_nothing_found); ?></h2>
							<div class="entry-content">
								<p><?php echo esc_html($t_p_sorry_search); ?></p>

							</div>
							<?php get_search_form(); ?>
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
