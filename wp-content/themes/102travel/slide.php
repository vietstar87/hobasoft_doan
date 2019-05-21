<?php global $theme; ?>
<div class="cate-on-slide">
    <div class="cycle-slideshow"
         data-cycle-slides="> div"
         data-cycle-timeout="5000"
         data-cycle-prev=".cate-on-slide .cycle-prev"
         data-cycle-next=".cate-on-slide .cycle-next"
         data-cycle-fx="scrollHorz"
         data-cycle-loader="wait"
         data-cycle-pager=".cycle-pager"
         data-cycle-swipe="true">
        <?php
        if (isset($theme['opt-slides']) && !empty($theme['opt-slides'])) {
        foreach ($theme['opt-slides'] as $value) {
        ?>
        <div>
            <a href="<?php echo $value['url']; ?>"
               data-id="7233">
                <img class="hidden-sm hidden-xs"
                     src="<?php echo $value['image']; ?>">
                <img class="img-responsive visible-sm visible-xs"
                     src="<?php echo $value['image']; ?>">
            </a>
        </div>
        <?php } } ?>
    </div>
    <a href="#" class="cycle-prev"><span class="icon-arr-left"></span></a>
    <a href="#" class="cycle-next"><span class="icon-arr-right"></span></a>
    <div class="cycle-pager"></div>
</div>

<style>
    .cate-on-slide {
        position: relative;
    }

    .cate-on-slide .cycle-prev, .cate-on-slide .cycle-next {
        position: absolute;
        top: 50%;
        display: none;
        width: 36px;
        height: 66px;
        line-height: 80px;
        margin-top: -33px;
        background-color: #000;
        background-color: rgba(0, 0, 0, 0.2);
        z-index: 100;
        text-align: center;
        cursor: pointer;
    }

    .cate-on-slide .cycle-prev .icon-arr-left, .cate-on-slide .cycle-next .icon-arr-right {
        background-image: url('img/sprite@1x.png');
        width: 13px;
        height: 25px;
        display: inline-block;
    }

    .cate-on-slide .cycle-prev {
        left: 0px;
    }

    .cate-on-slide .cycle-next {
        right: 0px;
    }

    .cate-on-slide .cycle-prev .icon-arr-left {
        background-position: -199px -60px;
    }

    .cate-on-slide .cycle-next .icon-arr-right {
        background-position: 0px -127px;
    }

    .cate-on-slide:hover .cycle-prev {
        display: block;
    }

    .cate-on-slide:hover .cycle-next {
        display: block;
    }

    .cycle-pager {
        text-align: right;
        width: 100%;
        z-index: 500;
        top: 10px;
        overflow: hidden;
        padding-top: 8px;
    }

    .cycle-pager span {
        font-size: 40px;
        width: 16px;
        height: 16px;
        display: inline-block;
        color: #ddd;
        line-height: 10px;
    }

    .cycle-pager span.cycle-pager-active {
        color: #70be10;
    }

    .cycle-pager > * {
        cursor: pointer;
    }
</style>