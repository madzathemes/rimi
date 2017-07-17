<?php function mellany_single_cat() {?>

  <div class="single-cat-wrap"><?php echo get_the_category_list(); ?></div>

<?php } ?>
<?php function mellany_single_title() {?>

  <h1 class="single-title"><?php echo get_the_title(); ?></h1>

<?php } ?>
<?php function mellany_single_social() {

$share_top = "";
$share_top = get_post_meta(get_the_ID(), "magazin_post_share_top", true);

/* Share Meta from Magazin framework */
$share = get_post_meta(get_the_ID(), "magazin_share_count", true);
$shares = "0";
if (function_exists('magazin_theme_setup')) {
  $shares = magazin_get_shares(get_the_ID());
}
if (!empty($share)){
	$shares = $share+$shares;
}
/* View Meta from Magazin framework */
$view = get_post_meta(get_the_ID(), "magazin_view_count", true);
$views = get_post_meta(get_the_ID(), "magazin_post_views_count", true);
$viewes = $views + "0";
if (!empty($view)){ $viewes = $view + $views; $viewes = number_format($viewes); }

$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

?>
  <div class="after-title">
    <div class="pull-left">
      <div class="author-img pull-left">
        <?php global $post; echo get_avatar( $post->post_author, 30 ); ?>
      </div>
      <div class="author-info">
        <div class="mt-author-soc">
          <?php $twitterHandle = get_the_author_meta('twitter');
          $facebookHandle = get_the_author_meta('facebook');
          $googleHandle = get_the_author_meta('gplus');
          $instagramHandle = get_the_author_meta('instagram');
          $linkedinHandle = get_the_author_meta('linkedin');
          $pinterestHandle = get_the_author_meta('pinterest');
          $youtubeHandle = get_the_author_meta('youtube');
          $dribbbleHandle = get_the_author_meta('dribbble'); ?>
          <?php if(!empty($twitterHandle)) { ?><a class="mt-bio-twitter" href="<?php echo esc_url($twitterHandle); ?>"></a> <?php } ?>
          <?php if(!empty($facebookHandle)) { ?><a class="mt-bio-facebook" href="<?php echo esc_url($facebookHandle); ?>"></a> <?php } ?>
          <?php if(!empty($googleHandle)) { ?><a class="mt-bio-google" href="<?php echo esc_url($googleHandle); ?>"></a> <?php } ?>
          <?php if(!empty($instagramHandle)) { ?><a class="mt-bio-instagram" href="<?php echo esc_url($instagramHandle); ?>"></a> <?php } ?>
          <?php if(!empty($linkedinHandle)) { ?><a class="mt-bio-linkedin" href="<?php echo esc_url($linkedinHandle); ?>"></a> <?php } ?>
          <?php if(!empty($pinterestHandle)) { ?><a class="mt-bio-pinterest" href="<?php echo esc_url($pinterestHandle); ?>"></a> <?php } ?>
          <?php if(!empty($youtubeHandle)) { ?><a class="mt-bio-youtube" href="<?php echo esc_url($youtubeHandle); ?>"></a> <?php } ?>
          <?php if(!empty($dribbbleHandle)) { ?><a class="mt-bio-dribbble" href="<?php echo esc_url($dribbbleHandle); ?>"></a> <?php } ?>
        </div>
        <strong><?php the_author_posts_link(); ?></strong>
        <small class="color-silver-light"><?php the_date(); ?></small>
      </div>
    </div>
    <?php if(class_exists('md_walker')) { ?>
      <div class="post-statistic pull-left">
        <?php if(!empty($shares)){ ?><span class="stat-shares color-silver-light"><strong><?php echo esc_attr($shares); ?></strong></span><?php } ?>
        <?php if(!empty($viewes)){ ?><span class="stat-views"><strong><?php echo esc_attr($viewes) ?></strong> </span><?php } ?>
        <?php if (get_comments_number()!="0") { ?><span class="stat-comments color-silver-light"><?php echo get_comments_number(); ?></span><?php } ?>
      </div>
    <?php } ?>
    <?php if($share_top=="" or $share_top == "yes"){ ?>
    <ul class="share top">
      <li class="share-facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html__('Share Post', 'mellany'); ?></span></a></li>
      <?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
      <li class="share-twitter"><a href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html__('Share On Twitter', 'mellany'); ?></span></a></li>
      <li class="share-more">
        <a href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google"></div></a>
        <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest"></div></a>
        <div class="share-more-wrap"><div class="share-more-icon">+</div></div>
      </li>
    </ul>
    <?php } ?>
    <div class="clearfix"></div>
  </div>

<?php } ?>
