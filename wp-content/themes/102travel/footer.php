<?php global $theme; ?>
<footer id="footer" class="footer-new clearfix">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="hidden-xs visible-xs visible-sm">
                    <div class="hotline">
                        <span class="hotline__text">HOTLINE&nbsp;</span>
                        <span class="hotline__number"><?php echo $theme['company-hotline']; ?></span>
                    </div>
                </div>
                <div class="col-md-8 footer-menu">
                    <div class="col-md-4 col-b-left footer-menu__column menu">
                        <ul>
                            <li>
                                <p class="menu__heading">
                                    <?php $locations = get_nav_menu_locations();
                                    $menu = wp_get_nav_menu_object($locations['footer_menu_1']);
                                    echo $menu->name;
                                    ?>
                                </p>
                                <div class="menu__listing">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'  => 'footer_menu_1',
                                        'menu'            => '',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '%3$s',
                                        'depth'            => '1',
                                        'walker'          => new footer_menu()
                                    ) );
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-b-left footer-menu__column menu">
                        <ul>
                            <li><p class="menu__heading">
                                    <?php $locations = get_nav_menu_locations();
                                    $menu = wp_get_nav_menu_object($locations['footer_menu_2']);
                                    echo $menu->name;
                                    ?>
                                </p>
                                <div class="menu__listing">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'  => 'footer_menu_2',
                                        'menu'            => '',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '%3$s',
                                        'depth'            => '1',
                                        'walker'          => new footer_menu()
                                    ) );
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-b-left footer-menu__column menu">
                        <ul>
                            <li><p class="menu__heading">
                                    <?php $locations = get_nav_menu_locations();
                                    $menu = wp_get_nav_menu_object($locations['footer_menu_3']);
                                    echo $menu->name;
                                    ?>
                                </p>
                                <div class="menu__listing">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'  => 'footer_menu_3',
                                        'menu'            => '',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '%3$s',
                                        'depth'            => '1',
                                        'walker'          => new footer_menu()
                                    ) );
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 location hidden-xs">
                    <p><?php echo $theme['company-name']; ?></p>
                    <?php echo $theme['company-address']; ?><br>
                    Điện thoại: <?php echo $theme['company-hotline']; ?><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom ">
        <div class="container">
            <div class="col-md-10">
                Mã số thuế: <?php echo $theme['company-tax']; ?><br>
                ĐT: <?php echo $theme['company-hotline']; ?> - Email: <?php echo $theme['company-email']; ?><br>
            </div>
            <div class="col-md-2 icon-dangky-cong-thuong">
                <a target="_parent">
                    <img src="https://s3-hd.hotdeal.vn/original/2017/11/1/5a0a6efbd6a4d-logo-dangky.png">
                </a>
            </div>
        </div>
    </div>
</footer>