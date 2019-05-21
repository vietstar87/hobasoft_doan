<!DOCTYPE html>
<html >
<head lang="en">
    <?php get_template_part('include/head') ?>
</head>
<body class="page-product">
<div id="hd-container" class="hd-container">
    <?php get_template_part('include/menu') ?>
    <div class="hd-pusher">
        <div class="hd-content">
            <div class="hd-content-inner">
                <div id="page-wrapper">
                    <div class="hd-touch-layer"></div>
                    <?php get_template_part('header') ?>
                    <div class="breadcrumb">
                        <div class="container">
                            <?php if(function_exists('bcn_display'))
                            {
                                bcn_display();
                            }?>
                        </div>
                    </div>

                    <main id="main" class="main-content clearfix">
                        <div class="container">
                            <?php
                            if (have_posts()) {
                            while (have_posts()) {
                            the_post();
                            ?>
                            <div itemscope itemtype="http://schema.org/Product">
                                <div class="product product--details clearfix">
                                    <div id="product-gallery-<?php echo the_ID() ?>" class="product__gallery gallery">
                                        <div class="gallery__image media-gallery">
                                            <?php

                                            $images = get_field('gallery');

                                            if( $images ): ?>
                                                <?php foreach( $images as $image ): ?>
                                                        <a href="#">
                                                            <img width="400" height="400" itemprop="image" style="max-width: 100%;" class="lazyOwl" src="<?php echo $image['sizes']['product-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                        </a>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <a href="#">
                                                    <img width="400" height="400" itemprop="image" style="max-width: 100%;" src="<?php echo get_the_post_thumbnail_url($post->ID,'product-image') ?>" alt="<?php echo $image['alt']; ?>" />
                                                </a>
                                            <?php endif; ?>
                                        </div>

                                        <div class="gallery__thumbnails">
                                            <?php

                                            $images = get_field('gallery');

                                            if( $images ): ?>
                                            <?php foreach( $images as $image ): ?>
                                            <a class=""><img src="<?php echo $image['sizes']['product-image']; ?>" alt="" /></a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <div class="product__header">
                                            <h1 class="product__title" itemprop="name"><?php the_title() ?></h1>
                                            <div class="product__sharing sharing">
                                                <div class="sharing__item" style="margin-right: 10px;">
                                                    <div class="fb-like"
                                                         data-href="<?php the_permalink() ?>"
                                                         data-layout="button_count" data-action="like" data-show-faces="false"
                                                         data-share="false"></div>
                                                </div>
                                                <div class="sharing__item">
                                                    <script>
                                                        setTimeout(function() {
                                                            (function (d, s, id) {
                                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                                if (d.getElementById(id)) return;
                                                                js = d.createElement(s);
                                                                js.id = id;
                                                                js.src = "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55e95ad1eb3d6fcf";
                                                                fjs.parentNode.insertBefore(js, fjs);
                                                            }(document, 'script', 'addthis'));
                                                        }, 7000);
                                                    </script>
                                                    <a class="pull-right share addthis_button_compact"><i class="hd hd-share"></i> Chia sẻ</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product__description" style="border-bottom: 1px solid #eaeaea;">
                                            <?php the_excerpt() ?>
                                        </div>

                                        <div class="product__price-info clearfix">
                                            <div class="box-price-detail">
                                                <div class="product__price product__price--list-price _product_price_old">
                                                    <span class="price price--list-price">
                                                        <span class="hidden-xs hidden-sm">Giá gốc:&nbsp;</span>
                                                        <span class="price__value"><?php the_field('price') ?></span>
                                                        <span class="price__symbol">đ</span>
                                                    </span>
                                                </div>
                                                <br class="hidden-xs hidden-sm"/>
                                                <div class="product__price _product_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                    <link itemprop="availability" href="http://schema.org/InStock"/>
                                                    <meta itemprop="priceCurrency" content="VND"/>
                                                    <span class="price">
									                    <span class="price__value" itemprop="price"><?php the_field('gia_khuyen_mai') ?></span>
                                                        <span class="price__symbol">đ</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product__add-to-cart border-top clearfix">
                                                <div class="add-to-cart__actions add-to-cart-buttons">
                                                    <button id="btn--buy-now" class="btn btn-success btn--buy-now btn--buy-now-x2" data-toggle="modal" data-target="#myModal">
                                                        MUA NGAY <i class="fa fa-long-arrow-right"></i>
                                                    </button>
                                                </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="well product-well hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-right: 20px;">
                                            <h3 class="product-well-title">Điểm nổi bật</h3>

                                            <div class="wysiwyg">
                                                <?php echo get_field('diem_noi_bat') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <h3 class="product-well-title">Điều kiện sử dụng</h3>
                                            <div class="wysiwyg">
                                                <?php echo get_field('dieu_kien_su_dung') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-default btn--view-more">
                                        <span class="more-text">Xem thêm <i class="fa fa-chevron-down"></i></span>
                                        <span class="less-text">Thu gọn <i class="fa fa-chevron-up"></i></span>
                                    </a>
                                </div>

                                <div class="content-sidebar clearfix">
                                    <div class="content">

                                        <div id="product-details" class="tabs tabs--sticky" data-distance="70">
                                            <ul class="nav nav-tabs tabs__nav">
                                                <li style="width: 20%" class=" visible-sm visible-xs visible-md"><a href="#diem-noi-bat">Điểm nổi bật</a></li>
                                                <li style="width: 20%" class=" visible-sm visible-xs visible-md"><a href="#dieu-kien">Điều kiện sử dụng</a></li>
                                                <li style="width: 20%" class="active first"><a href="#chi-tiet">Thông tin chi tiết</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content tabs__content">
                                                <div class="tab-pane active visible-sm visible-xs visible-md" id="diem-noi-bat">
                                                    <div class="block__header  clearfix">
                                                        <h3 class="block__title">Điểm nổi bật</h3>
                                                    </div>
                                                    <div class="block__content clearfix">
                                                        <div class="wysiwyg" itemprop="description">
                                                            <?php echo get_field('diem_noi_bat') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane active visible-sm visible-xs visible-md" id="dieu-kien">
                                                    <div class="block__header  clearfix">
                                                        <h3 class="block__title">Điều kiện sử dụng</h3>
                                                    </div>
                                                    <div class="block__content clearfix">
                                                        <div class="wysiwyg">
                                                            <?php echo get_field('dieu_kien_su_dung') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane active first" id="chi-tiet">
                                                    <div class="block__header  clearfix">
                                                        <h3 class="block__title">Thông tin chi tiết</h3>
                                                    </div>
                                                    <div class="block__content clearfix">
                                                        <div class="wysiwyg">
                                                            <div id="summary">
                                                                <div id="property_description_content">
                                                                    <?php the_content() ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane active " id="dia-diem">
                                                    <div class="block__content clearfix">
                                                        <div class="box box--shadow hidden-xs hidden-sm" style="margin-top: 10px; border: 1px solid #ccc;">
                                                            <div class="product product--short-info">
                                                                <div class="product__cell" style="width: 315px;">
                                                                    Số tiền thanh toán
                                                                    <div class="product__price">
                                                                        <span class="price">
                                                                            <span class="price__value"><?php echo get_field('price') ?></span><span class="price__symbol">đ</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="product__cell" style="width: 315px;">
                                                                    Giá gốc
                                                                    <div class="product__price product__price--list-price">
                                                                        <span class="price price--list-price">
                                                                            <span class="price__value"><?php echo get_field('gia_khuyen_mai') ?></span>
                                                                            <span class="price__symbol">đ</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="product__cell">
                                                                    <div class="product__add-to-cart clearfix">
                                                                        <div class="add-to-cart__actions add-to-cart-buttons">
                                                                            <button id="btn--buy-now" class="btn btn-success btn--buy-now" data-toggle="modal" data-target="#myModal">MUA NGAY</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane active" id="danh-gia">
                                                    <div class="block__content clearfix">
                                                        <h4 class="hidden-xs hidden-sm">BÌNH LUẬN FACEBOOK</h4>
                                                        <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <?php get_sidebar('product') ?>
                                </div>
                            </div>
                                <?php
                            }
                            }
                            ?>
                            <div class="col-md-12 product-similars visible-xs visible-sm">
                                <div class="block block--normal">
                                    <div class="block__header">
                                        <h3 class="block__title">Deal liên quan</h3>
                                    </div>

                                    <div class="block__content clearfix">
                                        <div class="products products--mobile"
                                             data-toggle="similar-products"
                                             data-product-id="354788"
                                             data-wrapper-class="product-auto-resize product-image-padding"
                                             data-limit="16" data-enable-screens='["mobile"]' data-callback="afterLoadSimilarMobile"                         >
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

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><?php the_title() ?></h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" name="product_id" value="354788"/>
                <input type="hidden" name="variants[product_id][]"
                       value="354788"/>
                <input type="hidden" data-product="354788"
                       id="quantity_354788"
                       name="variants[354788][quantity]" value="1"/>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php get_template_part('include/script') ?>
</body>
</html>