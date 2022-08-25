<?php get_header(); ?>
<!-- kiểm tra trang hiện tại -->
<!-- get_template_part( 'author-bio' ): tạo file có tên là author-bio, viết nội dụng giới thiệu tác gỉa
   comments_template(): trả về  khung và những danh sách comment
-->
<section id="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', get_post_format() ); ?>
            <?php get_template_part( 'author-bio' ); ?>
            <?php comments_template(); ?>
		<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part('content','none' ); ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>