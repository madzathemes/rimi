<?php get_header(); ?>
<div class="mt-container-wrap">
	<?php rimi_title(); ?>
	<div class="container mt-content-container">
		<div class="row">
			<div class="col-md-8  floatleft">
				<?php if ( shortcode_exists( 'posts' ) ) {

				echo do_shortcode('[posts pagination=on type=normal-right ]');

			} else {

				if (have_posts() ) { ?>

					<?php while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					the_posts_pagination();

				}

			}?>
			</div>
			<div class="col-md-4  floatright">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
