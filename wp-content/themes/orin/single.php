<?php get_header(); ?>
<!-- kiểm tra trang hiện tại hihi-->
<section id="main__content">
		<div class="content__post">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php dieu_entry_header()?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php else : ?>
			<?php the_excerpt()?>
		<?php endif; ?>
		</div>
</section>
<?php get_footer(); ?>