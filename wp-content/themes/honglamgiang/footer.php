<?php global $theme; ?>
<footer id="footer" class="footer-hover-links-light mt-0 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="text-3 mb-3"><?php echo $theme['company-name']; ?></h2>
                <ul class="list list-icon list-unstyled">
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Address:</span>
                        <?php echo $theme['company-address']; ?>
                    </li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i>
                        <span class="text-color-light">Phone:</span> <a
                                href="tel:<?php echo $theme['company-phone']; ?>"><?php echo $theme['company-phone']; ?></a>
                    </li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i>
                        <span class="text-color-light">Hotline:</span> <a
                                href="tel:<?php echo $theme['company-hotline']; ?>"><?php echo $theme['company-hotline']; ?></a>
                    </li>
                    <li class="mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i>
                        <span class="text-color-light">Email:</span> <a href="mailto:info@honglamgiang.com"
                                                                        class="link-underline-light"><?php echo $theme['company-email']; ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h2 class="text-3 mb-3">COMPANY</h2>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu_1',
                    'menu' => '',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="list list-icon list-unstyled">%3$s</ul>',
                    'depth' => 1,
                    'walker' => new footer_menu()
                ));
                ?>
            </div>
            <div class="col-lg-3">
                <h2 class="text-3 mb-3">RESOURCE</h2>
                <ul class="list list-icon list-unstyled">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_2',
                        'menu' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="list list-icon list-unstyled">%3$s</ul>',
                        'depth' => 1,
                        'walker' => new footer_menu()
                    ));
                    ?>
                </ul>
                <a href="http://www.shopperapproved.com/reviews/viet-nam-evisa.org/" class="shopperlink"><img src="//www.shopperapproved.com/seals/22904-m.gif" style="border: 0" alt="Customer Reviews" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by Shopper Approved \251 '+d.getFullYear()+'.'); return false;" /></a><script type="text/javascript">(function() { var js = window.document.createElement("script"); js.src = '//www.shopperapproved.com/seals/certificate.js'; js.type = "text/javascript"; document.getElementsByTagName("head")[0].appendChild(js); })();</script>
            </div>
        </div>
    </div>
    <div class="footer-copyright mt-0">
        <div class="container">
            <div class="row text-center text-md-left align-items-center">
                <div class="col-md-5 col-lg-5">
                    <ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
                        <li class="social-icons-facebook"><a href="<?php echo $theme['company-facebook']; ?>"
                                                             target="_blank"
                                                             title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-icons-facebook"><a href="<?php echo $theme['company-youtube']; ?>"
                                                             target="_blank"
                                                             title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-7"><p class="text-md-right pb-0 mb-0">Copyrights © 2018. All Rights Reserved
                        by <?php echo $theme['company-name']; ?></p></div>
            </div>
        </div>
    </div>
</footer>
