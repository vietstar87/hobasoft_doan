<?php /* Template Name: FAQs */ ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php get_template_part('include/head') ?>
</head>
<body>
<div class="body">
    <?php get_template_part('header') ?>
    <div role="main" class="main pb-5">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="justify-content-start justify-content-md-end" style="text-align: right">
                            <?php if (function_exists('bcn_display')) {
                                bcn_display();
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="font-weight-bold"><?php the_title() ?></h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <aside class="sidebar col-md-4 col-lg-3 order-2 order-md-1">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1" data-plugin-sticky data-plugin-options="{'offset_top': 100}" role="tablist">
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="pages">
                                <h3 class="text-3 mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#togglePages" aria-expanded="false" aria-controls="togglePages">CONTENTS</a>
                                </h3>
                            </div>
                            <div id="togglePages" class="accordion-body collapse show" aria-labelledby="pages">
                                <div class="card-body">
                                    <ul class="list list-unstyled">
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-1" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> General Questions</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-2" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Regular & Extended</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-3" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> What is a single app?</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-4" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Permitted multi-use</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-5" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Advanced questions</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-6" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Company usage</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-7" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> ThemeForest & CodeCanyon</a>
                                        </li>
                                        <li class="mb-2">
                                            <a data-hash data-hash-offset="100" href="#faq-8" class="font-weight-semibold"><i class="fas fa-angle-right ml-1 mr-1 pr-2"></i> Author licensing FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </aside>
                <div class="col-md-8 col-lg-9 order-1 order-md-2 mb-5 mb-md-0">
                    <div class="row">
                        <div class="col">

                            <div id="faq-1" class="row mb-5">
                                <div class="col">
                                    <h2 class="font-weight-bold text-4 mb-3">General Questions</h2>
                                    <ul class="list list-unstyled font-weight-semibold text-2 mb-0">
                                        <li class="mb-2"><a data-hash data-hash-highlight data-hash-offset="100" href="#faq-1-1">How many types of Vietnam visa on arrival are there ?</a></li>
                                        <li class="mb-2"><a data-hash data-hash-highlight data-hash-offset="100" href="#faq-1-2">What is Vietnam visa on arrival (VOA) ?</a></li>
                                        <li class="mb-2"><a data-hash data-hash-highlight data-hash-offset="100" href="#faq-1-3">What is Visa on Arrival or Visa Online ?</a></li>
                                        <li class="mb-2"><a data-hash data-hash-highlight data-hash-offset="100" href="#faq-1-4">Our Visa to Vietnam Services at Honglamgiang DMC</a></li>
                                        <li class="mb-2"><a data-hash data-hash-highlight data-hash-offset="100" href="#faq-1-5">Who need visa when visiting Vietnam ?</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="my-5">
                            <div id="faq-1-1" class="row mb-5">
                                <div class="col">
                                    <h3 class="font-secondary font-weight-bold text-2 mb-3">What does royalty free mean?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                                </div>
                            </div>
                            <div id="faq-1-2" class="row mb-5">
                                <div class="col">
                                    <h3 class="font-secondary font-weight-bold text-2 mb-3">What do you mean by item and end product?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                                </div>
                            </div>
                            <div id="faq-1-3" class="row mb-5">
                                <div class="col">
                                    <h3 class="font-secondary font-weight-bold text-2 mb-3">What are some examples of permitted end products?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                                </div>
                            </div>
                            <div id="faq-1-4" class="row mb-5">
                                <div class="col">
                                    <h3 class="font-secondary font-weight-bold text-2 mb-3">Am I allowed to modify the item that I purchased?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                                </div>
                            </div>
                            <div id="faq-1-5" class="row mb-5">
                                <div class="col">
                                    <h3 class="font-secondary font-weight-bold text-2 mb-3">What does non-exclusive mean?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                                </div>
                            </div>
                            <hr class="my-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('footer') ?>
</div>
<?php get_template_part('include/script') ?>
</body>
</html>


