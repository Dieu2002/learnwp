<?php get_header()?>
<?php
	$tax_query[] = array(
	    'taxonomy' => 'product_visibility',
	    'field'    => 'name',
	    'terms'    => 'featured',
	    'operator' => 'IN',
	);
?>
<div class="features__title__shop">
<h3>
       Our Feature Products
</h3>
</div>
<div class="shop__features__product">

<?php $args = array( 'post_type' => 'product','orderby' => 'rand','posts_per_page' => 4,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
<?php $getposts = new WP_query( $args);?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php global $product; ?>
	<div class="contaner__product__shop__content">
		<a href="<?php the_permalink(); ?>">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
		</a>
		<h4 class="title-fr"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="price-product"><?php echo $product->get_price_html(); ?></div>
		<a class="add__to__cart" href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
	</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>


<div class="features__title">
    <h3>
       Our Product
    </h3>
</div>
<div class="contaner__product__shop">
    <?php $args = array( 'post_type' => 'product','posts_per_page' =>10,); ?>
    <?php $getposts = new WP_query( $args);?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    <?php global $product; ?>
    <div class="contaner__product__shop__content">
        <a href="<?php the_permalink(); ?>" class="contaner__product__shop__image">
            <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
        </a>
        <h4 class="contaner__product__shop__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="contaner__product__shop__price">
            <?php echo $product->get_price_html(); ?>
        </div>
        <div class="add__to__cart">
        <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
        </div>
        
    </div>
    <?php endwhile;  wp_reset_postdata(); ?>
</div>
<!-- footer -->
<?php get_footer()?>




