<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php get_template_part('include/head') ?>
</head>
<body>
<div class="body">
    <?php get_template_part('header') ?>
    <div role="main" class="main pb-5">
        <section class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 text-left">
                        <h1 class="font-weight-bold"><?php echo single_cat_title(); ?></h1>
                    </div>
                    <div class="col-md-4">
                        <div class="justify-content-start justify-content-md-end" style="text-align: right">
                            <?php if (function_exists('bcn_display')) {
                                bcn_display();
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                    <div class="row masonry-loader masonry-loader-showing portfolio-list portfolio-list-style-2" data-plugin-masonry data-plugin-options="{'itemSelector': '.isotope-item'}">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-sm-6 isotope-item mb-5 p-0">
                            <div class="portfolio-item">
                                <article class="blog-post">
                                    <span class="top-sub-title text-color-primary"><?php echo get_the_date() ?></span>
                                    <h2 class="font-weight-bold text-4 mb-3">
                                        <a href="<?php the_permalink() ?>" class="link-color-dark"><?php the_title() ?></a>
                                    </h2>
                                    <?php if(has_post_thumbnail()) : ?>
                                    <div class="owl-carousel owl-theme dots-style-2 nav-style-2" data-plugin-options="{'items': 1, 'dots': true, 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut'}">
                                        <div>
                                            <a href="<?php the_permalink() ?>">
                                                <div class="image-frame hover-effect-2">
                                                    <div class="image-frame-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID,'blog-image') ?>" class="img-fluid" alt="<?php the_title() ?>" />
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                    <div class="d-flex opacity-6 my-2">
                                        <a href="<?php the_permalink() ?>#comments">
                                            <span class="post-comments d-flex align-items-center"><i class="lnr lnr-bubble text-3 mr-1" aria-label="1 users comment this post"></i> <?php echo get_comments_number(); ?></span>
                                        </a>
                                    </div>
                                    <hr class="mt-0 mb-3">
                                    <p class="text-color-light-3"><?php the_excerpt() ?></p>
                                    <a href="<?php the_permalink() ?>" class="text-color-primary font-weight-bold learn-more">READ MORE <i class="fas fa-angle-right text-3" aria-label="Read more"></i></a>
                                </article>
                            </div>
                        </div>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>

                    <hr class="mt-5 mb-4">

                    <div class="row align-items-center justify-content-between">
                        <div class="col-12">
                            <?php echo wp_pagenavi() ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?php get_template_part('footer') ?>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>