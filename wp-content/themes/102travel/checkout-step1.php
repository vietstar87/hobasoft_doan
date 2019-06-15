<?php /* Template Name: Checkout Step 1 */ ?>
<?php
session_start();
session_id();
session_unset();
session_destroy();
?>
<?php 
    $products = $_POST['product'];
    $quantitys = $_POST['quantity'];
    $session_id = $_POST['session_id'];
?>
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
                        <main id="main" class="main-content clearfix page-checkout">
                            <div class="container">

                                <div class="visible-xs visible-sm">
                                    <ol class="progress-steps">
                                        <li data-step="1" class="is-complete">
                                            <a href="#">Giỏ hàng</a>
                                        </li>
                                        <li data-step="2" class="is-active">
                                            <a href="#">Thông Tin Giao Hàng</a>
                                        </li>
                                        <li data-step="3" class=" progress__last">
                                            <a href="#" onclick="$('#checkout-step-2-submit').trigger('click');">Thanh Toán</a>
                                        </li>
                                    </ol>
                                </div>

                                <div class="content-sidebar--2">
                                    <div class="content">
                                        <div class="box">
                                            <div class="box__header">
                                                <h2 class="box__title">Thông tin đặt hàng</h2>
                                            </div>
                                            <div class="box__body address-container ">

                                                <form id="check-out-step-2" class="form form-blocking form--general check-out-step-2" action="<?php echo get_page_link( get_page_by_path( 'checkout-step-2' ) ); ?>" method="post">
                                                    <?php foreach ($products as $key => $product) { ?>
                                                        <input type="hidden" name="order_product[<?php echo $key; ?>]" value="<?php echo $product; ?>">
                                                        <input type="hidden" name="order_total[<?php echo $key; ?>]" value="<?php echo get_field('price',$product)*$quantitys[$key] ?>">
                                                    <?php } ?>
                                                    <?php foreach ($quantitys as $key => $quantity) { ?>
                                                        <input type="hidden" name="order_quantity[<?php echo $key; ?>]" value="<?php echo $quantity; ?>">
                                                    <?php } ?>

                                                    

                                                    <div class="address-edit editable-section">
                                                        
                                                        <div class="row form">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg ">
                                                                    <label for="name_0" class="control-label">Họ tên</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" name="order_name" placeholder="Họ tên" value="" required="" />
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-group-lg">
                                                                    <label for="city_0" class="control-label">Thành phố</label>
                                                                    <div>
                                                                        <select id="city_0" name="order_city" class="city form-control" tabindex="6" data-fv-notempty="true" data-fv-notempty-message="Vui lòng chọn Thành phố" required>
                                                                            <option value="">Chọn Thành phố</option>
                                                                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                                                            <option value="Hà Nội">Hà Nội</option>
                                                                            <option value="An Giang">An Giang</option>
                                                                            <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                                                                            <option value="Bắc Giang">Bắc Giang</option>
                                                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                                                            <option value="Bến Tre">Bến Tre</option>
                                                                            <option value="Bình Dương">Bình Dương</option>
                                                                            <option value="Bình Phước">Bình Phước</option>
                                                                            <option value="Bình Thuận">Bình Thuận</option>
                                                                            <option value="Bình Định">Bình Định</option>
                                                                            <option value="Cà Mau">Cà Mau</option>
                                                                            <option value="Cần Thơ">Cần Thơ</option>
                                                                            <option value="Cao Bằng">Cao Bằng</option>
                                                                            <option value="Gia Lai">Gia Lai</option>
                                                                            <option value="Hà Giang">Hà Giang</option>
                                                                            <option value="Hà Nam">Hà Nam</option>
                                                                            <option value="Hà Tây">Hà Tây</option>
                                                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                                            <option value="Hải Dương">Hải Dương</option>
                                                                            <option value="Hải Phòng">Hải Phòng</option>
                                                                            <option value="Hậu Giang">Hậu Giang</option>
                                                                            <option value="Hoà Bình">Hoà Bình</option>
                                                                            <option value="Huế">Huế</option>
                                                                            <option value="Hưng Yên">Hưng Yên</option>
                                                                            <option value="Khánh Hoà">Khánh Hoà</option>
                                                                            <option value="Kiên Giang">Kiên Giang</option>
                                                                            <option value="Kon Tum">Kon Tum</option>
                                                                            <option value="Lai Châu">Lai Châu</option>
                                                                            <option value="Lâm Ðồng">Lâm Ðồng</option>
                                                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                                                            <option value="Lào Cai">Lào Cai</option>
                                                                            <option value="Long An">Long An</option>
                                                                            <option value="Nam Ðịnh">Nam Ðịnh</option>
                                                                            <option value="Nghệ An">Nghệ An</option>
                                                                            <option value="Ninh Bình">Ninh Bình</option>
                                                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                                                            <option value="Phú Thọ">Phú Thọ</option>
                                                                            <option value="Phú Yên">Phú Yên</option>
                                                                            <option value="Quảng Bình">Quảng Bình</option>
                                                                            <option value="Quảng Nam">Quảng Nam</option>
                                                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                                                            <option value="Quảng Trị">Quảng Trị</option>
                                                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                                                            <option value="Sơn La">Sơn La</option>
                                                                            <option value="Tây Ninh">Tây Ninh</option>
                                                                            <option value="Thái Bình">Thái Bình</option>
                                                                            <option value="Thái Nguyên">Thái Nguyên</option>
                                                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                                                            <option value="Tiền Giang">Tiền Giang</option>
                                                                            <option value="Trà Vinh">Trà Vinh</option>
                                                                            <option value="Tuyên Quang">Tuyên Quang</option>
                                                                            <option value="Vĩnh Long">Vĩnh Long</option>
                                                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                                            <option value="Yên Bái">Yên Bái</option>
                                                                            <option value="Ðà Nẵng">Ðà Nẵng</option>
                                                                            <option value="Ðắc Lắc">Ðắc Lắc</option>
                                                                            <option value="Ðắk Nông">Ðắk Nông</option>
                                                                            <option value="Ðồng Nai">Ðồng Nai</option>
                                                                            <option value="Ðồng Tháp">Ðồng Tháp</option>
                                                                            <option value="Điện Biên">Điện Biên</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-group-lg">
                                                                    <label for="ward_0" class="control-label">Phường / Xã</label>
                                                                    <div>
                                                                        <input id="ward_0" name="order_ward" class="ward form-control" tabindex="8" data-fv-notempty="true" placeholder="Vui lòng điền Phường Xã" required>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg">
                                                                    <label for="address_0" class="control-label">Địa chỉ</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" tabindex="3" id="address_0" name="order_address" placeholder="Địa chỉ" value="" data-fv-notempty="true" data-fv-notempty-message="Vui lòng nhập Địa chỉ" data-fv-stringlength="true" data-fv-stringlength-max="200" data-fv-stringlength-message="Địa chỉ nhập tối đa 200 ký tự"/ required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-lg">
                                                                    <label for="district_0" class="control-label">Quận / Huyện</label>
                                                                    <div>
                                                                        <input id="district_0" name="order_district" class="district form-control" tabindex="7" data-fv-notempty="true" placeholder="Vui lòng điền Quận / Huyện" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-lg ">
                                                                    <label for="phone_0" class="control-label">Số điện thoại</label>
                                                                    <div>
                                                                        <input type="text" class="form-control validate[custom[phone]]" tabindex="2" id="phone_0" name="order_phone" placeholder="Số điện thoại liên hệ" value="" data-fv-notempty="true" placeholder="Vui lòng nhập Số điện thoại" pattern="^(09.|03.|05.|08.|07.|015.|016.|017.|018.|019.|08.)\d{7}$" data-fv-regexp-message="Số điện thoại chỉ được nhập số và từ 10 đến 11 ký tự"/ required>
                                                                    </div>
                                                                </div>                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="box__footer">
                                                <button id="btn--buy-now" type="submit" form="check-out-step-2" class="btn btn-success btn-lg btn--buy-now btn--buy-now-new pull-right" name="submit">TIẾP TỤC</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar sidebar--checkout sidebar--checkout-2">
                                        <div class="box">
                                            <div class="box__header">
                                                <h2 class="box__title">Thông tin đơn hàng</h2>

                                                <div class="box__tools">
                                                </div>
                                            </div>
                                            <div class="box__body">
                                                <div class="order-items">
                                                    <?php foreach ($products as $key => $product) { ?>
                                                    <div class="order-item">
                                                        <div class="name">
                                                            <span class="quantity"><?php echo $quantitys[$key]; ?> x</span>
                                                            <a target="_blank" href="<?php the_permalink($product) ?>" title="<?php echo get_the_title($product); ?>">
                                                                <?php echo get_the_title($product); ?>
                                                            </a>
                                                        </div>
                                                        <div class="price" id="price_<?php echo $product ?>">
                                                            <?php echo number_format($quantitys[$key] * get_field('price',$product)); ?> đ
                                                        </div>
                                                    </div>
                                                    <?php
                                                    } ?>
                                                </div>

                                                <ul class="order-summary">
                                                    <li class="sep"></li>
                                                    <li class="total">
                                                        <span class="k">Tổng cộng</span>
                                                        <span class="v _total" id="cart_info_total _total"></span>
                                                    </li>
                                                </ul>
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
</div>
<?php get_template_part('include/script') ?>
</body>
</html>
