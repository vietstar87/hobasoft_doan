<?php /* Template Name: CheckOut Step 2 */ ?>
<?php 
    global $wpdb;
    $table = '102_orders';
    $data = array(
        'order_name' => $_POST['order_name'],
        'order_address' => $_POST['order_address'],
        'order_city' => $_POST['order_city'],
        'order_district'=> $_POST['order_district'],
        'order_ward'=> $_POST['order_ward'],
        'order_phone'=> $_POST['order_phone'],
        'order_product'=> $_POST['order_product'],
        'order_quantity'=> $_POST['order_quantity'],
        'order_total'=> $_POST['order_total'],
    );
    $wpdb->insert($table,$data);
    $order_id = $wpdb->insert_id;
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php get_template_part('include/head') ?>
</head>
<body class=" page-checkout">
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
                                    <div class="content" style="width: 100%">
                                            <div class="box">
                                                <div class="box__header">
                                                    <h2 class="box__title">ĐẶT HÀNG THÀNH CÔNG</h2>
                                                </div>
                                                <div class="box__body">
                                                    <div class="order-items">
                                                        <h2 class="box__title margin-bottom-10">Chúc mừng bạn đã đặt hàng thành công</h2>
                                                    </div>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Tên khách hàng: <?php echo $_POST['order_name']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Địa chỉ: <?php echo $_POST['order_address']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thành phố: <?php echo $_POST['order_city']; ?></td>
                                                        </tr>
                                                        <tr>                                                            
                                                            <td>Quận/ Huyện: <?php echo $_POST['order_district']; ?></td>
                                                        </tr>
                                                        <tr>                                                            
                                                            <td>Phường: <?php echo $_POST['order_ward']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sản phẩm: <?php echo get_the_title($_POST['order_product']); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Số lượng: <?php echo $_POST['order_quantity']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tổng cộng : <?php echo number_format($_POST['order_total']); ?> đ</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="box__footer">
                                                    <a href="<?php bloginfo('home') ?>" class="btn btn-success btn-lg btn--buy-now pull-right">QUAY LẠI TRANG CHỦ</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                            </div>
                        </main>
                        <footer id="footer" class="footer-new clearfix">
                            <div class="footer-bottom hidden-xs hidden-sm">
                                <div class="container">
                                    <div class="col-md-10">
                                        Mã số thuế: 0310955176 do Sở Kế hoạch đầu tư TP HCM cấp ngày 29/06/2011
                                        <br> ĐT: (028) 7300 5757 - Email: kinhdoanh@hotdeal.vn
                                        <br>
                                    </div>
                                    <div class="col-md-2 icon-dangky-cong-thuong">
                                        <a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=21349" target="_parent"><img src="https://s3-hd.hotdeal.vn/original/2017/11/1/5a0a6efbd6a4d-logo-dangky.png"></a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
