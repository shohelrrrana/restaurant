<?php
    /**
     * The front page template file
     *
     * @package restaurant
     */

    get_header();
    $sortable_front_page_sections = get_option( 'sortable_front_page_sections', [] );
?>

<div role="main" class="main">
    <div class="slider-container rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on'}">
            <ul>
                <li data-transition="fade">
                    <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/slides/slide-restaurant-1.jpg"
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption top-label alternative-font"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="-55"
                        data-start="500"
                        style="z-index: 5"
                        data-transform_in="y:[-300%];opacity:0;s:500;">WELCOME TO</div>

                    <div class="tp-caption"
                        data-x="left" data-hoffset="185"
                        data-y="center" data-voffset="-55"
                        data-start="1000"
                        style="z-index: 5"
                        data-transform_in="x:[300%];opacity:0;s:500;"><img src="https://portotheme.com/html/porto/8.0.0/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption main-label"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="-5"
                        data-start="1500"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5"
                        data-mask_in="x:0px;y:0px;">THE PORTO</div>

                    <div class="tp-caption bottom-label"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="40"
                        data-start="2000"
                        style="z-index: 5; font-size: 1.2em;"
                        data-transform_in="y:[100%];opacity:0;s:500;">The best place to eat in downtown Porto!</div>

                    <a class="tp-caption btn btn-md btn-primary"
                        data-hash
                        data-hash-offset="85"
                        href="#menu"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="85"
                        data-start="2200"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5"
                        data-mask_in="x:0px;y:0px;">Our Menu</a>

                </li>
                <li data-transition="fade">
                    <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/slides/slide-restaurant-2.jpg"
                        alt=""
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption top-label alternative-font"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="-55"
                        data-start="500"
                        style="z-index: 5"
                        data-transform_in="y:[-300%];opacity:0;s:500;">Best ingredients, freshly prepared!</div>

                    <div class="tp-caption"
                        data-x="left" data-hoffset="355"
                        data-y="center" data-voffset="-55"
                        data-start="1000"
                        style="z-index: 5"
                        data-transform_in="x:[300%];opacity:0;s:500;"><img src="https://portotheme.com/html/porto/8.0.0/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption main-label"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="-5"
                        data-start="1500"
                        data-whitespace="nowrap"						 
                        data-transform_in="y:[100%];s:500;"
                        data-transform_out="opacity:0;s:500;"
                        style="z-index: 5"
                        data-mask_in="x:0px;y:0px;">DELICIOUS!!!</div>

                    <div class="tp-caption bottom-label"
                        data-x="left" data-hoffset="25"
                        data-y="center" data-voffset="40"
                        data-start="2000"
                        style="z-index: 5; font-size: 1.2em;"
                        data-transform_in="y:[100%];opacity:0;s:500;">The best place to eat in downtown Porto!</div>

                </li>
            </ul>
        </div>
    </div>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mt-4 mb-2">Enjoy <strong>Your Meal</strong></h2>
                    <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                    <hr class="custom-divider">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 pb-5">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                        <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                            <div class="thumb-info-side-image-wrapper p-0">
                                <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-1.png" class="img-fluid" alt="">
                                <img class="thumb-info-custom-icon" src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/icons/restaurant-icon-1.png" alt="" />
                            </div>
                            <div class="thumb-info-caption">
                                <div class="thumb-info-caption-text px-4">
                                    <h2 class="mb-3 mt-1">Sweets</h2>
                                    <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <a class="btn btn-primary mt-3" href="demo-restaurant-menu.html">View More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 pb-5">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                            <div class="thumb-info-side-image-wrapper p-0">
                                <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-2.png" class="img-fluid" alt="">
                                <img class="thumb-info-custom-icon" src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/icons/restaurant-icon-2.png" alt="" />
                            </div>
                            <div class="thumb-info-caption">
                                <div class="thumb-info-caption-text px-4">
                                    <h2 class="mb-3 mt-1">Coffee &amp; Beer</h2>
                                    <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <a class="btn btn-primary mt-3" href="demo-restaurant-menu.html">View More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 pb-5">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                            <div class="thumb-info-side-image-wrapper p-0">
                                <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-3.png" class="img-fluid" alt="">
                                <img class="thumb-info-custom-icon" src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/icons/restaurant-icon-3.png" alt="" />
                            </div>
                            <div class="thumb-info-caption">
                                <div class="thumb-info-caption-text px-4">
                                    <h2 class="mb-3 mt-1">Cake &amp; Cookies</h2>
                                    <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <a class="btn btn-primary mt-3" href="demo-restaurant-menu.html">View More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section section-background section-center" style="background-image: url(https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/parallax-restaurant.jpg); background-position: 50% 100%; min-height: 615px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <hr class="custom-divider">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <blockquote>
                                        <p>The best place in town! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>John Smith</strong><span>Porto Magazine</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <blockquote>
                                        <p>Best place to eat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>John Smith</strong><span>Porto Magazine</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </section>
    <section class="pt-3 pb-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h4 class="mt-4 mb-2">Our <strong>Gallery</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                    <hr class="custom-divider">

                    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="masonry-loader masonry-loader-showing">
                            <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
                                <div class="masonry-item">
                                    <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-1.jpg" class="img-fluid" alt="">
                                            <span class="thumb-info-action thumb-info-action-custom">
                                                <a href="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-1.jpg">
                                                    <span class="thumb-info-icon-custom"></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="masonry-item w2">
                                    <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-2.jpg" class="img-fluid" alt="">
                                            <span class="thumb-info-action thumb-info-action-custom">
                                                <a href="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-2.jpg">
                                                    <span class="thumb-info-icon-custom"></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="masonry-item">
                                    <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-4.jpg" class="img-fluid" alt="">
                                            <span class="thumb-info-action thumb-info-action-custom">
                                                <a href="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-4.jpg">
                                                    <span class="thumb-info-icon-custom"></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="masonry-item">
                                    <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-3.jpg" class="img-fluid" alt="">
                                            <span class="thumb-info-action thumb-info-action-custom">
                                                <a href="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-3.jpg">
                                                    <span class="thumb-info-icon-custom"></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="masonry-item">
                                    <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-5.jpg" class="img-fluid" alt="">
                                            <span class="thumb-info-action thumb-info-action-custom">
                                                <a href="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/gallery/restaurant-gallery-5.jpg">
                                                    <span class="thumb-info-icon-custom"></span>
                                                </a>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row mt-5">

            <div class="col-lg-6 p-0">
                <section class="section section-quaternary section-no-border h-100 mt-0">
                    <div class="row justify-content-end">
                        <div class="col-half-section col-half-section-right">
                            <div class="text-center">
                                <h4 class="mt-3 mb-0 heading-dark">Our <strong>Blog</strong></h4>
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                                <hr class="custom-divider m-0">
                            </div>
                            
                            <div class="owl-carousel owl-theme show-nav-title mt-5 mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 5000}">
                                <div>
                                    <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom mb-3">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-4.jpg" class="img-fluid" alt="" style="width: 165px;">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-0 mt-1 heading-dark">Lorem ipsum dolor sit</h4>
                                                <p class="text-3 pt-3 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor...</p>
                                                <a class="mt-2" href="demo-restaurant-press-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-5.jpg" class="img-fluid" alt="" style="width: 165px;">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-0 mt-1 heading-dark">Lorem ipsum dolor sit</h4>
                                                <p class="text-3 pt-3 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor...</p>
                                                <a class="mt-2" href="demo-restaurant-press-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom mb-3">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-5.jpg" class="img-fluid" alt="" style="width: 165px;">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-0 mt-1 heading-dark">Lorem ipsum dolor sit</h4>
                                                <p class="text-3 pt-3 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor...</p>
                                                <a class="mt-2" href="demo-restaurant-press-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-4.jpg" class="img-fluid" alt="" style="width: 165px;">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-0 mt-1 heading-dark">Lorem ipsum dolor sit</h4>
                                                <p class="text-3 pt-3 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor...</p>
                                                <a class="mt-2" href="demo-restaurant-press-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom mb-3">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-6.jpg" class="img-fluid" alt="" style="width: 165px;">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-0 mt-1 heading-dark">Lorem ipsum dolor sit</h4>
                                                <p class="text-3 pt-3 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor...</p>
                                                <a class="mt-2" href="demo-restaurant-press-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/blog/blog-restaurant-5.jpg" class="img-fluid" alt="" style="width: 165px;">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text">
                                                <h4 class="mb-0 mt-1 heading-dark">Lorem ipsum dolor sit</h4>
                                                <p class="text-3 pt-3 pb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Lorem ipsum dolor...</p>
                                                <a class="mt-2" href="demo-restaurant-press-detail.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-6 p-0">
                <section class="section section-tertiary section-no-border h-100 mt-0">
                    <div class="row">
                        <div class="col-half-section">
                            <div class="text-center">
                                <h4 class="mt-3 mb-0 heading-dark">Our <strong>Team</strong></h4>
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                                <hr class="custom-divider m-0">
                            </div>

                            <div class="owl-carousel owl-theme show-nav-title mt-5 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                                <div>
                                    <div class="thumb-info thumb-info-no-zoom thumb-info-no-borders mb-0">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/team/team-26.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text thumb-info-caption-text-custom text-center">
                                                <h4 class="mb-0 mt-1 heading-dark">Jessica Doe</h4>
                                                <p class="text-3 p-0 m-0 mb-2">Chef</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="thumb-info thumb-info-no-zoom thumb-info-no-borders mb-0">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/team/team-27.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text thumb-info-caption-text-custom text-center">
                                                <h4 class="mb-0 mt-1 heading-dark">John Doe</h4>
                                                <p class="text-3 p-0 m-0 mb-2">Chef</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="thumb-info thumb-info-no-zoom thumb-info-no-borders mb-0">
                                        <div class="thumb-info-side-image-wrapper p-0">
                                            <img src="https://portotheme.com/html/porto/8.0.0/img/team/team-28.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-info-caption">
                                            <div class="thumb-info-caption-text thumb-info-caption-text-custom text-center">
                                                <h4 class="mb-0 mt-1 heading-dark">Angelina Doe</h4>
                                                <p class="text-3 p-0 m-0 mb-2">Chef</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <section id="menu" style="background-image: url(https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/background-restaurant.png); background-position: 50% 100%; background-repeat: no-repeat;">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <h4 class="mt-4 mb-2">Special <strong>Menu</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                    <hr class="custom-divider">

                    <ul class="special-menu pb-4">
                        <li>
                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/products/product-1.jpg" class="img-fluid" alt="">
                            <h3>Monday <em>Special</em></h3>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna.</span></p>
                            <strong class="special-menu-price text-color-dark">$29</strong>
                        </li>
                        <li>
                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/products/product-2.jpg" class="img-fluid" alt="">
                            <h3>Tuesday <em>Special</em></h3>
                            <p><span>Lorem ipsum dolor sit amet. Donec eu pulvinar magna.</span></p>
                            <strong class="special-menu-price text-color-dark">$39</strong>
                        </li>
                        <li>
                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/products/product-3.jpg" class="img-fluid" alt="">
                            <h3>Wednesday <em>Special</em></h3>
                            <p><span>Lorem ipsum dolor sit amet.</span></p>
                            <strong class="special-menu-price text-color-dark">$24</strong>
                        </li>
                        <li>
                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/products/product-4.jpg" class="img-fluid" alt="">
                            <h3>Thursday <em>Special</em></h3>
                            <p><span>Lorem ipsum dolor sit amet magna.</span></p>
                            <strong class="special-menu-price text-color-dark">$39</strong>
                        </li>
                        <li>
                            <img src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/products/product-5.jpg" class="img-fluid" alt="">
                            <h3>Friday <em>Special</em></h3>
                            <p><span>Lorem ipsum dolor sit amet adipiscing elit. Donec eu pulvinar magna.</span></p>
                            <strong class="special-menu-price text-color-dark">$59</strong>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="row mb-0 mt-5">
                <div class="col-lg-12 text-center">
                    <a href="demo-restaurant-menu.html" class="btn btn-primary btn-lg mb-5">Full Menu</a>
                </div>
            </div>
        </div>
    </section>
</div>




<?php
get_footer();
