<!-- page home -->
<?php get_header()?>
<div>
    <h3 class="ft">Categories of articles</h3>
</div>
<div class="banner__category">
    <?php
    $args_cat=array(
        'type' => 'post',
        'number' => 4,
    );
    $categories = get_categories($args_cat);
        foreach($categories as $category) {
           echo '<div class="col-md-3"><a class="name__cate" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
            $image_url = z_taxonomy_image_url($category->term_id);
            printf( '<a href="'.get_category_link($category->term_id).'"><img class="pic__image" src="' . $image_url . '"></a>');
            echo '</div>';
    }
    ?>
</div>
<div class="features__title">
    <h3>
    Our Posts
    </h3>
</div>
<div class="features">
    <?php get_template_part('product-post') ?>
</div>
<div class="another__post">
    <?php get_template_part('page-shop') ?>
</div>

<div class="slideshow__post">

</div>
<?php get_footer()?>