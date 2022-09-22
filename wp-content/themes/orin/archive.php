<?php get_header(); ?>
<!-- kiểm tra trang hiện tại hĩ-->
<section id="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content'); ?>
		<?php endwhile; ?>
        <?php dieu_pagination();?>
		<?php else : ?>
			<?php get_template_part('content','none' ); ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>