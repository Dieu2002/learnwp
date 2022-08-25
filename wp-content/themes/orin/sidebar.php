<!-- kiểm tra xem sidebar đó đã có widget chưa 
    nếu có thì hiển thị kh thì thoii
-->
<?php wp_head() ?>
<?php
		if ( is_active_sidebar('main-sidebar') ) {
			dynamic_sidebar( 'main-sidebar');
		} else {
			_e('This is widget area. Go to Appearance -> Widgets to add some widgets.', 'dieu');
		}
?>
<?php wp_footer() ?>