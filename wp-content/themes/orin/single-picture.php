<!-- kiểm tra xem bài post có hiển thị chưa 
-->
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="post">
	<?php the_content() ?>
	<?php the_post_thumbnail(); ?>
	</div>		
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer(); ?>
