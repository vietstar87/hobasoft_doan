<div class="sidebar">
    <div class="block block--normal">
        <div class="block__header">
            <h3 class="block__title">Deal liên quan</h3>
        </div>
        <div class="block__content clearfix">
            <div class="products products--list">
                <?php
                $recent_posts = wp_get_recent_posts(array('post_type'=>array('hotel','tour')));
                foreach ($recent_posts as $recent) { ?>
                    <div class="product-wrapper product-auto-resize product-image-padding">
                        <div class="product">
                            <div class="product__image"><a
                                        href="<?php echo the_permalink($recent['ID']) ?>"
                                        title="<?php echo $recent['post_name'] ?>">
                                    <img width="230" height="230" class="lazy b-error b-error b-loaded"
                                         src="<?php echo get_the_post_thumbnail_url($recent['ID'],'product-image') ?>"
                                         alt="<?php echo $recent['post_name'] ?>">
                                </a>
                            </div>
                            <div class="product__header">
                                <h3 class="product__title"><a
                                            href="<?php echo the_permalink($recent['ID']) ?>"
                                            title="<?php echo $recent['post_name'] ?>"><?php echo $recent['post_name'] ?></a>
                                </h3>
                            </div>
                            <div class="product__info">
                                <div class="product__price">
                                    <span class="price">
                                        <span class="price__value"><?php echo get_field('gia_khuyen_mai',$recent['ID']) ?></span>
                                        <span class="price__symbol">đ</span>
                                    </span>
                                </div>
                                <div class="product__price product__price--list-price">
                                    <span class="price price--list-price">
                                        <span class="price__value"><?php echo get_field('price',$recent['ID']) ?></span>
                                        <span class="price__symbol">đ</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                wp_reset_query();
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>