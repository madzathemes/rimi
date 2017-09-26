<article id="post-<?php the_ID(); ?>" class="mt-blog-post <?php if ( is_sticky() and !is_single()){ ?> post_sticky <?php } ?>">

  <?php $images = get_post_meta( get_the_ID(), 'magazin_post_gallery_images', 1 ); ?>

  <?php if (!is_single()){ ?>
    <header class="entry-header">
      <h2 class="entry-title mt-blog-post-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();  ?></a></h2>
    </header>
    <div class="mt-post-meta"><?php echo rimi_entry_meta(); ?></div>
  <?php } ?>

  <?php if ( !is_search() ) { ?>
		<div class="entry-content">
			<?php if( ! is_single()) { the_excerpt(); ?>
      <a  class="mt-post-btn mt-radius" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'rimi' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo esc_html__( 'Read More', 'rimi' );  ?></a>
    <?php	} else { the_content(); }  ?>
		</div>
	<?php } ?>

  <div class='clear'></div>

</article>
