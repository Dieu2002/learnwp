<!-- hiển thị các bài post -->
<?php
$args = array(
 'post_type' => 'post',
 'post_status' => 'publish',
 'posts_per_page' => 3,
 'orderby'=>'rand',
);
$the_query = null;
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
 while ($the_query->have_posts()) : $the_query->the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('picture-feature'); ?>>
    <div class="features__group-item">

        <div class="picture__feature__content">
            <div class="picture__feature__content__title">
                <?php dieu_entry_header()?>
            </div>
            <div class="picture__feature__content__image">
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
                </a>
            </div>
            <div class="picture__feature__content__desc">
                <p><?php the_excerpt(15)?></p>
            </div>
        </div>
    </div>
</article>
<?php
 endwhile;
}
// Reset Post Data
wp_reset_postdata();
?>