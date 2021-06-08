<?php
get_header();

if(have_posts()){
    the_post();
    ?>
        <article class="main-reading">
            <div class="entry-header" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                <div class="entry-title">
                    <h2><?= get_the_title(); ?></h3>
                </div>
            </div>
            <div class="entry">
                <?= get_the_content(); ?>
            </div>
        </article>
    <?php
} else {
    echo "There is no content here.";
}

get_footer();