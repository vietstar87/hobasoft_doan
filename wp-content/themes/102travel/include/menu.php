<?php global $theme; ?>
<a class="toggle-nav visible-xs visible-sm" data-target="#hd-container" data-effect="hd-effect-4"><i
        class="hd hd-remove"></i></a>
<div class="hd-menu hd-effect-4 visible-xs visible-sm">
    <div class="hd-menu-container">
        <nav class="side-nav">

            <ul class="nav-menu" style="padding: 10px 0; margin: 0;">
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
        </nav>

        <nav class="side-nav side-nav-branding">
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
                'depth'            => '1',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker'          => new category_menu()
            ) );
            ?>
        </nav>

        <div class="hotline">
            <span class="hotline__text">HOTLINE</span>
            <span class="hotline__number"><?php echo $theme['company-hotline']; ?></span>
        </div>

    </div>
</div>