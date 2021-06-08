<?php
/**
 * The template for displaying all single posts and attachments
 * 
 */

 get_header(); ?>

<section id="archive-thumbnails">
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
                <div class="archive-entry" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                    <a href="<?= get_permalink(); ?>">
                        <div class="archive-header">
                            <div class="archive-title">
                                <h3><?= get_the_title(); ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
        }
    } else {
        echo "<p>There are no posts to display</p>";
    }
?>
</section>
<div class="pagination-container">
    <button type="button" class="pagination-button">Previous</button>
    <div class="pages-symbol"></div>
    <button type="button" class="pagination-button">Next</button>
</div>

<?php
get_footer();