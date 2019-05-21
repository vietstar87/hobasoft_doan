<aside class="sidebar col-md-4 col-lg-3 order-2">
    <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" role="tablist">

        <div class="card">
            <div id="toggleSidebarSearch"
                 class="accordion-body accordion-body-show-border-top collapse show" role="tabpanel"
                 aria-labelledby="sidebarSearchForm">
                <div class="card-body pt-4">
                    <form id="sidebarSearchForm" class="sidebar-search"
                          action="<?php bloginfo('home') ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control line-height-1 bg-light-5" name="s"
                                   id="s" placeholder="Search..." required="">
                            <span class="input-group-btn">
                                <button class="btn btn-light" type="submit">
                                    <i class="fas fa-search text-color-primary"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--        <div class="card">-->
<!--            <div class="card-header accordion-header" role="tab" id="categories">-->
<!--                <h3 class="text-3 mb-0">-->
<!--                    <a href="#" data-toggle="collapse" data-target="#toggleCategories"-->
<!--                       aria-expanded="false" aria-controls="toggleCategories">CATEGORIES</a>-->
<!--                </h3>-->
<!--            </div>-->
<!--            <div id="toggleCategories" class="accordion-body collapse show"-->
<!--                 aria-labelledby="categories">-->
<!--                <div class="card-body">-->
<!--                    <ul class="list list-unstyled">-->
<!--                        <li class="mb-2">-->
<!--                            <a href="#" class="font-weight-semibold"><i-->
<!--                                        class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Design (2)</a>-->
<!--                        </li>-->
<!--                        <li class="mb-2">-->
<!--                            <a href="#" class="font-weight-semibold text-color-primary"><i-->
<!--                                        class="fas fa-angle-right ml-1 mr-1 pr-2" id="photos"-->
<!--                                        data-toggle="collapse" data-target="#submenuPhotos"-->
<!--                                        aria-expanded="true" aria-controls="submenuPhotos" role="list"-->
<!--                                        onclick="return false;"></i> Photos (4)</a>-->
<!--                            <ul class="list list-unstyled collapse show" id="submenuPhotos"-->
<!--                                aria-labelledby="photos">-->
<!--                                <li>-->
<!--                                    <a href="#">Animals</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Business (4)</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Sports</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="mb-2">-->
<!--                            <a href="#" class="font-weight-semibold"><i-->
<!--                                        class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Videos (2)</a>-->
<!--                        </li>-->
<!--                        <li class="mb-2">-->
<!--                            <a href="#" class="font-weight-semibold"><i-->
<!--                                        class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Lifestyle (4)</a>-->
<!--                        </li>-->
<!--                        <li class="mb-2">-->
<!--                            <a href="#" class="font-weight-semibold"><i-->
<!--                                        class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Technology-->
<!--                                (1)</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card">-->
<!--            <div class="card-header accordion-header" role="tab" id="popularPosts">-->
<!--                <h3 class="text-3 mb-0">-->
<!--                    <a href="#" data-toggle="collapse" data-target="#togglePopularPosts"-->
<!--                       aria-expanded="false" aria-controls="togglePopularPosts">POPULAR</a>-->
<!--                </h3>-->
<!--            </div>-->
<!--            <div id="togglePopularPosts" class="accordion-body collapse show"-->
<!--                 aria-labelledby="popularPosts">-->
<!--                <div class="card-body">-->
<!---->
<!--                    <article class="row align-items-center mb-3">-->
<!--                        <div class="col-4 pr-0">-->
<!--                            <a href="blog-single-post.html">-->
<!--                                <img src="img/blog/posts/post-1-square.jpg"-->
<!--                                     class="img-fluid hover-effect-2" alt=""/>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-8">-->
<!--                            <span class="text-color-primary">Jan 17, 2018</span>-->
<!--                            <h4 class="text-2 mb-0">-->
<!--                                <a href="blog-single-post.html" class="text-1">Lorem ipsum dolor...</a>-->
<!--                            </h4>-->
<!--                        </div>-->
<!--                    </article>-->
<!---->
<!--                    <article class="row align-items-center mb-3">-->
<!--                        <div class="col-4 pr-0">-->
<!--                            <a href="blog-single-post.html">-->
<!--                                <img src="img/blog/posts/post-2-square.jpg"-->
<!--                                     class="img-fluid hover-effect-2" alt=""/>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-8">-->
<!--                            <span class="text-color-primary">Jan 16, 2018</span>-->
<!--                            <h4 class="text-2 mb-0">-->
<!--                                <a href="blog-single-post.html" class="text-1">Lorem ipsum dolor...</a>-->
<!--                            </h4>-->
<!--                        </div>-->
<!--                    </article>-->
<!---->
<!--                    <article class="row align-items-center mb-3">-->
<!--                        <div class="col-4 pr-0">-->
<!--                            <a href="blog-single-post.html">-->
<!--                                <img src="img/blog/posts/post-3-square.jpg"-->
<!--                                     class="img-fluid hover-effect-2" alt=""/>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="col-8">-->
<!--                            <span class="text-color-primary">Jan 15, 2018</span>-->
<!--                            <h4 class="text-2 mb-0">-->
<!--                                <a href="blog-single-post.html" class="text-1">Lorem ipsum dolor...</a>-->
<!--                            </h4>-->
<!--                        </div>-->
<!--                    </article>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card">-->
<!--            <div class="card-header accordion-header" role="tab" id="tags">-->
<!--                <h3 class="text-3 mb-0">-->
<!--                    <a href="#" data-toggle="collapse" data-target="#toggleTags" aria-expanded="false"-->
<!--                       aria-controls="toggleTags">TAGS</a>-->
<!--                </h3>-->
<!--            </div>-->
<!--            <div id="toggleTags" class="accordion-body collapse show" role="tabpanel"-->
<!--                 aria-labelledby="tags">-->
<!--                <div class="card-body">-->
<!--                    <ul class="list-inline">-->
<!--                        <li class="list-inline-item"><a href="#"-->
<!--                                                        class="badge badge-dark badge-sm badge-pill px-3 py-2 mb-2">NEWS</a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item"><a href="#"-->
<!--                                                        class="badge badge-dark badge-sm badge-pill px-3 py-2 mb-2">JOBS</a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item"><a href="#"-->
<!--                                                        class="badge badge-dark badge-sm badge-pill px-3 py-2 mb-2">POST</a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item"><a href="#"-->
<!--                                                        class="badge badge-dark badge-sm badge-pill px-3 py-2 mb-2">PHOTOS</a>-->
<!--                        </li>-->
<!--                        <li class="list-inline-item"><a href="#"-->
<!--                                                        class="badge badge-dark badge-sm badge-pill px-3 py-2 mb-2">INNOVATION</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card">-->
<!--            <div class="card-header accordion-header" role="tab" id="sidebarInstagram">-->
<!--                <h3 class="text-3 mb-0">-->
<!--                    <a href="#" data-toggle="collapse" data-target="#toggleSidebarInstagram"-->
<!--                       aria-expanded="false" aria-controls="toggleSidebarInstagram">FROM INSTAGRAM</a>-->
<!--                </h3>-->
<!--            </div>-->
<!--            <div id="toggleSidebarInstagram" class="accordion-body collapse show" role="tabpanel"-->
<!--                 aria-labelledby="sidebarInstagram">-->
<!--                <div class="card-body">-->
<!--                    <div id="instafeedNoMargins"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>

