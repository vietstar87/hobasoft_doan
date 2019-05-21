<?php global $theme; ?>
<header id="header" class="header clearfix">
    <div id="top-bar" class="header__top top-bar clearfix">
        <div class="container">
            <!--  <form id="formCity" method="post" action="/common/index/changecity"> -->
            <div class="row">

<!--                <div class="top-bar__item newsletter-link pull-left dropdown group-register-newsletter">-->
<!--                    <ul class="navbar-center">-->
<!--                        <li class="dropdown dropdown-arrow">-->
<!--                            <a href="#" data-toggle="dropdown"><i class="hd hd-newsletter"></i>-->
<!--                                &nbsp;Đăng ký bản tin</a>-->
<!--                            <ul class="dropdown-menu newsletter-popup">-->
<!--                                <li>-->
<!--                                    <div class="modal-header">-->
<!--                                        <h4 class="modal-title text-center">ĐĂNG KÝ BẢN TIN</h4>-->
<!--                                    </div>-->
<!--                                    <div class="modal-body clearfix">-->
<!--                                        <form id="login-form-popup" class="form--general"-->
<!--                                              method="post" action="/registernewletter"-->
<!--                                              data-toggle="validator">-->
<!--                                            <div class="form-group">-->
<!--                                                <div class="input-group">-->
<!--                                                    <div class="input-group-addon"><i-->
<!--                                                                class="hd hd-email"></i></div>-->
<!--                                                    <input type="text" class="form-control"-->
<!--                                                           id="email_newsletter"-->
<!--                                                           name="email_newsletter"-->
<!--                                                           placeholder="Nhập email"-->
<!--                                                           autocomplete="off"-->
<!--                                                           data-fv-notempty="true"-->
<!--                                                           data-fv-notempty-message="Vui lòng nhập Email"-->
<!--                                                           pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$"-->
<!--                                                           data-fv-regexp-message="Email không hợp lệ"-->
<!--                                                    />-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group register-new-letter-comfirm">-->
<!--                                                <div class="input-group">-->
<!--                                                    <label for="" class="control-label"-->
<!--                                                           style="font-weight: normal;">-->
<!--                                                        <input type="checkbox" name="agree"-->
<!--                                                               id="agree" value="1"-->
<!--                                                               data-fv-notempty="true"-->
<!--                                                               data-fv-notempty-message="Bạn cần phải đồng ý với chính sách bảo mật thông tin">-->
<!--                                                        Đồng ý với <a target="_blank"-->
<!--                                                                      href="https://www.hotdeal.vn/chinh-sach-bao-mat-thong-tin.html">chính-->
<!--                                                            sách bảo mật thông tin</a>.-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <button type="submit"-->
<!--                                                        class="btn btn-success btn-block" disabled>-->
<!--                                                    ÐĂNG KÝ-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->

                <nav class="top-bar__item top-bar__item--nav navigation navigation--inline pull-right">
                    <ul id="user_support" class="navbar-right">
                        <li><a href="callto:<?php echo $theme['company-hotline']; ?>">
                                <i class="fa fa-phone"></i> Hotline:&nbsp;<span
                                        class="hotline__number"><?php echo $theme['company-hotline']; ?></span> </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--</form>-->
    </div>

    <div class="header__main  clearfix">
        <div class="container">
            <div class="row">
                <a class="toggle-nav visible-xs visible-sm" data-target="#hd-container"
                   data-effect="hd-effect-4"><i class="hd hd-nav"></i></a>
                <a class="toggle-search visible-xs visible-sm" data-target="#main-search"><i
                            class="hd hd-search"></i></a>

                <div id="logo" class="logo-wrapper col-md-4">
                    <a href="<?php bloginfo('home') ?>">
                        <img src="<?php echo $theme['company-logo']['thumbnail']; ?>" height="40px" width="auto">
                    </a>
                </div>

                <div style="padding-left: 10px;" class="search-area col-md-8" id="main-search">
                    <form action="<?php bloginfo('home') ?>" method="get" class="">
                        <div class="search-box form-inline clearfix">
                            <div class="search-box__category">
                                <?php
                                $variable = $_GET['post_type'];
                                ?>
                                <select class="selectpicker" id="category_search" name="post_type">
                                    <option value="" disabled="" <?php if($variable) { echo ""; }else {echo "selected";} ?>>Tất cả danh mục</option>
                                    <option value="hotel" <?php if(is_search()) { if ($variable == 'hotel') { echo 'selected'; } } ?>>- Hotel</option>
                                    <option value="tour" <?php if(is_search()) { if ($variable == 'tour') { echo 'selected'; } } ?>>- Tour</option>
                                </select>
                            </div>
                            <div class="search-box__input" style="overflow: visible;">
                                <input type="text" id="search_all" class="form-control input-search"
                                       name="s"
                                       placeholder="Từ khóa tìm kiếm"
                                       <?php if(is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"<?php } ?>
                                />

                                <a class="btn btn--remove hidden"><i class="hd hd-remove"></i></a>

                                <a class="btn btn--cancel hidden">Hủy</a>

                                <button class="btn btn-danger">
                                    <i class="hd hd-search"></i>
                                    <span class="sr-only">Tìm kiếm</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <nav class="header__navigation main-nav" id="main-nav">
        <div class="container">
            <ul class="nav main-nav">
                <li class="main-nav__branding active">
                    <a class="branding__heading" href="#">
                        <span class="">Danh mục <i class="fa fa-angle-down"></i></span>
                    </a>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'category_menu',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'branding__menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'          => new category_menu()
                    ) );
                    ?>
                </li>
                <li class="visible-affix">
                    <a href="<?php bloginfo('home') ?>" class="logo-affix">
                        <img class="logo-white" src="<?php echo $theme['company-logo']['thumbnail']; ?>" style="height: 21px; width: auto">
                    </a>
                </li>
                <li class="visible-affix">
                    <div class="search-area">
                        <form action="<?php bloginfo('home') ?>" method="get" class="">
                            <div class="search-box form-inline clearfix">
                                <div class="search-box__category">
                                    <select class="selectpicker" id="category_search" name="post_type">
                                        <option value="" disabled="" <?php if($variable) { echo ""; }else {echo "selected";} ?>>Tất cả danh mục</option>
                                        <option value="hotel" <?php if(is_search()) { if ($variable == 'hotel') { echo 'selected'; } } ?>>- Hotel</option>
                                        <option value="tour" <?php if(is_search()) { if ($variable == 'tour') { echo 'selected'; } } ?>>- Tour</option>
                                    </select>
                                </div>
                                <div class="search-box__input" style="overflow: visible;">
                                    <input type="text" id="search_all_minimize" class="form-control input-search"
                                           name="s"
                                           placeholder="Từ khóa tìm kiếm"
                                           <?php if(is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"<?php } ?>
                                    />
                                    <button class="btn btn-search">
                                        <i class="hd hd-search"></i>
                                        <span class="sr-only">Tìm kiếm</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'header_menu',
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
                    'walker'          => new header_menu()
                ) );
                ?>
            </ul>
        </div>
    </nav>


</header>