<?php
get_header();

if(have_posts()){
    while (have_posts()){
        the_post();
        ?>
            <article class="main-reading">
                <div class="entry-header">
                    <div class="entry-title">
                        <h2><?= get_the_title(); ?></h3>
                    </div>
                </div>
                <div class="entry">
                    <?= get_the_content(); ?>
                </div>
            </article>
        <?php
    }
} else {
    echo "There are no posts to display";
}

get_footer();