<!--    <div class="card bg-primary border-0 rounded">-->
<!--        <div class="card-body p-4 my-3">-->
<!--            <div class="icon-box icon-box-style-1 align-items-center mb-0">-->
<!--                <div class="icon-box-icon pr-2">-->
<!--                    <img width="60" src="img/icons/envelope.svg" alt="" data-icon-->
<!--                         data-plugin-options="{'color': '#FFF'}"/>-->
<!--                </div>-->
<!--                <div class="icon-box-info">-->
<!--                    <div class="icon-box-info-title">-->
<!--                        <span class="icon-box-sub-title text-color-light">SUBSCRIBE TO OUR</span>-->
<!--                        <h4 class="text-color-light font-weight-bold line-height-1 mb-0">NEWSLETTER</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <p class="text-color-light opacity-6 mb-3">Enter your email address to subscribe to my-->
<!--                newsletter</p>-->
<!--            <form class="newsletter-form newsletter-form-error-pos-2 form-errors-light"-->
<!--                  action="php/newsletter-subscribe.php" method="post">-->
<!--                <div class="newsletter-form-success alert alert-success d-none">-->
<!--                    <strong>Success!</strong> You've been added to our email list.-->
<!--                </div>-->
<!--                <div class="newsletter-form-error alert alert-danger d-none">-->
<!--                    <strong>Error!</strong> There was an error to add your email.-->
<!--                </div>-->
<!---->
<!--                <div class="form-row">-->
<!--                    <div class="form-group col mb-0">-->
<!--                        <input type="email"-->
<!--                               class="newsletter-email form-control rounded-0 border-0 line-height-1"-->
<!--                               placeholder="Email address" aria-label="Email address" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-row">-->
<!--                    <div class="form-group col mb-0">-->
<!--                        <input type="submit" value="SUBSCRIBE"-->
<!--                               class="btn btn-quaternary btn-v-3 font-weight-semibold justify-content-center w-100 rounded-0">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
</aside>
