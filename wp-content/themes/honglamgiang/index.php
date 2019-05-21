<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php get_template_part('include/head') ?>
</head>
<body>
<div class="body">
    <?php get_template_part('header') ?>
    <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper slider-container-height-600 bg-light-5">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider
                 data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [450,400,400,400], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'parallax': { 'type': 'mouse', 'origo': 'slidecenter', 'speed': 3000, 'levels': [1,2,3,4,5,6,7,12,16,10,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1 slider-arrows-dark' }, 'bullets': {'enable': true, 'hide_under': 767, 'style': 'bullets-style-1', 'hide_onleave': false, 'h_align': 'right', 'v_align': 'bottom', 'space': 7, 'v_offset': 75, 'h_offset': 35}}}">
                <ul>
                    <?php
                    $sliders = wp_get_recent_posts(array('post_type' => 'slider','numberposts'=> '5','post_status'=>'publish'));
                    foreach ($sliders as $slider) {
                    ?>
                    <li data-transition="fade">
                        <img src="<?php echo get_the_post_thumbnail_url($slider['ID'],'full') ?>"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption bg-light-3"
                             data-x="[825','435','185','100']"
                             data-y="250"
                             data-start="1000"
                             data-width="1500"
                             data-height="['155','155','155','155']"
                             data-transform_in="x:[100%];opacity:0;s:500;"
                             data-transform_idle="skX:-19deg;opacity:0.9;"
                             data-transform_out="y:[50%];opacity:0;s:500;"></div>

                        <h1 class="tp-caption text-color-dark font-primary font-weight-thin"
                            data-x="right" data-hoffset="['0','20','20','20']"
                            data-y="bottom" data-voffset="['137','137','137','137']"
                            data-start="1300"
                            data-fontsize="['32','32','32','30']"
                            data-lineheight="['32','32','32','30']"
                            data-transform_in="y:[100%];opacity:0;s:500;"
                            data-transform_out="y:[-100%];opacity:0;s:500;"><?php echo $slider['post_title'] ?></h1>

                        <div class="tp-caption text-color-dark font-primary font-weight-bold"
                             data-x="right" data-hoffset="['0','20','20','20']"
                             data-y="bottom" data-voffset="['88','88','88','88']"
                             data-start="1600"
                             data-fontsize="['42','42','42','36']"
                             data-transform_in="opacity:0;s:300;"
                             data-transform_out="opacity:0;s:300;"><?php echo $slider['post_content'] ?>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center text-md-left">
                    <div class="col-md-7 mb-5 mb-md-0">
                        <div class="overflow-hidden mb-2">
                            <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">WHAT is Vietnam Visa On Arrival ?</h2>
                        </div>
                        <div class="overflow-hidden mb-5">
                            <p class="appear-animation" data-appear-animation="maskUp"
                               data-appear-animation-delay="400">Vietnam visa on arrival (VOA) means you will get a
                                Vietnam visa upon entering at the Vietnam international airport (NoiBai international
                                airport in Hanoi Capital, Tan Son Nhat international airport in Ho Chi Minh City and
                                DaNang international airport in Danang City).</p>
                            <p class="mb-0 appear-animation" data-appear-animation="maskUp"
                               data-appear-animation-delay="400">To get a Vietnam visa upon arrival, you should obtain a
                                pre-approved letter for a Vietnam visa upon arrival. Please send the visa form online at
                                our website for visa processing the approval letter with
                                us.</p>
                        </div>
                        <a href="<?php echo $theme['link-apply-visa']; ?>"
                           class="btn btn-primary btn-rounded btn-h-4 btn-v-3 font-weight-semibold appear-animation"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">APPLY VISA</a>
                    </div>
                    <div class="col-9 col-md-4 offset-md-1">
                        <div class="owl-carousel owl-theme nav-style-3 rounded-style-1"
                             data-plugin-options="{'items': 1, 'dots': false, 'nav': true, 'navtext': []}">
                            <div>
                                <img src="<?php bloginfo('template_directory') ?>/img/what-is-voa.jpg"
                                     class="img-fluid rounded-circle" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-light-5 section-text-overlay pb-0 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-2 order-lg-1 text-center mt-5 mt-lg-0">
                        <div class="overflow-hidden">
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                                <img src="<?php bloginfo('template_directory') ?>/img/visa-vietnam.jpg" alt=""
                                     class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-1 order-lg-2 mt-lg-1 pt-lg-1">
                        <div class="overflow-hidden mb-3 mt-5">
                            <h2 class="font-weight-bold text-color-dark  mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="400">WHO needs Vietnam Visa
                                on Arrival ?</h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="appear-animation" data-appear-animation="maskUp"
                               data-appear-animation-delay="600">For those who would like to avoid the perhaps
                                lengthening visa procedures with their local Vietnam's Embassies, the service of Vietnam
                                Visa on arrival is available for help. It is legitimated and supported by the Viet-Nam-EVisa. We recommend that you choose visa upon arrival, as picking up
                                visa at the Vietnam int'l airport is quite simple, easy, no additional charges and no
                                fail.</p>
                            <p class="mb-0 appear-animation" data-appear-animation="maskUp"
                               data-appear-animation-delay="600">This is an alternative way to obtain your official
                                Vietnam Visa On Arrival or also called as (VOA) upon you arrived at Vietnam
                                International airport (Hochiminh Airport - SGN, Danang Airport - DAD, Hanoi Airport -
                                HAN), you must arrive by AIR only. However, in order to grant for Vietnam Visa On
                                Arrival at airport you need to have "Pre-Approval Letter" first. Please visit our
                                website and submit your application for Pre-Approval Letter, Obtaining official Vietnam
                                Visa at airport subject to a fee will apply according to your duration of stay in
                                Vietnam such as 1 month or 3 months.</p>
                        </div>
                        <div class="mt-3">
                            <a href="<?php echo $theme['link-apply-visa']; ?>"
                               class="btn btn-primary btn-rounded btn-h-4 btn-v-3 font-weight-semibold appear-animation"
                               data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">APPLY VISA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-skew bg-primary py-5">
            <div class="section-skew-layer section-skew-layer-mobile-right bg-dark-5" data-skew-layer
                 data-skew-layer-value="62%" data-skew-layer-from="right"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 appear-animation" data-appear-animation="fadeInRightShorter">
                        <h2 class="font-weight-semibold text-light mb-0">Vietnam Visa on Arrival for 190+
                            nationalities</h2>
                        <p class="font-weight-light text-light mb-3 mb-md-0">Proven track records. Get visa in time!</p>
                    </div>
                    <div class="col-md-3 text-left text-md-right">
                        <a href="<?php echo $theme['link-apply-visa']; ?>" target="_blank"
                           class="btn btn-light btn-rounded font-weight-bold">
                        <span class="wrap">
                            <span>APPLY VISA NOW</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row text-center mt-4">
                    <div class="col">
                        <div class="overflow-hidden mb-3">
                            <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">WHY Vietnam Visa on Arrival ?
                            </h2>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                               data-appear-animation-delay="400">Your visa approval letter may be issued within 30
                                minutes since your submission of urgent application.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 mx-auto mt-lg-5 mt-xl-4 pt-xl-3 appear-animation"
                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="icon-box icon-box-style-4 mb-4 mb-lg-4">
                            <div class="icon-box-icon bg-primary">
                                <i class="lnr lnr-tablet"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h3 class="text-3">Reliability</h3>
                                </div>
                                <p>A visa on arrival is exactly similar to a visa issued by any Vietnam
                                    embassy/consulate with the same limitations and conditions attached to its use.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-style-4 mb-4 mb-lg-4">
                            <div class="icon-box-icon bg-primary">
                                <i class="lnr lnr-magic-wand"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h3 class="text-3">Convenience</h3>
                                </div>
                                <p>No passport send-off, no queue at the Vietnam Embassy, no document required except a
                                    computer with internet access to apply for a Vietnam visa anywhere.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mx-auto mt-lg-5 mt-xl-4 pt-xl-3 appear-animation"
                         data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="icon-box icon-box-style-4 mb-4 mb-lg-4">
                            <div class="icon-box-icon bg-primary">
                                <i class="lnr lnr-layers"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h3 class="text-3">Flexibility</h3>
                                </div>
                                <p>Your traveling time can be totally controlled with your demand for changing your
                                    travel plan in the last minutes being satisfied within a couple of days or even
                                    sooner.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-style-4 mb-4 mb-lg-4">
                            <div class="icon-box-icon bg-primary">
                                <i class="lnr lnr-briefcase"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h3 class="text-3">Emergency Service</h3>
                                </div>
                                <p>Your visa approval letter may be issued within 04 working hours since your submission
                                    of online visa application.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-light-5 section-text-overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="font-weight-bold">HOW to apply Vietnam Visa on Arrival ?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="steps steps-primary" data-plugin-options="{'delay': 7000}">
                            <div class="dots appear-animation" data-appear-animation="fadeIn"
                                 data-appear-animation-delay="1200">
                                <img class="dots-mask"
                                     src="<?php bloginfo('template_directory') ?>/css/steps-dots.svg" alt=""/>
                                <div class="dots-color"></div>
                                <div class="dots-color-dark"></div>
                            </div>
                            <div class="item appear-animation" data-appear-animation="stepsFadeInUp"
                                 data-plugin-image-background
                                 data-plugin-options="{'imageUrl': '<?php bloginfo('template_directory') ?>/img/steps-1.jpg'}">
                                <h3 class="item-title"><span>1</span>APPLY ONLINE & ONLINE PAYMENT</h3>
                                <p>Complete our secure form.Pay the service fee & receive confirmation.</p>
                                <a class="learn-more" href="<?php echo $theme['link-apply-visa']; ?>">APPLY VISA <i
                                            class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="item appear-animation" data-appear-animation="stepsFadeInUp"
                                 data-appear-animation-delay="300" data-plugin-image-background
                                 data-plugin-options="{'imageUrl': 'https://preview.oklerthemes.com/ezy/1.1.0/img/steps-2.jpg'}">
                                <h3 class="item-title"><span>2</span>MAIL DOCUMENT</h3>
                                <p>Receive visa approval letter.</p>
                                <a class="learn-more" href="<?php echo $theme['link-apply-visa']; ?>">APPLY VISA <i
                                            class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="item appear-animation" data-appear-animation="stepsFadeInUp"
                                 data-appear-animation-delay="600" data-plugin-image-background
                                 data-plugin-options="{'imageUrl': 'https://preview.oklerthemes.com/ezy/1.1.0/img/steps-3.jpg'}">
                                <h3 class="item-title"><span>3</span>GET VISA</h3>
                                <p>Get your visa stamped at Vietnamese airports.</p>
                                <a class="learn-more" href="<?php echo $theme['link-apply-visa']; ?>">APPLY VISA <i
                                            class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-light-3">
            <div class="container-fluid">
                <div class="row text-center mb-4">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold">Testimonials</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8 col-md-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="700ms">
                        <div class="owl-carousel carousel-center-active-items carousel-center-active-items-style-4" data-plugin-carousel data-plugin-options="{'autoplay': false, 'dots': false, 'nav': true, 'loop': true, 'margin': 30, 'responsive': { '0': {'items': 1}, '576': {'items': 1}, '768': {'items': 3}, '992': {'items': 5}, '1200': {'items': 5}}}">
                            <?php
                            $testimonials = wp_get_recent_posts(array('post_type' => 'testimonial','numberposts'=> '10','post_status'=>'publish'));
                            foreach ($testimonials as $testimonial) {
                            ?>
                            <div>
                                <div class="testimonial testimonial-style-3">
                                    <div class="card rounded border-0">
                                        <div class="card-body p-3">
                                            <div class="mb-1 text-primary">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                            <p class="mb-1"><?php echo $testimonial['post_content']; ?></p>
                                            <strong class="text-color-dark"><?php echo $testimonial['post_title']; ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <div class="overflow-hidden">
                            <span class="d-block top-sub-title text-color-primary appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms;">LATEST NEWS</span>
                        </div>
                        <div class="overflow-hidden mb-5">
                            <h2 class="font-weight-bold mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php
                    $posts_newest = wp_get_recent_posts(array('numberposts'=> '10','post_status'=>'publish'));
                    foreach ($posts_newest as $item) {
                    ?>
                    <div class="col-md-4">
                        <article class="blog-post">
                            <header class="mb-2">
                                <div class="image-frame hover-effect-2">
                                    <a href="<?php echo the_permalink($item['ID']) ?>" class="d-block appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="700ms" style="animation-duration: 700ms; animation-delay: 100ms;">
                                        <img src="<?php echo get_the_post_thumbnail_url($item['ID'],'blog-image') ?>" class="mb-3" alt="" style="width: 100%;">
                                    </a>
                                </div>
                                <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="700ms" style="animation-duration: 700ms; animation-delay: 500ms;">
                                    <h3 class="font-weight-bold text-4 mb-0"><a href="<?php echo the_permalink($item['ID']) ?>" class="link-color-dark"><?php echo get_the_title($item['ID']) ?></a></h3>
                                    <i class="far fa-clock mt-1 text-color-primary"></i>
                                    <time class="font-tertiary text-1" datetime="<?php echo get_the_date('M d Y',$item['ID']) ?>"><?php echo get_the_date('M d Y',$item['ID']) ?></time>
                                </div>
                            </header>
                            <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="700ms" style="animation-duration: 700ms; animation-delay: 600ms;"><?php echo $item['post_excerpt']; ?></p>
                        </article>
                    </div>
                    <?php
                    }
                    wp_reset_query();
                    ?>

                </div>
            </div>
        </section>
        <div class="section pt-5 bg-light-5">
            <div class="container">
                <div class="row align-items-center justify-content-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                    <?php
                    $partners = wp_get_recent_posts(array('post_type' => 'partner','numberposts'=> '10','post_status'=>'publish'));
                    foreach ($partners as $partner) {
                    ?>
                    <div class="col col-md-1-5">
                        <img src="<?php echo get_the_post_thumbnail_url($partner['ID'],'full') ?>" alt="" style="width: 100%">
                    </div>
                    <?php
                        }
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('footer') ?>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>