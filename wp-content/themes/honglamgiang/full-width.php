<?php /* Template Name: Full Width */ ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php get_template_part('include/head') ?>
</head>
<body>
<div class="body">
    <?php get_template_part('header') ?>
    <div role="main" class="main">
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
            <div class="pb-2 pt-2">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="row">
                <div class="col">
                    <?php the_content() ?>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
    <?php get_template_part('footer') ?>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>