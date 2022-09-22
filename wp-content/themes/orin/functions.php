<?php
 
//    Thiết lập các hằng dữ liệu quan trọng
//    THEME_URL = get_stylesheet_directory() – đường dẫn tới thư mục theme
//    CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );
  // Load file /core/init.php
  // Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  require_once( CORE . '/init.php' );
  // Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
  if ( ! isset( $content_width ) ) {
  	 // Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
  	$content_width = 620;
   }
  // Thiết lập các chức năng sẽ được theme hỗ trợ
  if ( ! function_exists( 'dieu_theme_setup' ) ) {
  	 // Nếu chưa có hàm dieu_theme_setup() thì sẽ tạo mới hàm đó
  	function dieu_theme_setup() {	
  		 // Thiết lập theme có thể dịch được
  		$language_folder = THEME_URL . '/languages';
  		load_theme_textdomain( 'dieu', $language_folder );
  		 // Tự chèn RSS Feed links trong <head> 
  		add_theme_support( 'automatic-feed-links' );
  		 // Thêm chức năng post thumbnail
  		add_theme_support( 'post-thumbnails' );
  		 // Thêm chức năng title-tag để tự thêm <title>
  		add_theme_support( 'title-tag' );
  		 // Thêm chức năng post format
  		add_theme_support( 'post-formats',
  			array(
  				'video',
  				'image',
  				'audio',
  				'gallery',
          'link'
  			)
  		 );
 
  		 // Thêm chức năng custom background
  		$default_background = array(
  			'default-color' => '#e8e8e8',
  		);
  		add_theme_support( 'custom-background', $default_background ); 
      // Tạo menu cho theme
      register_nav_menu ('primary-menu', __('Primary Menu', 'dieu') );
      // Tạo sidebar cho theme
      $sidebar = array(
        'name' => __('Main Sidebar', 'dieu'),
        'id' => 'main-sidebar',
        'description' => 'Main sidebar for dieu theme',
        'class' => 'main-sidebar',
        'before_title' => '<h3 class="widgettitle">',
        'after_sidebar' => '</h3>'
        );
      register_sidebar( $sidebar );
  	}
  	add_action ( 'init', 'dieu_theme_setup' );
  }


