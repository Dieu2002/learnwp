<?php 
  $args = array(
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'post_type' => 'picture'
  );
  $the_query = new WP_Query( $args );
?>
<section id="picture-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part('content','none' ); ?>
		<?php endif; ?>
</section>
<?php wp_reset_query(); ?>