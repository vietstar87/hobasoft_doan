<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php get_template_part('include/head') ?>
</head>
<body>
<div class="body">
    <?php get_template_part('header') ?>
    <div role="main" class="main pb-5">
        <section class="page-header page-header-text-light overlay overlay-color-dark overlay-show overlay-op-7" data-plugin-image-background="" data-plugin-options="{'imageUrl': '<?php echo get_the_post_thumbnail_url($post->ID,'blog-image') ?>'}" style="background-image: url(&quot;<?php echo get_the_post_thumbnail_url($post->ID,'blog-image') ?>&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container d-flex flex-column">
                <div class="row align-items-center position-relative z-index-10">
                    <div class="col-md-12">
                        <div class="row text-left">
                            <div class="col-md-12 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <h1><?php the_title() ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <?php get_sidebar() ?>
                <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                    <div class="pb-2 pt-2">
                        <?php if (function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="blog-post mb-4">
                            <div class="d-flex mb-3">
                                <span class="post-date text-color-primary pr-3"><?php echo get_the_date(); ?></span>
                                <a href="#comments" data-hash data-hash-offset="100">
                                <span class="post-comments d-flex align-items-center px-3"><i
                                            class="lnr lnr-bubble text-3 mr-1"
                                            aria-label="3 users comment this post"></i> <?php echo get_comments_number(); ?></span>
                                </a>
                            </div>
                            <?php the_content() ?>
                            <footer class="blog-post-footer border border-left-0 border-right-0 py-4 mt-5">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12 col-sm-auto mb-3 mb-sm-0 mb-md-3 mb-lg-0">
                                        <ul class="list-inline mb-0">
                                            <?php
                                            $post_categories = wp_get_post_categories( $post->ID );
                                            $cats = array();

                                            foreach($post_categories as $c){
                                                $cat = get_category( $c );
                                                ?>
                                                <li class="list-inline-item"><a href="#"
                                                                                class="badge badge-light badge-sm badge-pill px-3 py-2"><?php echo $cat->name ?></a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center">
                                            <span class="text-2">SHARE THIS POST</span>
                                            <ul class="social-icons social-icons-light social-icons-1 ml-3">
                                                <li class="social-icons-facebook">
                                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </article>
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col">
                            <span class="top-sub-title">ABOUT THE AUTHOR</span>
                            <div class="icon-box icon-box-style-1 align-items-center mt-3">
                                <div class="icon-box-icon">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'img-fluid rounded-circle mr-2']); ?>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h4 class="font-weight-bold line-height-1 mb-1"><?php echo get_the_author_meta('first_name'); ?><?php echo get_the_author_meta('last_name'); ?></h4>
                                        <p class="text-1 mb-0"><?php echo get_the_author_meta('description'); ?></p>
                                    </div>
                                </div>
                            </div>
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