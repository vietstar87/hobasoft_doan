<div class="col-md-3 category-sidebar" id="category_sidebar">
    <form action="<?php bloginfo('home') ?>" method="get" id="filter_search">
        <input name="s" value="" type="hidden">
        <div class="hidden-xs bo-loc-san-pham box box--shadow box--no-padding">
            <?php
            $categories = get_terms([
                'taxonomy' => array('danh_muc'),
                'hide_empty' => true,
            ]);
            if($categories) : ?>
            <?php global $wp;
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                $term_get = $_GET['danh_muc'];
            ?>
            <div class="filter filter--listing">
                <div class="filter__title">
                    <i class="filter__icon hd hd-list"></i> DANH MỤC

                    <a href="#" class="toggle-filter visible-xs visible-sm"><i class="fa fa-chevron-down"></i></a>
                </div><div class="filter-active-items"></div>
                <div class="filter__body">
                    <div class="filter__button">
                        <a href="#">
                            Danh mục
                        </a>
                        <ul>
                            <?php
                            foreach ($categories as $category) {
                                ?>
                                <li>
                                    <a class="<?php if($term->term_id == $category->term_id) { echo "active"; } ?><?php if($term_get == $category->term_id) { echo "active"; } ?>" href="<?php echo get_term_link($category->term_id); ?>" data-taxonomy-name="danh_muc" data-taxonomy-id="<?php echo $category->term_id; ?>"><?php echo $category->name ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php
            $region_interiors = get_terms([
                'taxonomy' => array('region_interior'),
                'hide_empty' => true,
            ]);
            if($region_interiors) :
            ?>
            <div class="filter">
                <div class="filter__title">
                    <i class="filter__icon hd hd-sort"></i> Trong nước
                    <a href="#" class="toggle-filter"><i class="fa fa-chevron-down"></i></a>
                </div>
                <div class="filter__body">


                    <?php
                    foreach ($region_interiors as $interior) {

                            ?>
                            <label class="filter__button <?php foreach ($_GET['region_interior'] as $interi) {
                                if ($interi == $interior->term_id) {
                                    echo 'active';
                                }
                            } ?>">
                                <input <?php if(isset($_GET['region_interior'])) { foreach ($_GET['region_interior'] as $interi) {
                                    if ($interi == $interior->term_id) {
                                        echo 'checked';
                                    }
                                } } ?> data-taxonomy-name="region_interior" type="checkbox"
                                       name="region_interior[]"
                                       value="<?php echo $interior->term_id ?>"/><?php echo $interior->name ?>
                            </label>
                            <?php

                    }
                    ?>
                </div>
            </div>
            <?php endif; ?>

            <?php
            $region_overseas = get_terms([
                'taxonomy' => array('region_oversea'),
                'hide_empty' => true,
            ]);
            if($region_overseas) :
                ?>
                <div class="filter">
                    <div class="filter__title">
                        <i class="filter__icon hd hd-sort"></i> Nước ngoài
                        <a href="#" class="toggle-filter"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="filter__body">

                        <?php
                        foreach ($region_overseas as $region_oversea) {
                            ?>
                            <label class="filter__button <?php foreach ($_GET['region_oversea'] as $region) {
                                if ($region == $region_oversea->term_id) {
                                    echo 'active';
                                }
                            } ?>">
                                <input <?php if(isset($_GET['region_oversea'])) { foreach ($_GET['region_oversea'] as $region) {
                                    if ($region == $region_oversea->term_id) {
                                        echo 'checked';
                                    }
                                } } ?> data-taxonomy-name="region_oversea" type="checkbox" name="region_oversea[]" value="<?php echo $region_oversea->term_id ?>"/><?php echo $region_oversea->name ?>
                            </label>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $khoang_gias = get_terms([
                'taxonomy' => array('khoang_gia'),
                'hide_empty' => true,
            ]);
            if($khoang_gias) :
                ?>
                <div class="filter">
                    <div class="filter__title">
                        <i class="filter__icon hd hd-sort"></i> Khoảng giá
                        <a href="#" class="toggle-filter"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="filter__body">

                        <?php
                        foreach ($khoang_gias as $khoang_gia) {
                            ?>
                            <label class="filter__button <?php foreach ($_GET['khoang_gia'] as $khgia) {
                                if ($khgia == $khoang_gia->term_id) {
                                    echo 'active';
                                }
                            } ?>">
                                <input <?php if(isset($_GET['khoang_gia'])) { foreach ($_GET['khoang_gia'] as $khgia) {
                                    if ($khgia == $khoang_gia->term_id) {
                                        echo 'checked';
                                    }
                                } } ?> data-taxonomy-name="khoang_gia" type="checkbox" name="khoang_gia[]" value="<?php echo $khoang_gia->term_id ?>"/><?php echo $khoang_gia->name ?>
                            </label>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $rates = get_terms([
                'taxonomy' => array('rate'),
                'hide_empty' => true,
            ]);
            if($rates) :
                ?>
                <div class="filter">
                    <div class="filter__title">
                        <i class="filter__icon hd hd-sort"></i> Sao
                        <a href="#" class="toggle-filter"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="filter__body">

                        <?php
                        foreach ($rates as $rate) {
                            ?>
                            <label class="filter__button <?php foreach ($_GET['rate'] as $rat) {
                                if ($rat == $rate->term_id) {
                                    echo 'active';
                                }
                            } ?>">
                                <input <?php if(isset($_GET['rate'])) { foreach ($_GET['rate'] as $rat) {
                                    if ($rat == $rate->term_id) {
                                        echo 'checked';
                                    }
                                } } ?>  data-taxonomy-name="rate" type="checkbox" name="rate[]" value="<?php echo $rate->term_id ?>"/><?php echo $rate->name ?>
                            </label>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </form>
</div>