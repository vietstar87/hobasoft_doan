<?php /* Template Name: Cart */ ?>
<?php 
session_start();
$product_id = $_GET['product'];
$post_id = get_post( $product_id ); 
$title = $post_id->post_title;
if($title) {
    if($_SESSION['product']) {
        array_push($_SESSION['product'], $product_id);
    } else {
        $_SESSION['product'] = array($product_id);
    }
}
$product_all = array_unique($_SESSION['product']);
$session_id = session_id();
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
                                                <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
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
                                                                <?php foreach ($product_all as $product_value) { ?>
                                                                <tr>
                                                                    <td class="image">
                                                                        <img class="pull-left" src="<?php echo get_the_post_thumbnail_url($product_value,'product-image') ?>" />
                                                                    </td>
                                                                    <td class="name">
                                                                        <?php echo get_the_title($product_value); ?>
                                                                    </td>
                                                                    <td class="unit">
                                                                        <?php if(get_field('gia_khuyen_mai',$product_value)) { ?>

                                                                                <label>
                                                                                    <p><?php echo number_format(get_field('gia_khuyen_mai',$product_value)); ?> đ</p>
                                                                                    <p><span style="text-decoration: line-through;"><?php echo number_format(get_field('price',$product_value)); ?> đ</span></p>
                                                                            </label>
                                                                            <?php 
                                                                        } else { ?>
                                                                                <label><?php echo number_format(get_field('price',$product_value)); ?></label>
                                                                        <?php
                                                                        } ?>
                                                                        
                                                                        
                                                                    </td>
                                                                    <td class="quantity">
                                                                        <input type="hidden" name="product[]" value="<?php echo $product_value; ?>">
                                                                        <input class="quantity_value" style="width: 36px;float: left;height: 30px;padding: 0 5px;" type="text" name="quantity[]" value="1">
                                                                        <div class="inc button_quantity">+</div>
                                                                        <div class="dec button_quantity">-</div>
                                                                    </td>
                                                                    <td id="total_355245" class="total"></td>
                                                                </tr>
                                                                <?php } ?>
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
<style type="text/css">
    .button_quantity {
    margin: 0 0 0 5px;
    text-indent: -9999px;
    cursor: pointer;
    width: 29px;
    height: 29px;
    float: left;
    text-align: center;
    background: url("https://css-tricks.com/examples/InputNumberIncrementer/images/buttons.png") no-repeat;
}
.dec {
  background-position: 0 -29px;
}
</style>
<script type="text/javascript">
    $(".button_quantity").on("click", function() {

  var $button = $(this);
  var oldValue = $button.parent().find("input.quantity_value").val();

  if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
   // Don't allow decrementing below zero
    if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 0;
    }
  }

  $button.parent().find("input.quantity_value").val(newVal);

});
</script>
</body>
</html>