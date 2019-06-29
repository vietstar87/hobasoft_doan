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
                                <?php get_sidebar() ?>
                                <div class="col-md-9 category-content">
                                    <?php get_template_part('slide') ?>

                                    <div id="category_content">
                                        <div class="block branding branding--travel category-header"
                                             id="block-main-category-header">
                                            <div class="block__header  has-branding">
                                                <h1 class="block__title category-header-heading">
                                                    <span class="block__branding"><i class="hd hd-travel"></i></span>
                                                    <?php echo wp_title() ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row products" id="block-main">
                                        <?php
                                        if (have_posts()) {
                                            while (have_posts()) {
                                                the_post();
                                                ?>
                                                <div class="col-md-4 product-auto-resize product-wrapper _tracking">
                                                    <div class="product product-kind-3"
                                                         id="<?php the_ID() ?>"
                                                         itemscope itemtype="http://schema.org/Product"
                                                         data-toggle="box-link"
                                                         data-url="<?php the_permalink() ?>"
                                                    >
                                                        <div class="product__image">
                                                            <a href="<?php the_permalink() ?>"
                                                               title="<?php the_title() ?>">
                                                                <img itemprop="image" class="lazy" width="280"
                                                                     height="auto"
                                                                     data-original="<?php echo get_the_post_thumbnail_url($post->ID,'product-image') ?>"
                                                                     data-src-mobile="<?php echo get_the_post_thumbnail_url($post->ID,'product-image') ?>"
                                                                     src="<?php echo get_the_post_thumbnail_url($post->ID,'product-image') ?>"
                                                                     alt="<?php the_title() ?>"/>
                                                                <div class="item__meta">
                                                                    <span class="view"
                                                                          href="<?php the_permalink() ?>">Xem Ngay</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="product__header">
                                                            <h3 class="product__title">
                                                                <a href="<?php the_permalink() ?>"
                                                                   itemprop="name"
                                                                   title="<?php the_title() ?>"><?php the_title() ?></a>
                                                                <meta itemprop="brand" content=""/>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div class="pagination pull-right" id="block-main-pagination">
                                        <?php wp_pagenavi(); ?>
                                    </div>

                                </div>
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
<?php get_template_part('include/script') ?>
</body>
</html>