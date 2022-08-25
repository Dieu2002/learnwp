

<?php get_header(); ?>
<!-- kiểm tra trang hiện tại -->
<section id="main-content">
    <div class="archive-title">
        <!-- kiểm tra trang hiện tại có tag hay không, nếu ta đang ở trang tag or cat thì hắn sẽ hiển thị
        single_cat_title() và single_tag_title(): trả về tiêu đề của một category hoặc tiêu đề của một tag nào đó

      -->
        <h2>
			<?php
				if ( is_tag() ) :
					printf( __('Posts Tagged: %1$s','dieu'), single_tag_title( '', false ) );
				elseif ( is_category() ) :
					printf( __('Posts Categorized: %1$s','dieu'), single_cat_title('', false ) );
				elseif ( is_day() ) :
					printf( __('Daily Archives: %1$s','dieu'), get_the_time('l, F j, Y') );
				elseif ( is_month() ) :
					printf( __('Monthly Archives: %1$s','dieu'), get_the_time('F Y') );
				elseif ( is_year() ) :
					printf( __('Yearly Archives: %1$s','dieu'), get_the_time('Y') );
				endif;
			?>
		</h2>
    </div>
    <div>
    <!-- đoạn hiển thị tag của cat -->
    <?php if ( is_tag() || is_category() ) : ?>
		<div class="archive-description">
			<?php echo term_description(); ?>
		</div>
	<?php endif; ?>
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