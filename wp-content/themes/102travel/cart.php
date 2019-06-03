<?php /* Template Name: Cart */ ?>
<?php 
$product_id = $_GET['product'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php get_template_part('include/head') ?>
</head>
<body class="page-category">
        <div id="hd-container" class="hd-container">
            <div class="hd-pusher">
                <div class="hd-content">
                    <div class="hd-content-inner">
                        <div id="page-wrapper">
                            <div class="hd-touch-layer"></div>
                            <?php get_template_part('header') ?>
                            <main id="main" class="main-content clearfix page-checkout">
                                <div class="container">
                                    <div class="content-sidebar--2">
                                        <div class="content" style="width: 100% !important">
                                            <form class="form form-blocking" action="<?php echo get_page_link( get_page_by_path( 'checkout-step-1' ) ); ?>" method="post">
                                                <div class="box box--no-padding">
                                                    <div class="box__header visible-xs visible-sm">
                                                        <h2 class="box__title">Thông tin sản phẩm</h2>
                                                    </div>

                                                    <div class="box__body">
                                                        <table class="table table--listing table--checkout">
                                                            <thead>
                                                                <tr>
                                                                    <th class="items0count" colspan="2">Sản phẩm</th>
                                                                    <th width="16%">Đơn giá</th>
                                                                    <th width="16%">Số lượng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="image">
                                                                        <img class="pull-left" src="<?php echo get_the_post_thumbnail_url($product_id,'product-image') ?>" />
                                                                    </td>
                                                                    <td class="name">
                                                                        <?php echo get_the_title($product_id); ?>
                                                                    </td>
                                                                    <td class="unit">
                                                                        <label><?php echo number_format(get_field('price',$product_id)); ?></label>
                                                                    </td>
                                                                    <td class="quantity">
                                                                        <input type="hidden" name="product" value="<?php echo $product_id; ?>">
                                                                        <select class="quantity__modifier quantity-modifier quantity-modifier-select " name="quantity">
                                                                            <option value="1" selected="selected">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                    </td>
                                                                    <td id="total_355245" class="total"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="box__footer hidden-xs hidden-sm">
                                                        <a href="<?php bloginfo('home'); ?>" class="btn btn--back"><i class="hd hd-back"></i> Tiếp tục mua hàng</a>

                                                        <button id="main-button" class="btn btn-success btn-lg btn--buy-now btn--buy-now-new pull-right" name="submit">
                                                            ĐẶT HÀNG
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
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