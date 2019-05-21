<!DOCTYPE html>
<html>
<head lang="en">
    <?php get_template_part('include/head') ?>
</head>
<body class="page-category">
<div id="hd-container" class="hd-container">
    <?php get_template_part('include/menu') ?>
    <div class="hd-pusher">
        <div class="hd-content">
            <div class="hd-content-inner">
                <div id="page-wrapper">
                    <div class="hd-touch-layer"></div>
                    <?php get_template_part('header') ?>
                    <main id="main" class="main-content clearfix">
                        <div class="container">
                            <div class="box box--shadow">
                                <div class="sidebar-content sidebar-first">
                                    <?php get_sidebar('page') ?>
                                    <?php
                                    if ( have_posts() ) {
                                        while ( have_posts() ) {
                                            the_post();
                                            ?>
                                    <div class="content wysiwyg">
                                        <h1 class="page-title"><?php the_title() ?></h1>
                                        <?php the_content() ?>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </main>
                    <?php get_template_part('footer') ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>