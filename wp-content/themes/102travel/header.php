<?php global $theme; ?>
<header id="header" class="header clearfix">
    <div id="top-bar" class="header__top top-bar clearfix">
        <div class="container">
            <div class="row">
                <nav class="top-bar__item top-bar__item--nav navigation navigation--inline pull-right">
                    <ul id="user_support" class="navbar-right">
                        <li><a href="callto:<?php echo $theme['company-hotline']; ?>">
                                <i class="fa fa-phone"></i> Hotline:&nbsp;
                                <span class="hotline__number"><?php echo $theme['company-hotline']; ?></span> </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header__main  clearfix">
        <div class="container">
            <div class="row">
                <a class="toggle-nav visible-xs visible-sm" data-target="#hd-container"
                   data-effect="hd-effect-4"><i class="hd hd-nav"></i></a>
                <a class="toggle-search visible-xs visible-sm" data-target="#main-search"><i
                            class="hd hd-search"></i></a>

                <div id="logo" class="logo-wrapper col-md-5">
                    <a href="<?php bloginfo('home') ?>">
                        <img src="<?php echo $theme['company-logo']['url']; ?>" height="40px" width="auto">
                    </a>
                </div>

                <div style="padding-left: 10px;" class="search-area col-md-7" id="main-search">
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