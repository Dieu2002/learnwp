<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php dieu_thumbnail( 'large' ); ?>
		<?php dieu_entry_header(); ?>
		<?php
			/*
			 * Đếm số lượng attachment có trong post
			 */
			$attachments = get_children( array( 'post_parent'=>$post->ID ) );
			$attachment_number = count($attachments);
			printf( __('This image post contains %1$s photos', 'dieu'), $attachment_number );
		?>
	</header>
	<div class="entry-content">
		<?php dieu_entry_content(); ?>
		<?php
			if ( is_single() ) :
				dieu_entry_tag();
			endif;
		?>
	</div>
</article>