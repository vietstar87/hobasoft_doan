<?php global $theme; ?>
<header id="header"
        data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 155, 'stickySetTop': '-155px'}">
    <div class="header-body">
        <div class="header-top">
            <div class="header-top-container container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <span class="d-none d-sm-flex align-items-center">
                            <i class="lnr lnr-clock mr-1"></i>
                            <?php echo $theme['company-workinghours']; ?>
                        </span>
                    </div>
                    <div class="header-column justify-content-end">
                        <ul class="nav">


                        </ul>
                        <ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
                            <li class="social-icons-facebook">
                                <a href="<?php echo $theme['company-facebook']; ?>" target="_blank" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-facebook">
                                <a href="<?php echo $theme['company-youtube']; ?>" target="_blank" title="Youtube"><i
                                            class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                        <a href="<?php echo $theme['link-check-status']; ?>"
                           class="btn btn-primary btn-2 btn-fs-2 font-weight-semibold rounded-0 d-none d-sm-flex ml-3">CHECK
                            STATUS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row py-3">
                <div class="header-column justify-content-start d-none d-md-flex">
                    <span class="d-none d-md-flex align-items-center font-weight-semibold">
                        <i class="lnr lnr-map-marker text-3 font-weight-bold text-color-primary mr-1"></i>
                        <?php echo $theme['company-address']; ?>
                    </span>
                </div>
                <div class="header-column justify-content-md-center">
                    <div class="header-logo">
                        <a href="<?php bloginfo('home') ?>">
                            <img alt="EZ" height="50" src="<?php echo $theme['company-logo']['url']; ?>">
                        </a>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <span class="d-flex align-items-center mr-sm-4">
                        <i class="lnr lnr-phone-handset text-3 font-weight-bold text-color-primary mr-2"></i>
                        <a href="tel:+84362198748" class="font-weight-semibold"><?php echo $theme['company-hotline']; ?></a>
                    </span>
                    <span class="d-none d-sm-flex align-items-center">
                        <i class="lnr lnr-envelope text-4 font-weight-bold text-color-primary mr-2"></i>
                        <a href="mailto:info@honglamgiang.com" class="font-weight-semibold"><?php echo $theme['company-email']; ?></a>
                    </span>
                </div>
            </div>
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-nav header-nav-border-top header-nav-top-line justify-content-start">
                        <div class="header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav flex-column flex-lg-row" id="mainNav">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'  => 'main_menu',
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
                                        'walker'          => new main_menu()
                                    ) );
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <a href="<?php echo $theme['link-check-status']; ?>"
                       class="btn btn-link font-weight-bold text-color-primary" target="_blank">CHECK STATUS</a>
                    <a href="<?php echo $theme['link-apply-visa']; ?>"
                       class="btn btn-link font-weight-bold text-color-primary" target="_blank">APPLY TO VISA</a>
                    <button class="header-btn-collapse-nav ml-3" data-toggle="collapse"
                            data-target=".header-nav-main nav">
                        <span class="hamburguer">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="close">
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>