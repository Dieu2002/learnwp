<?php get_header(); ?>
<!-- kiểm tra trang hiện tại -->
<section id="main__content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('content', get_post_format() ); ?>
    <?php endwhile; ?>
    <?php dieu_pagination();?>
    <?php else : ?>
    <?php get_template_part('content','none' ); ?>
    <?php endif; ?>
</section>
<section class="sidebar__content">
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>