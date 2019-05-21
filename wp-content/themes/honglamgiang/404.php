<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php get_template_part('include/head') ?>
</head>
<body>
<div class="body">
    <?php get_template_part('header') ?>
    <div role="main" class="main">
        <section class="section bg-light-5">
            <img src="<?php bloginfo('template_directory') ?>/img/lamp-holder.png"
                 class="img-fluid lamp-style-2 position-absolute transform-center-x appear-animation"
                 data-appear-animation="fadeIn" alt=""/>
            <div class="container">
                <div class="row justify-content-center text-center py-5 mt-5 mb-3">
                    <div class="col-md-8 col-lg-6 pt-4 mt-5">
                        <h1 class="font-weight-bold text-6 mb-5 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><strong
                                    class="d-block font-weight-bold text-20">404!</strong>PAGE NOT FOUND</h1>
                        <p class="mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="400">The page you were looking for could not be found.</p>
                        <?php get_search_form() ?>
                        <a href="<?php bloginfo('home') ?>"
                           class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold appear-animation"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"><i
                                    class="fas fa-angle-left mr-3 text-3"></i> BACK TO HOMEPAGE</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('footer') ?>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>