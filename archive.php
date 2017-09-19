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

					<?php while ( have_posts() ) : the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'rimi' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a></h2>
					<?php endwhile;
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
