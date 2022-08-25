<?php get_header(); ?>
<!-- kiểm tra trang hiện tại -->
<section id="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php else : ?>
			<?php the_content();?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>