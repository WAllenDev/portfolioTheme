<?php

get_header('frontpage');

?>
<div id="scrolling-topics">
    <div id="head-img" style="background-image: url(<?= esc_url(get_theme_mod('waptheme_options-hero_image')); ?>);">
        <div id="head-name">
            <div class="name-box">
                <div class="name-backimage">
                    <h1><?= get_theme_mod('waptheme_options-first_name'); ?></h1>
                </div>
            </div>
            <div class="name-box">
                <div class="name-backimage">
                    <h1><?= get_theme_mod('waptheme_options-last_name'); ?></h1>
                </div>
            </div>
        </div>
        <div id="navigation-header">
            <nav>
                <ul>
                    <li><a href="#introduction-container"><h2><?= get_theme_mod('waptheme_options-intro_title'); ?></h2></a></li>
                    <li><a href="#goalsSkills-container"><h2><?= get_theme_mod('waptheme_options-goals_title'); ?></h2></a></li>
                    <li><a href="#resume-container"><h2><?= get_theme_mod('waptheme_options-resume_title'); ?></h2></a></li>
                    <li><a href="#caseStudies-container"><h2><?= get_theme_mod('waptheme_options-caseStudies_title'); ?></h2></a></li>
                    <li><a href="#articles-container"><h2><?= get_theme_mod('waptheme_options-articles_title'); ?></h2></a></li>
                    <li><a href="#about-container"><h2><?= get_theme_mod('waptheme_options-about_title'); ?></h2></a></li>
                    <li><a href="#elsewhere-container"><h2><?= get_theme_mod('waptheme_options-elsewhere_title'); ?></h2></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="navigation-sticky">
        <nav class="nav-top">
            <ul>
                <li><a href="#introduction-container"><h2><?= get_theme_mod('waptheme_options-intro_title'); ?></h2></a></li>
                <li><a href="#goalsSkills-container"><h2><?= get_theme_mod('waptheme_options-goals_title'); ?></h2></a></li>
                <li><a href="#resume-container"><h2><?= get_theme_mod('waptheme_options-resume_title'); ?></h2></a></li>
                <li><a href="#caseStudies-container"><h2><?= get_theme_mod('waptheme_options-caseStudies_title'); ?></h2></a></li>
                <li><a href="#articles-container"><h2><?= get_theme_mod('waptheme_options-articles_title'); ?></h2></a></li>
                <li><a href="#about-container"><h2><?= get_theme_mod('waptheme_options-about_title'); ?></h2></a></li>
                <li><a href="#elsewhere-container"><h2><?= get_theme_mod('waptheme_options-elsewhere_title'); ?></h2></a></li>
            </ul>
        </nav>
    </div>
    <div id="body-topics">
        <div id="introduction-container" class="topic-container">
            <a href="#main">
                <div class="section-header">
                    <h2><?= get_theme_mod('waptheme_options-intro_title'); ?></h2>
                </div>
            </a>
            <div class="page-line"></div>
            <p><?= get_theme_mod('waptheme_options-intro_text'); ?></p>
        </div>
        <div id="goalsSkills-container" class="topic-container">
            <a href="#main">
                <div class="section-header">
                    <h2><?= get_theme_mod('waptheme_options-goals_title'); ?></h2>
                </div>
            </a>
            <div class="page-line"></div>
            <p><?= get_theme_mod('waptheme_options-goals_text'); ?></p>
            <div class="goals-skills-container">
                <div class="goals-bubbles-container">
                    <div class="goal-bubble">
                        <h4><?= get_theme_mod('waptheme_options-bubble1_title'); ?></h4>
                        <p><?= get_theme_mod('waptheme_options-bubble1_text'); ?></p>
                    </div>
                    <div class="goal-bubble">
                        <h4><?= get_theme_mod('waptheme_options-bubble2_title'); ?></h4>
                        <p><?= get_theme_mod('waptheme_options-bubble2_text'); ?></p>
                    </div>
                    <div class="goal-bubble">
                        <h4><?= get_theme_mod('waptheme_options-bubble3_title'); ?></h4>
                        <p><?= get_theme_mod('waptheme_options-bubble3_text'); ?></p>
                    </div>
                </div>
                <div class="skills-container">
                    <a href="<?= esc_url(get_theme_mod('waptheme_options-ps_url')); ?>" target="_blank"><img src="<?= esc_url(get_theme_mod('waptheme_options-ps_image')); ?>"></a>
                </div>
            </div>
        </div>
        <div id="resume-container" class="topic-container">
            <a href="#main">
                <div class="section-header">
                    <h2><?= get_theme_mod('waptheme_options-resume_title'); ?></h2>
                </div>
            </a>
            <div class="page-line"></div>
            <p><?= get_theme_mod('waptheme_options-resume_text'); ?></p>
            <div id="expAndEdTimeline">
                <div id="education-bubbles" class="timeline-bubbles-container">
                    <div class="timeline-header">
                        <h3><?= get_theme_mod('waptheme_options-ed_title'); ?></h3>
                    </div>
                    <div class="timeline-bubble">
                        <h4><?= get_theme_mod('waptheme_options-edbubble1_title'); ?></h4>
                        <h5><?= get_theme_mod('waptheme_options-edbubble1_sub'); ?></h5>
                        <p><?= get_theme_mod('waptheme_options-edbubble1_text'); ?></p>
                    </div>
                    <div class="timeline-bubble">
                        <h4><?= get_theme_mod('waptheme_options-edbubble2_title'); ?></h4>
                        <h5><?= get_theme_mod('waptheme_options-edbubble2_sub'); ?></h5>
                        <p><?= get_theme_mod('waptheme_options-edbubble2_text'); ?></p>
                    </div>
                </div>
                <div class="timeline"></div>
                <div id="experience-bubbles" class="timeline-bubbles-container">
                    <div class="timeline-header">
                        <h3><?= get_theme_mod('waptheme_options-exp_title'); ?></h3>
                    </div>
                    <div class="timeline-bubble">
                        <h4><?= get_theme_mod('waptheme_options-expbubble1_title'); ?></h4>
                        <h5><?= get_theme_mod('waptheme_options-expbubble1_sub1'); ?></h5>
                        <h5><?= get_theme_mod('waptheme_options-expbubble1_sub2'); ?></h5>
                        <p><?= get_theme_mod('waptheme_options-expbubble1_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="link-container resume-link-container">
                <a class="button resume-link" href="<?= get_theme_mod('waptheme_options-resume_pdf'); ?>" target="_blank"><?= get_theme_mod('waptheme_options-resume_link_text'); ?></a>
            </div>
                
                
        </div>
        <div id="caseStudies-container" class="topic-container">
            <a href="#main">
                <div class="section-header">
                    <h2><?= get_theme_mod('waptheme_options-caseStudies_title'); ?></h2>
                </div>
            </a>
            <div class="page-line"></div>
            <div class="caseStudies-thumbnail-container">
            <!-- Case Studies Query -->

            <?php
                $caseStudiesArgs = array(
                    'post_type'         =>  'post',
                    'category_name'     =>  'Case Study',
                    'posts_per_page'    =>  5,
                    'no_found_rows'     =>  true,
                );

                $caseStudiesQuery = new WP_Query( $caseStudiesArgs );

                if  ( $caseStudiesQuery->have_posts() ) {
                    while ( $caseStudiesQuery->have_posts() ) {
                        $caseStudiesQuery->the_post();
                        ?>
                            <div class="case-study-thumbnail" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                                <a href="<?= get_permalink(); ?>">
                                    <div class="header-container">
                                        <h3 class="title"><?= get_the_title(); ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                } else {
                    echo "<h2>No Case Studies Found</h2>";
                }
                wp_reset_postdata();
            ?>
            </div>
            <div class="link-container archive-link-container">
                <a href="<?= get_category_link( get_cat_ID('Case Study')) ?>" class="button archive-link"><?= get_theme_mod('waptheme_options-caseStudies_more'); ?></a>
            </div>


        </div>
        <div id="articles-container" class="topic-container">
            <a href="#main">
                <div class="section-header">
                    <h2><?= get_theme_mod('waptheme_options-articles_title'); ?></h2>
                </div>
            </a>
            <div class="page-line"></div>
            <div class="entry-thumbnails-container">
            <!-- Articles Custom Query -->
                <?php
                    $articlesArgs = array(
                        'post_type'     =>  'post',
                        'category_name' =>  'Article',
                        'posts_per_page'=>  5,
                        'no_found_rows' =>  true,
                    );

                    $articlesQuery = new WP_Query( $articlesArgs );

                    if  ( $articlesQuery->have_posts() ) {
                        $articlesQuery->the_post();
                        ?>
                            <div class="featured-entry-thumbnail" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
                                <a href="<?= get_the_permalink(); ?>">
                                    <div class="entry">
                                        <div class="entry-header">
                                            <h3><?= get_the_title(); ?></h3>
                                        </div>
                                        <div class="entry-content">
                                            <p><?= get_the_excerpt();?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        while ( $articlesQuery->have_posts() ) {
                            $articlesQuery->the_post();
                            ?>
                                <div class="entry-thumbnail" style="background-image: url(<?= get_the_post_thumbnail_url();?>);">
                                    <a href="<?= get_the_permalink(); ?>">
                                        <div class="entry-header">
                                            <h3><?= get_the_title(); ?></h3>
                                        </div>
                                    </a>
                                </div>
                            <?php
                        }
                    } else {
                        echo "<h2>No Articles Found</h2>";
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <div class="link-container archive-link-container">
                <a class="button archive-link"><?= get_theme_mod('waptheme_options-articles_more'); ?></a>
            </div>      
        </div>
    </div>
</div>
<div id="about-container" class="topic-container">
    <a href="#main">    
        <div class="header-container">
            <h3><?= get_theme_mod('waptheme_options-about_title'); ?></h3>
        </div>
    </a>
    <div class="about-entry-container">
        <div id="about-image" style="background-image: url(<?= esc_url(get_theme_mod('waptheme_options-about_image'));?>"></div>
        <div id="about-entry">
            <p><?= get_theme_mod('waptheme_options-about_text'); ?></p>
        </div>
    </div>
</div>
<div id="elsewhere-container" class="topic-container">
    <div id="social-link-container">
        <div class="social-link">
            <a href="<?= esc_url(get_theme_mod('waptheme_options-twitter_url')); ?>" target="_blank">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/wapIconTwitter.png">
                <p><?= get_theme_mod('waptheme_options-twitter_text'); ?></p>
            </a>
        </div>
        <div class="social-link">
            <a href="<?= esc_url(get_theme_mod('waptheme_options-github_url')); ?>" target="_blank">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/wapIconGitHub.png">
                <p><?= get_theme_mod('waptheme_options-github_text'); ?></p>
            </a>
        </div>
        <div class="social-link">
            <a href="<?= esc_url(get_theme_mod('waptheme_options-instagram_url')); ?>" target="_blank">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/wapIconInstagram.png">
                <p><?= get_theme_mod('waptheme_options-instagram_text'); ?></p>
            </a>
        </div>
        <div class="social-link">
            <a href="<?= esc_url(get_theme_mod('waptheme_options-linkedin_url')); ?>" target="_blank">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/wapIconLinkedIn.png">
                <p><?= get_theme_mod('waptheme_options-linkedin_text'); ?></p>
            </a>
        </div>
        <div class="social-link">
            <a href="<?= esc_url(get_theme_mod('waptheme_options-so_url')); ?>" target="_blank">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/wapIconStackOverflow.png">
                <p><?= get_theme_mod('waptheme_options-so_text'); ?></p>
            </a>
        </div>
        <div class="social-link">
            <a href="<?= esc_url(get_theme_mod('waptheme_options-ps_url')); ?>" target="_blank">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/wapIconPluralSight.png">
                <p><?= get_theme_mod('waptheme_options-ps_text'); ?></p>
            </a>
        </div>
        <div class="social-link"></div>
    </div>
    <div id="contact-form-container">
        <form>
            <fieldset>
                <input id="name" value="<?= get_theme_mod('waptheme_options-contact_name'); ?>">
                <input id="email" value="<?= get_theme_mod('waptheme_options-contact_email', true); ?>">
            </fieldset>
            <textarea id="message" name="message"><?= get_theme_mod('waptheme_options-contact_message'); ?></textarea>
            <button type="button"><?= get_theme_mod('waptheme_options-contact_submit'); ?></button>
        </form>
    </div>  
</div>

<?php
get_footer();