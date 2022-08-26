<!-- hiển thị các bài post -->
<?php
$args = array(
  'post_type' => 'picture',// hiển thị custom post type có tên là pricure
  'post_status' => 'publish',
  'posts_per_page' => 1,
);
$the_query = null;
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
  while ($the_query->have_posts()) : $the_query->the_post(); 
  $price= get_post_meta(get_the_ID(), 'original_price', true);
  $sale_price=get_post_meta(get_the_ID(), 'sale_price', true);
  $desc=get_post_meta(get_the_ID(), 'desc', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('picture-item'); ?>>
    <?php dieu_thumbnail('',false,'picture__image')?>
    <div class="pictures__content">
        <div class="pictures__content-post">
            <?php dieu_entry_header()?>
        </div>
        <div class="pictures__content-price">
            <del class="pictures__content__price-original"><?php echo $price?>VND</del>
            <span class="pictures__content__price-sale"><?php echo $sale_price?>VND</span>
        </div>
        <div class="pictures__content-desc">
                <p><?php echo $desc?></p>
        </div>
        <div class="pictures__content-add">
                <a class="pictures__content-add-to-cart">
                    <button>Add to cart </button>
                </a>
        </div>
    </div>
</article>
<?php
  endwhile;
}
// Reset Post Data
wp_reset_postdata();
?>