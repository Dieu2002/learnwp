<!-- kiểm tra xem sidebar đó đã có widget chưa 
    nếu có thì hiển thị kh thì thoii
-->


<div class="main__sidebar">
    <h3 class="main__sidebar__title">Recent posts</h3>
    <div class="main__sidebar__content">
        <?php query_posts(array('orderby' => 'rand', 'showposts' => 3));
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post__main__main__sidebar'); ?>>
            <a href="<?php the_permalink(); ?>">
                <?php dieu_thumbnail('thumbnail', true, 'post__main__main__sidebar__image'); ?>
            </a>
            <div class="post__main__sidebar__content">
              
                <?php dieu_entry_header('post__main__sidebar__content__title'); ?>
                <div class="post__main__sidebar__content">
                    <?php the_excerpt(4); ?>
                </div>
               
        </article>
        <?php endwhile;
    endif;
    wp_reset_postdata(); ?>

    </div>
</div>
<div class="sidebar__cate">
    <h2 class="sidebar__cate">All categories</h2>
    <div class="sidebar__cate__content">
        <?php
    $categories = get_categories('orderby=name');
    if ($categories) {
      foreach ($categories as $category) {
		echo '<div class="sidebar__cate__content__title">';
        echo '<a  class="sidebar__cate" href="' . get_category_link($category->term_id) . '">' . 
		'<span class="sidebar__cate__item-name">' . $category->name .'</span>' . 
	 	'</a>';
		$image_url = z_taxonomy_image_url($category->term_id);
    printf( '<a href="'.get_category_link($category->term_id).'"><img class="sidebar__cate__item-image" src="' . $image_url . '"></a>');
	  echo '</div>';
      }
}?>
    </div>
</div>