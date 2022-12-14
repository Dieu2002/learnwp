<?php get_header(); ?>
<!-- kiểm tra trang hiện tại -->
<section id="main-content">
    <div class="archive-title">
        <div class="author-box"><?php
		// Hiển thị avatar của tác giả
		echo '<div class="author-avatar">'. get_avatar( get_the_author_meta( 'ID' ) ) . '</div>';
		// hiển thị tên tác giả
		printf( '<h3>'. __( 'Posts by %1$s', 'thachpham' ) . '</h3>', get_the_author() );


		// Hiển thị giới thiệu của tác giả
		echo '<p>'. get_the_author_meta( 'description' ) . '</p>';


		// Hiển thị field website của tác giả
		if ( get_the_author_meta('user_url' ) ) : printf( __('<a href="%1$s" title="Visit to %2$s website">Visit to my website</a>', 'thachpham'),
			get_the_author_meta( 'user_url' ), get_the_author() );
		endif;
	?></div>
        <div>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content', get_post_format() ); ?>
        <?php endwhile; ?>
        <?php dieu_pagination();?>
        <?php else : ?>
        <?php get_template_part('content','none' ); ?>
        <?php endif; ?>
</section>
<?php get_footer(); ?>