<?php get_header(); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); $author_id = $curauth->nickname; ?>
<div class="mt-container-wrap">
	<?php rimi_title(); ?>
	<div class="container mt-content-container">
		<div class="row">
			<div class="col-md-8  floatleft">
				<?php  if ( shortcode_exists( 'posts' ) ) {

					echo do_shortcode('[posts pagination=on author='.$author_id.' type=normal-right ]');

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
