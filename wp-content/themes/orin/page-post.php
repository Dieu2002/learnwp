<?php get_header(); ?>

<div class="page__post">
    <?php
$type = 'post';
$args = array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => 4,
  
);
$my_query = null;
$my_query = new WP_Query($args);
if ($my_query->have_posts()) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <?php dieu_thumbnail('thumbnail', true, 'post__image'); ?>
        <div class="post__content">
            <?php dieu_entry_header('post__content__title'); ?>
            <div class="post__content__excerpt">
                <?php dieu_entry_content(); ?>
            </div>
            <?php dieu_entry_meta('post__content__meta'); ?>
    </article>
    <?php
  endwhile;
}
wp_reset_postdata();
?>
    <div class="post__sidebar">
    <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer(); ?>