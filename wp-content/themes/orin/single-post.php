<?php get_header(); ?>
<!-- kiểm tra trang hiện tại xem có bài post hay kh-->
<section id="single__post__container">
	<div class="single__post__content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php dieu_entry_header()?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php else : ?>
		<?php the_excerpt()?>
		<?php endif; ?>
		</div>
	<div class="single__post__sidebar">
        <?php get_sidebar()?>
    </div>
</section>
<?php get_footer(); ?>