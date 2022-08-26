<!-- hiển thị all các bài post -->
<?php
$type = 'post';
$args = array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => 3,
);
$the_query = null;
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
  while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('pic-item'); ?>>
      <?php dieu_thumbnail('thumbnail','pic_image')?>
      <div class="pic__item__content">
        <?php dieu_entry_header() ?>
        <?php dieu_entry_content()?>
    </article>
<?php
  endwhile;
}
// Reset Post Data
wp_reset_postdata();
?>