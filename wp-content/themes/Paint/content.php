<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
 	        <?php dieu_thumbnail('thumbnail'); ?>
        </div>
        <div class="entry-header">
           <?php dieu_entry_header(); ?>
           <?php dieu_entry_meta() ?>
       </div>
       <div class="entry-content">
               <?php dieu_entry_content(); ?>
               <?php ( is_single() ? dieu_entry_tag() : ''); ?>
       </div>
</article>