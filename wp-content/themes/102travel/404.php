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
                            <div class="row" id="block-main-container">
                                <div class="col">
                                    <div style="padding: 30px 0"><img src="<?php bloginfo('template_directory') ?>/img/404.png" width="100%"></div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <?php get_template_part('footer') ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>