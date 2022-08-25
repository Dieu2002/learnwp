<!-- 
-- get_avatar: trả về hình ảnh đại diện của tg
---get_the_author_meta(): lấy info of tg dựa theo id hiện tại 
--- get_author_posts_url( get_the_author_meta(): trả về đường link của tg theo cái id hiện tại
--- get_the_author: tên tác giả 
-->
<div class="entry-footer">
	<div class="author-box">
		<div class="autor-avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?> 
			<?php ?>
		</div>
		<h3><?php printf('Written by <a href="%1$s">%2$s</a>',
			get_author_posts_url( get_the_author_meta('ID') ),
			get_the_author() ); ?></h3>
		<p><?php echo get_the_author_meta( 'description' ); ?></p>
	</div>
</div>                                                                                              