//   thiết lập teamplate------------------------------------------------
// thiết lập logo 
if ( ! function_exists( 'dieu_logo' ) ) {
  function dieu_logo() {?>
    <div class="logo">
      <div class="site-name">
        <?php if ( is_home() ) {
          printf(
            '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } else {
          printf(
            '</p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } // endif ?>
      </div>

    </div>
  <?php }
}




  // Thiết lập hàm hiển thị menu
  
  if ( ! function_exists( 'dieu_menu' ) ) {
    function dieu_menu( $slug ) {
      $menu = array(
        'theme_location' => $slug,
        'container' => 'nav',
        'container_class' => $slug,
      );
      wp_nav_menu( $menu );
    }
  }

/**
  *@ Tạo hàm phân trang cho index, archive.
  *@ Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
  *@ dieu_pagination()
  **/
  if ( ! function_exists( 'dieu_pagination' ) ) {
    function dieu_pagination() {
      /*
       * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
       */
      if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
        return '';
      }
    ?>
<nav class="pagination" role="navigation">
    <?php if ( get_next_post_link() ) : ?>
    <div class="prev"><?php next_posts_link( __('Older Posts', 'dieu') ); ?></div>
    <?php endif; ?>


    <?php if ( get_previous_post_link() ) : ?>
    <div class="next"><?php previous_posts_link( __('Newer Posts', 'dieu') ); ?></div>
    <?php endif; ?>


</nav><?php
    }
  }


  /**
  *@ Hàm hiển thị ảnh thumbnail của post.
  *@ Ảnh thumbnail sẽ không được hiển thị trong trang single
  *@ Nhưng sẽ hiển thị trong single nếu post đó có format là Image
  *@ dieu_thumbnail( $size )
  **/
  if ( ! function_exists( 'dieu_thumbnail' ) ) {
    function dieu_thumbnail( $size ) {
      // Chỉ hiển thumbnail với post không có mật khẩu
      if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
<figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
      endif;
    }
  }

  /**
  * @ Hàm hiển thị tiêu đề của post trong .entry-header
  * @ Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
   *@ Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
   *@ dieu_entry_header()
   **/
   if ( ! function_exists( 'dieu_entry_header' ) ) {
     function dieu_entry_header() {
       if ( is_single() ) : ?>
<h1 class="entry-title">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
    </a>
</h1>
<?php else : ?>
<h2 class="entry-title">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
    </a>
</h2><?php
       endif;
     }
   }

/**
 *@ Hàm hiển thị thông tin của post (Post Meta)
 *@ dieu_entry_meta()
 **/
if( ! function_exists( 'dieu_entry_meta' ) ) {
  function dieu_entry_meta() {
    if ( ! is_page() ) :
      echo '<div class="entry-meta">';
        // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
        printf( __('<span class="author">Posted by %1$s</span>', 'dieu'),
          get_the_author() );


        printf( __('<span class="date-published"> at %1$s</span>', 'dieu'),
          get_the_date() );


        printf( __('<span class="category"> in %1$s</span>', 'dieu'),
          get_the_category_list( ', ' ) );


        // Hiển thị số đếm lượt bình luận
        if ( comments_open() ) :
          echo ' <span class="meta-reply">';
            comments_popup_link(
              __('Leave a comment', 'dieu'),
              __('One comment', 'dieu'),
              __('% comments', 'dieu'),
              __('Read all comments', 'dieu')
             );
          echo '</span>';
        endif;
      echo '</div>';
    endif;
  }
}
  /**
  *@ Hàm hiển thị nội dung của post type
  *@ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
  *@ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
  *@ dieu_entry_content()
  **/
  if ( ! function_exists( 'dieu_entry_content' ) ) {
    function dieu_entry_content() {
      if ( ! is_single() && is_page() ) :
        the_content();
      else:
        the_excerpt();
        /*
         * Code hiển thị phân trang trong post type
         */
        $link_pages = array(
          'before' => __('<p>Page:','dieu'),
          'after' => '</p>',
          'nextpagelink' => __('Next page','dieu' ),
          'previouspagelink' => __('Previous page','dieu' )
        );
        wp_link_pages( $link_pages );
      endif;
    }
  }
  
  /**
  *@ Hàm hiển thị tag của post
 * @ dieu_entry_tag()
  **/
  if ( ! function_exists( 'dieu_entry_tag' ) ) {
    function dieu_entry_tag() {
      if ( has_tag() ) :
        echo '<div class="entry-tag">';
        printf( __('Tagged in %1$s', 'dieu'), get_the_tag_list( '', ',' ) );
        echo '</div>';
      endif;
    }
  }
 
//  nhúng file css
 /**
 * @ Chèn CSS và Javascript vào theme
 *@ sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
  **/
  function dieu_styles() {
    /*
     * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
     * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
     */

    wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
    wp_register_style( 'reset-style', get_template_directory_uri() . '/css/reset.css', 'all' );
    // wp_register_style( 'app-style', get_template_directory_uri() . '/asset/css/app.css', 'all' );
  


    wp_register_style( 'header-style', get_template_directory_uri() . '/css/header.css', 'all' );
    wp_register_style( 'footer-style', get_template_directory_uri() . '/css/footer.css', 'all' );
    wp_register_style( 'content-style', get_template_directory_uri() . '/css/content.css', 'all' );

    wp_enqueue_style( 'main-style' );
    wp_enqueue_style( 'reset-style');
    wp_enqueue_style( 'header-style');
    wp_enqueue_style( 'footer-style');
    // wp_enqueue_style( 'app-style');

    wp_enqueue_style( 'content-style');


  }
  add_action( 'wp_enqueue_scripts', 'dieu_styles' );
/*Custom Post type start*/



function change_urls($page_html) {
  if(defined('LOCALTUNNEL_ACTIVE') && LOCALTUNNEL_ACTIVE === true) {

    $wp_home_url = esc_url(home_url('/'));
    $rel_home_url = wp_make_link_relative($wp_home_url);

    $esc_home_url = str_replace('/', '\/', $wp_home_url);
    $rel_esc_home_url = str_replace('/', '\/', $rel_home_url);

    $rel_page_html = str_replace($wp_home_url, $rel_home_url, $page_html);
    $esc_page_html = str_replace($esc_home_url, $rel_esc_home_url, $rel_page_html);

    return $esc_page_html;
  }
}


function buffer_start_relative_url() { 
  if(defined('LOCALTUNNEL_ACTIVE') && LOCALTUNNEL_ACTIVE === true) {
    ob_start('change_urls'); 
  }
}
function buffer_end_relative_url() { 
  if(defined('LOCALTUNNEL_ACTIVE') && LOCALTUNNEL_ACTIVE === true) {
    @ob_end_flush(); 
  }
}

add_action('registered_taxonomy', 'buffer_start_relative_url');
add_action('shutdown', 'buffer_end_relative_url');


function dieu_get_post($query){
  if( $query->is_archive() && $query->is_main_query() ) : // is_main_query được sử dụng để tránh nó can thiệp vào truy vấn không phải mặc định
    $query->set('orderby','rand'); // orderby=rand => sắp xếp bài ngẫu nhiên
    $query->set('posts_per_page', '1'); // posts_per_page=1 => hiển thị 1 bài mỗi trang
  endif;
}  

add_action( 'pre_get_posts', 'dieu_get_post' );

function change_copyright($output){
  $output='Hello, I am Dieu';
  return $output;
}
add_filter('dieu_copyright','change_copyright');

add_filter( 'widget_text', 'do_shortcode' );

//function cart

 	
?>