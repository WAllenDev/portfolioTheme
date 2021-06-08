<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?> >
        <header>
            <div class="header-container"?>
                <a href="<?= get_home_url(); ?>">
                    <h1><?= get_bloginfo('name'); ?></h1>
                </a>
            </div>
        </header>
        <main id="main">