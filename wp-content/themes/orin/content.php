<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content__post">
        <div class="content__box">
            <div class="content__post__item">
                <div class="content__title">
                    <?php dieu_entry_header()?>
                </div>
                <div class="content__image">
                    <?php dieu_thumbnail('medium') ?>
                </div>
            </div>
        </div>
        <div class="content__sidebar">
            <?php get_sidebar()?>
        </div>
    </div>
</article>