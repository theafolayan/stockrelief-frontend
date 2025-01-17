<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>StockRelief</title>
<meta name="author" content="tansh">
<meta name="description" content="HTML Teamplate">
<meta name="keywords" content="webapp, app, software">

<!-- FAVICON FILES -->
<link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
<link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
<link href="assets/images/icons/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/iconfonts.css">
<link rel="stylesheet" href="assets/css/plugins.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/color.css">
</head>
<body>
<div id="dtr-wrapper" class="clearfix">

    <!-- preloader starts -->
    <div class="dtr-preloader">
        <div class="dtr-preloader-inner">
            <div class="dtr-preloader-img"></div>
        </div>
    </div>
    <!-- preloader ends -->

    <!-- Small Devices Header
============================================= -->
    <div class="dtr-responsive-header fixed-top">
        <div class="container">

            <!-- small devices logo -->
            <a href="/"> <img src="{{asset('logo.png')}}"width="180" height="60" alt=""></a>
            <!-- small devices logo ends -->

            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div>
    <!-- Small Devices Header ends
============================================= -->

    <!-- Header
============================================= -->
    <header id="dtr-header-global" class="fixed-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">

                <!-- header left starts -->
                <div class="dtr-header-left">

                    <!-- logo -->
                    <a class="logo-default dtr-scroll-link" href="#home"><img src="{{asset('logo.png')}}" width="120" height="60" alt=""></a>

                    <!-- logo on scroll -->
                    <a class="logo-alt dtr-scroll-link" href="#home"> <img src="{{asset('logo.png')}}"  width="180" height="60" alt=""></a>
                    <!-- logo on scroll ends -->

                </div>
                <!-- header left ends -->

                <!-- menu starts-->
                <div class="main-navigation navbar navbar-expand-lg ml-auto">
                    <ul class="dtr-scrollspy navbar-nav dtr-nav light-nav-on-load dark-nav-on-scroll">
                        <li class="nav-item"> <a class="nav-link active" href="#home">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#features">How It Works</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#plans">Plans</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#faq">FAQ</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a> </li>
                    </ul>
                </div>
                <!-- menu ends-->

                <!-- header right starts -->
                <div class="dtr-header-right"> <a href="#plans" class="dtr-btn btn-white btn-accent-on-scroll dtr-scroll-link dtr-px-50">Try for Free + </a> </div>
                <!-- header right ends -->

            </div>
        </div>
    </header>
    <!-- header ends
================================================== -->

    <!-- == main content area starts == -->
    <div id="dtr-main-content">
        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section dtr-section-with-bg" style="background-image: url(https://cdn.pixabay.com/photo/2015/03/26/10/41/apple-691798_1280.jpg);">
            <div class="container hero-section-top-padding dtr-full-stretch">
                <!-- row starts -->
                <div class="row dtr-py-100">

                    <!-- column 1 starts -->
                    <div class="col-12 col-lg-6 dtr-py-100 hero-text-fixed-width">
                        <h1 class="color-white">An Inventory Software that doesn't suck</h1>
                        <p class="text-size-md dtr-mt-30 color-white">Let's face it, most inventory softwares out there suck and lack a lot of essential features you'd want in your business. If it wasn't lacking an invoicing system, it wasn't cloud-based and as a result, could not be used in multiple outlets. </p>
                        <p class="text-size-md color-white">That sucks right? We felt the same way too... for a long time in fact, until we decided to f*ck it all, got our hands dirty and built one that actually get's the whole work done, while staying ever reliant and portable!</p>
                        <a href="#plans" class="dtr-btn btn-white dtr-scroll-link dtr-px-70 dtr-mt-20">Look, Give it a try!</a>
                        <p class="color-white dtr-mt-5">(No credit card bullsh*t required)</p>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-lg-6 dtr-section-with-bg dtr-bg-position-center-left" style="background-image: url(assets/images/hero-img-mac.png);"> </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row ends -->
            </div>
        </section>
        <!-- hero section ends
================================================== -->

        <!-- logo slider section starts
================================================== -->
        <section class="dtr-section dtr-md-mx-20 dtr-border-y border-grey dtr-py-50">

            <!-- row starts -->
            <div class="row">
                <div class="col-12">
                    <div class="dtr-slick-slider dtr-logo-carousel">
                        <!-- logo 1 -->
                        <div> <img src="assets/images/client-1.png" alt="image"> </div>
                        <!-- logo 2 -->
                        <div> <img src="assets/images/client-2.png" alt="image"> </div>
                        <!-- logo 3 -->
                        <div> <img src="assets/images/client-3.png" alt="image"> </div>
                        <!-- logo 4 -->
                        <div> <img src="assets/images/client-4.png" alt="image"> </div>
                        <!-- logo 5 -->
                        <div> <img src="assets/images/client-5.png" alt="image"> </div>
                        <!-- logo 6 -->
                        <div> <img src="assets/images/client-6.png" alt="image"> </div>
                        <!-- logo 7 -->
                        <div> <img src="assets/images/client-4.png" alt="image"> </div>
                    </div>
                </div>
            </div>
            <!-- row ends -->

        </section>
        <!-- logo slider section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section id="features" class="dtr-section dtr-py-80">
            <div class="container">

                <!-- row 1 starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-5 dtr-mt-20">
                        <h2 class="color-green">Setup your own inventory app <br>
                            with just a few clicks</h2>
                        <p>Purchase a plan, we help customize to your needs and voila! You're set to start running your business a lot smoother!</p>
                        <a href="#" class="dtr-btn btn-green dtr-mt-20">Discover</a> </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 offset-md-1 dtr-sm-mt-30 wow fadeInRight"> <img src="assets/images/screen-1.png" alt="image"> </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row 1 ends -->

                <!-- row 2 starts -->
                <div class="row dtr-my-80">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 wow fadeInLeft"> <img src="assets/images/screen-2.png" alt="image"> </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-5 offset-md-1 dtr-mt-20">
                        <h2 class="color-green">Own your data<br>
                            all of it!</h2>
                        <p>If you haven't gotten the memo yet, Stockrelief is in its true form, a script we help setup in a server of your choosing. You own the server and everything associated once you purchase a plan with us.</p>
                        <p>No of course we wouldn't want put you through the stress of setting up a server. You only have to purchase a plan that suits your business and our experts handle everything regarding setup and maintenance from there.</p>
                        <a href="#" class="dtr-btn btn-green dtr-mt-20">Discover</a> </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row 2 ends -->

                <!-- row 3 starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-5 dtr-mt-20">
                        <h2 class="color-green">Say Goodbye <br>
                            to heavy accounting costs</h2>
                        <p>Every smart business needs to measure profit and balance books. Stockrelief does all of that and more for you. Whether you need to see last week's total sales or the item that sold the most 7 months ago, StockRelief has you covered with it's excellent reporting and tracking system.</p>
                        <a href="#" class="dtr-btn btn-green dtr-mt-20">Discover</a> </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 offset-md-1 dtr-sm-mt-30 wow fadeInRight"> <img src="assets/images/screen-3.png" alt="image"> </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row 3 ends -->

            </div>
        </section>
        <!-- section ends
================================================== -->

        <!-- boxed feature section starts
================================================== -->
        <section class="dtr-section dtr-pt-100 dtr-pb-70 dtr-section-with-bg bg-light-blue parallax" style="background-image: url(assets/images/section-bg1.png);">
            <div class="container">

                <!-- row starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4">
                        <!-- feature starts -->
                        <div class="dtr-feature dtr-feature-top feature-has-box feature-has-shadow dtr-rounded-corner-xl text-center bg-white">
                            <div class="dtr-feature-img"> <img src="assets/images/shape-icon1.png" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h3>We Source</h3>
                                <p class="text-size-lg">Quality materials </p>
                                <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                <a href="#" class="dtr-styled-link font-weight-600 color-green">Learn More</a> </div>
                        </div>
                        <!-- feature ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4">

                        <!-- feature starts -->
                        <div class="dtr-feature dtr-feature-top feature-has-box feature-has-shadow dtr-rounded-corner-xl text-center bg-white">
                            <div class="dtr-feature-img"> <img src="assets/images/shape-icon2.png" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h3>We Brand</h3>
                                <p class="text-size-lg">Excellent Whitelabeling</p>
                                <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                <a href="#" class="dtr-styled-link font-weight-600 color-green">Learn More</a> </div>
                        </div>
                        <!-- feature ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4">

                        <!-- feature starts -->
                        <div class="dtr-feature dtr-feature-top feature-has-box feature-has-shadow dtr-rounded-corner-xl text-center bg-white">
                            <div class="dtr-feature-img"> <img src="assets/images/shape-icon3.png" alt="image"> </div>
                            <div class="dtr-feature-content">
                                <h3>We Deliver</h3>
                                <p class="text-size-lg">Fast shipping</p>
                                <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                <a href="#" class="dtr-styled-link font-weight-600 color-green">Learn More</a> </div>
                        </div>
                        <!-- feature ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!-- row ends -->

            </div>
        </section>
        <!-- boxed feature section ends
================================================== -->

        <!-- video section starts
================================================== -->
        <section class="dtr-section dtr-py-100">
            <div class="container">

                <!-- section intro row starts -->
                <div class="row dtr-mb-50">
                    <div class="col-12 text-center">
                        <h2>Why is StockRelief different?</h2>
                        <div class="dtr-styled-divider divider-center bg-light-green"></div>
                    </div>
                </div>
                <!-- section intro row ends -->

                <!-- row starts -->
                <div class="row d-flex align-items-center">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-5">
                        <div class="dtr-pr-40 dtr-sm-pr-0">

                            <!-- feature 1 starts -->
                            <div class="dtr-line-feature dtr-mb-10">
                                <div class="dtr-line-feature-img-wrapper">
                                    <div class="dtr-line-feature-img bg-green border-light-green color-white"><i class="icon-user-edit"></i></div>
                                </div>
                                <div class="dtr-vert-border border-light-green"></div>
                                <h4 class="dtr-line-feature-heading font-weight-600">Developer-first coding </h4>
                                <p>There are many variations of passages of lorem available.</p>
                            </div>
                            <!-- feature 1 ends -->

                            <!-- feature 2 starts -->
                            <div class="dtr-line-feature dtr-mb-10">
                                <div class="dtr-line-feature-img-wrapper">
                                    <div class="dtr-line-feature-img bg-green border-light-green color-white"><i class="icon-mail-bulk"></i></div>
                                </div>
                                <div class="dtr-vert-border border-light-green"></div>
                                <h4 class="dtr-line-feature-heading font-weight-600">Own your data, and your interface too :)</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit.</p>
                            </div>
                            <!-- feature 2 ends -->

                            <!-- feature 3 starts -->
                            <div class="dtr-line-feature">
                                <div class="dtr-line-feature-img-wrapper">
                                    <div class="dtr-line-feature-img bg-green border-light-green color-white"><i class="icon-shipping-fast"></i></div>
                                </div>
                                <div class="dtr-vert-border border-light-green"></div>
                                <h4 class="dtr-line-feature-heading font-weight-600">Automate Everything!</h4>
                                <p>Remove the need for manual work with tons of automated workflows that will relieve you time, and save your business money!</p>
                            </div>
                            <!-- feature 3 ends -->

                        </div>
                    </div>
                    <!-- column 1 starts -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-7 dtr-md-mt-30">

                        <!-- video box starts -->
                        <div class="dtr-video-box">

                            <!-- image -->
                            <img src="assets/images/video-bg.jpg" alt="image">

                            <!-- video button starts -->
                            <a class="dtr-video-popup dtr-video-button bg-green color-white" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"></a>
                            <!-- video button ends -->

                        </div>
                        <!-- video box ends -->

                    </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row ends -->

            </div>
        </section>
        <!-- video section ends
================================================== -->

        <!-- pricing section ends
================================================== -->
        <section id="plans" class="dtr-section dtr-py-100 bg-light-blue parallax" style="background-image: url(assets/images/section-bg2.png);">
            <div class="container">

                <!-- section intro row starts -->
                <div class="row dtr-mb-80">
                    <div class="col-12 text-center">
                        <h2>Plans and pricing</h2>
                        <p>Our pricing scales with you and your needs. Try out a test installation for free. No credit card required.</p>
                        <div class="dtr-styled-divider divider-center bg-light-green"></div>
                    </div>
                </div>
                <!-- section intro row ends -->

                <!-- row starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 dtr-pr-0 dtr-md-pr-15">

                        <!-- pricing 1 starts -->
                        <div class="dtr-pricing bg-light-green">
                            <div class="dtr-pricing-img"><img src="assets/images/ptable-icon1.png" alt="image"></div>
                            <h3>SME Plan</h3>
                            <p class="dtr-price color-green"><sup>$</sup>120</p>
                            <p class="dtr-m-0">per Year</p>
                            <a href="#" class="dtr-btn btn-green dtr-my-30"> Take a test run</a>
                            <p class="text-size-md font-weight-600 color-green">Free Forever</p>
                            <ul class="dtr-list-block">
                                <li>Unlimited Products</li>
                                <li>Unlimited Records</li>
                                <li>Up to 20gb of storage space</li>
                                <li>Monthly Backups</li>
                                <li>Up to 6 months of backup history</li>
                                <li>Custom user interface</li>
                            </ul>
                        </div>
                        <!-- pricing 1 ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-px-0 dtr-md-px-15">

                        <!-- pricing 2 starts -->
                        <div class="dtr-pricing pricing-focused bg-dark-blue">
                            <div class="dtr-pricing-tagline-wrapper">
                                <div class="dtr-pricing-tagline color-green">Most Popular</div>
                            </div>
                            <div class="dtr-pricing-img"><img src="assets/images/ptable-icon2.png" alt="image"></div>
                            <h3 class="color-white">Corporate Plan</h3>
                            <p class="dtr-price color-green"><sup>$</sup> 255</p>
                            <p class="dtr-m-0 color-white">per year</p>
                            <a href="#" class="dtr-btn btn-white dtr-my-30">Signup for free</a>
                            <p class="text-size-md font-weight-600 color-green">Free Forever</p>
                            <ul class="dtr-list-block color-white">
                                <li>Unlimited Products</li>
                                <li>Unlimited Records</li>
                                <li>Up to 50gb of storage space</li>
                                <li>Bi-weekly Backups</li>
                                <li>Up to a year of backup history</li>
                                <li>Custom user interface</li>
                            </ul>
                        </div>
                        <!-- pricing 2 ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-pl-0 dtr-md-pl-15">

                        <!-- pricing 3 starts -->
                        <div class="dtr-pricing bg-light-green">
                            <div class="dtr-pricing-img"><img src="assets/images/ptable-icon3.png" alt="image"></div>
                            <h3>Multi-National Plan</h3>
                            <p class="dtr-price color-green"><sup>$</sup>900</p>
                            <p class="dtr-m-0">per year</p>
                            <a href="#" class="dtr-btn btn-green dtr-my-30">Signup for free</a>
                            <p class="text-size-md font-weight-600 color-green">Free Forever</p>
                            <ul class="dtr-list-block">
                                <li>Unlimited Products</li>
                                <li>Unlimited Records</li>
                                <li>Up to 160gb of storage space</li>
                                <li>Weekly Backups</li>
                                <li>Up to 3 years of backup history</li>
                                <li>Custom user interface</li>
                            </ul>
                        </div>
                        <!-- pricing 3 ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!-- row ends -->

            </div>
        </section>
        <!-- pricing section ends
================================================== -->

        <!-- faq section starts
================================================== -->
        <section id="faq" class="dtr-section dtr-py-100">
            <div class="container">
                <h3 class="color-green dtr-mb-40">Frequently asked questions</h3>
                <!-- row 1 starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">

                        <!-- faq item starts -->
                        <div class="faq-item">
                            <h4 class="faq-heading">Can I integrate my enterprise software with StockRelief? </h4>
                            <div class="faq-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</div>
                        </div>
                        <!-- faq item ends -->

                        <!-- faq item starts -->
                        <div class="faq-item">
                            <h4 class="faq-heading">If I invite my suppliers or customers to StockRelief, do I have to pay for their accounts? </h4>
                            <div class="faq-content">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</div>
                        </div>
                        <!-- faq item ends -->

                        <!-- faq item starts -->
                        <div class="faq-item dtr-mb-0">
                            <h4 class="faq-heading">Will my accountant(s) hate me for buying a subscription? </h4>
                            <div class="faq-content">To be honest, that would depend on whether he/she is one who really enjoys the stress associated with punching a calculator 40 hours a week or one who would welcome the idea of having all their work automatically done for them. </div>
                        </div>
                        <!-- faq item ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">

                        <!-- faq item starts -->
                        <div class="faq-item">
                            <h4 class="faq-heading">Can I install StockRelief on my own hardware? </h4>
                            <div class="faq-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </div>
                        </div>
                        <!-- faq item ends -->

                        <!-- faq item starts -->
                        <div class="faq-item">
                            <h4 class="faq-heading">How can I obtain a copy of my data? </h4>
                            <div class="faq-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </div>
                        </div>
                        <!-- faq item ends -->

                        <!-- faq item starts -->
                        <div class="faq-item">
                            <h4 class="faq-heading">How safe is my data? </h4>
                            <div class="faq-content">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </div>
                        </div>
                        <!-- faq item ends -->

                    </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row 1 ends -->

                <!-- row 2 starts -->
                <div class="dtr-cta-box dtr-rounded-corner-xl dtr-shadow  dtr-mt-100 bg-white">
                    <div class="row d-flex">
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-5 align-self-end"> <img src="assets/images/cta-img.png" alt="image"> </div>
                        <!-- column 1 ends -->
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-7 text-center dtr-py-50 dtr-px-60">
                            <h3 class="color-green">Get started with StockRelief</h3>
                            <p class="text-size-md">Access our guide and discover everything your<br>
                                company needs to become compliant.</p>
                            <a href="#" class="dtr-btn btn-green dtr-mt-20">Book a demo</a> </div>
                        <!-- column 2 ends -->

                    </div>
                </div>
                <!-- row 2 ends -->

            </div>
        </section>
        <!-- faq section ends
================================================== -->

        <!-- team section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-light-blue parallax" style="background-image: url(assets/images/section-bg1.png);">
            <div class="container">

                <!-- section intro row starts -->
                <div class="row dtr-mb-50">
                    <div class="col-12 text-center">
                        <h2>Our Team</h2>
                        <div class="dtr-styled-divider divider-center bg-light-green"></div>
                    </div>
                </div>
                <!-- section intro row ends -->

                <!-- row starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4">

                        <!-- member 1 starts -->
                        <div class="dtr-team team-has-shadow text-center bg-white">
                            <div class="dtr-team-img"> <img src="assets/images/member-1.jpg" alt="image"> </div>
                            <div class="dtr-team-content">
                                <div class="dtr-social-circle dtr-team-social-overlap">
                                    <ul class="dtr-social dtr-social-list">
                                        <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                        <li><a href="#" class="dtr-google" target="_blank" title="facebook"></a></li>
                                    </ul>
                                </div>
                                <h4 class="dtr-mb-5">Oluwaseun Afolayan</h4>
                                <p class="dtr-mb-5">Project Lead</p>
                                <p>SaaS Applications</p>
                            </div>
                        </div>
                        <!-- member 1 ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4">

                        <!-- member 2 starts -->
                        <div class="dtr-team team-has-shadow text-center bg-white">
                            <div class="dtr-team-img"> <img src="assets/abbey.png" alt="image"> </div>
                            <div class="dtr-team-content">
                                <div class="dtr-social-circle dtr-team-social-overlap">
                                    <ul class="dtr-social dtr-social-list">
                                        <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                        <li><a href="#" class="dtr-google" target="_blank" title="facebook"></a></li>
                                    </ul>
                                </div>
                                <h4 class="dtr-mb-5">Isaac Somto</h4>
                                <p class="dtr-mb-5">Lead Designer </p>
                                <p>StockRelief Web Pro Apps</p>
                            </div>
                        </div>
                        <!-- member 2 ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4">

                        <!-- member 3 starts -->
                        <div class="dtr-team team-has-shadow text-center bg-white">
                            <div class="dtr-team-img"> <img src="assets/images/member-3.jpg" alt="image"> </div>
                            <div class="dtr-team-content">
                                <div class="dtr-social-circle dtr-team-social-overlap">
                                    <ul class="dtr-social dtr-social-list">
                                        <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                        <li><a href="#" class="dtr-google" target="_blank" title="facebook"></a></li>
                                    </ul>
                                </div>
                                <h4 class="dtr-mb-5">Adebola Makinde</h4>
                                <p class="dtr-mb-5">Customer success Officer</p>
                                <p>Adobe Suite Expert</p>
                            </div>
                        </div>
                        <!-- member 3 ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!-- row ends -->

            </div>
        </section>
        <!-- team section ends
================================================== -->

        <!-- tabs section starts
================================================== -->
        <section class="dtr-section dtr-py-100">
            <div class="container">

                <!-- section intro row starts -->
                <div class="row dtr-mb-30">
                    <div class="col-12 text-center">
                        <h2>How it works?</h2>
                        <p>Just 3 simple steps to start using StockRelief.</p>
                        <div class="dtr-styled-divider divider-center bg-light-green"></div>
                    </div>
                </div>
                <!-- section intro row ends -->

                <!-- tabs starts -->
                <div class="row d-flex align-items-center dtr-features-tab">

                    <!-- left column starts -->
                    <div class="col-12 col-md-6">
                        <div class="tab-content" id="v-pills-tabContent">

                            <!-- tab 1 -->
                            <div class="tab-pane fade" id="features-tab-1" role="tabpanel" aria-labelledby="features-tab-1-tab"> <img src="assets/images/screen-1.png" alt="image"> </div>
                            <!-- tab 2 -->
                            <div class="tab-pane fade show active" id="features-tab-2" role="tabpanel" aria-labelledby="features-tab-2-tab"><img src="assets/images/screen-2.png" alt="image"></div>
                            <!-- tab 3 -->
                            <div class="tab-pane fade" id="features-tab-3" role="tabpanel" aria-labelledby="features-tab-3-tab"><img src="assets/images/screen-3.png" alt="image"></div>
                        </div>
                    </div>
                    <!-- left column ends -->

                    <!-- right (nav) column starts -->
                    <div class="col-12 col-md-6">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                            <!-- tab 1 content starts -->
                            <a class="nav-link" id="features-tab-1-tab" data-toggle="pill" href="#features-tab-1" role="tab" aria-controls="features-tab-1" aria-selected="false">
                            <h4 class="font-weight-600">Tell us your needs</h4>
                            <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                            </a>
                            <!-- tab 1 content ends -->

                            <!-- tab 2 content starts -->
                            <a class="nav-link active" id="features-tab-2-tab" data-toggle="pill" href="#features-tab-2" role="tab" aria-controls="features-tab-2" aria-selected="true">
                            <h4 class="font-weight-600">We customize the software according to your needs</h4>
                            <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                            </a>
                            <!-- tab 2 content ends -->

                            <!-- tab 3 content starts -->
                            <a class="nav-link" id="features-tab-3-tab" data-toggle="pill" href="#features-tab-3" role="tab" aria-controls="features-tab-3" aria-selected="false">
                            <h4 class="font-weight-600">Start rolling with ease!</h4>
                            <p>Once the app has been customized to your needs, It's ready to start usage. Say Goodbye to the stress associated with manual inventory taking with our affordable plans</p>
                            </a>
                            <!-- tab 3 content ends -->

                        </div>
                    </div>
                    <!-- right (nav) column ends -->

                </div>
                <!-- tabs starts -->

            </div>
        </section>
        <!-- tabs section ends
================================================== -->

        <!-- testimonial section starts
================================================== -->
        <section id="reviews" class="dtr-section dtr-md-mx-20 dtr-py-100 bg-green">

            <!-- heading-->
            <h3 class="text-center dtr-mb-50 color-white">Trusted by over 10,000 companies</h3>

            <!--===== testimonial slider starts =====-->
            <div class="dtr-slick-slider dtr-testimonial-style1 dtr-testimonial-boxed">

                <!--== slide 1 starts ==-->
                <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                    <!-- review text -->
                    <div class="dtr-testimonial-content">“StockRelief app platform is incredibly
                        simple to use.” </div>
                    <!-- client info -->
                    <div class="dtr-client-info">
                        <div class="dtr-testimonial-user"> <img src="assets/images/review-user1.png" alt="image"> </div>
                        <div class="dtr-testimonial-user-info">
                            <h6 class="dtr-client-name">Christian Brown</h6>
                            <span class="dtr-client-job">Entrepreneur, LA</span> </div>
                    </div>
                    <!-- client info ends -->
                </div>
                <!--== slide 1 ends ==-->

                <!--== slide 2 starts ==-->
                <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                    <!-- review text -->
                    <div class="dtr-testimonial-content">“Giving a five star review was
                        the easiest thing I've done in a while.” </div>
                    <!-- client info -->
                    <div class="dtr-client-info">
                        <div class="dtr-testimonial-user"> <img src="assets/images/review-user2.png" alt="image"> </div>
                        <div class="dtr-testimonial-user-info">
                            <h6 class="dtr-client-name">Mike Anderson</h6>
                            <span class="dtr-client-job">Project Admin, NY</span> </div>
                    </div>
                    <!-- client info ends -->
                </div>
                <!--== slide 2 ends ==-->

                <!--== slide 3 starts ==-->
                <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                    <!-- review text -->
                    <div class="dtr-testimonial-content">“I am using StockRelief app for more than 25 years.” </div>
                    <!-- client info -->
                    <div class="dtr-client-info">
                        <div class="dtr-testimonial-user"> <img src="assets/images/review-user1.png" alt="image"> </div>
                        <div class="dtr-testimonial-user-info">
                            <h6 class="dtr-client-name">Steven Gray</h6>
                            <span class="dtr-client-job">Web Developer, Ohio</span> </div>
                    </div>
                    <!-- client info ends -->
                </div>
                <!--== slide 3 ends ==-->

                <!--== slide 4 starts ==-->
                <div class="dtr-testimonial dtr-rounded-corner-xl bg-white">

                    <!-- review text -->
                    <div class="dtr-testimonial-content">“I am using StockRelief app for more than 25 years.” </div>
                    <!-- client info -->
                    <div class="dtr-client-info">
                        <div class="dtr-testimonial-user"> <img src="assets/images/review-user2.png" alt="image"> </div>
                        <div class="dtr-testimonial-user-info">
                            <h6 class="dtr-client-name">Matt Weiner</h6>
                            <span class="dtr-client-job">UI Developer, Australia</span> </div>
                    </div>
                    <!-- client info ends -->
                </div>
                <!--== slide 4 ends ==-->

            </div>
            <!--===== testimonial slider ends =====-->

        </section>
        <!-- testimonial section ends
================================================== -->

        <!-- news section starts
================================================== -->
        <section id="blog" class="dtr-section dtr-py-100 bg-light-blue parallax" style="background-image: url(assets/images/section-bg2.png);">
            <div class="container">

                <!-- section intro row starts -->
                <div class="row dtr-mb-50">
                    <div class="col-12 text-center">
                        <h2>From the blog</h2>
                        <div class="dtr-styled-divider divider-center bg-light-green"></div>
                    </div>
                </div>
                <!-- section intro row ends -->

                <!-- row starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4">

                        <!-- blog item 1 starts -->
                        <div class="dtr-blog-item dtr-shadow">
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="assets/images/post-img1.jpg" alt="image"> </div>
                            <div class="dtr-post-content">
                                <p class="dtr-blog-category"><a href="#" class="color-green">Media Coverage</a></p>
                                <h4><a href="#">How to use saas to create a positive work</a></h4>
                                <p class="dtr-mb-20">There are many variations of passages of lorem ipsum dolor amet available...</p>
                                <a href="#" class="dtr-read-more">Continue Reading<i class="icon-ellipsis-h dtr-ml-10 color-green"></i></a> </div>
                        </div>
                        <!-- blog item 1 ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-md-mt-30">

                        <!-- blog item 2 starts -->
                        <div class="dtr-blog-item dtr-shadow">
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="assets/images/post-img2.jpg" alt="image"> </div>
                            <div class="dtr-post-content">
                                <p class="dtr-blog-category"><a href="#" class="color-green">Media Coverage</a></p>
                                <h4><a href="#">5 tips to boost product based sale online</a></h4>
                                <p class="dtr-mb-20">There are many variations of passages of lorem ipsum dolor amet available...</p>
                                <a href="#" class="dtr-read-more">Continue Reading<i class="icon-ellipsis-h dtr-ml-10 color-green"></i></a> </div>
                        </div>
                        <!-- blog item 2 ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-md-mt-30">

                        <!-- blog item 3 starts -->
                        <div class="dtr-blog-item dtr-shadow">
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="assets/images/post-img3.jpg" alt="image"> </div>
                            <div class="dtr-post-content">
                                <p class="dtr-blog-category"><a href="#" class="color-green">Media Coverage</a></p>
                                <h4><a href="#">How to become a fully AI based company</a></h4>
                                <p class="dtr-mb-20">There are many variations of passages of lorem ipsum dolor amet available...</p>
                                <a href="#" class="dtr-read-more">Continue Reading<i class="icon-ellipsis-h dtr-ml-10 color-green"></i></a> </div>
                        </div>
                        <!-- blog item 3 ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!-- row starts -->

            </div>
        </section>
        <!-- news section ends
================================================== -->

        <!-- contact section starts
================================================== -->
        <section id="contact" class="dtr-section dtr-py-100">
            <div class="container">

                <!-- section intro row starts -->
                <div class="row dtr-mb-50">
                    <div class="col-12 text-center">
                        <h2 class="dtr-mb-5">Get in touch</h2>
                        <p>Contact us</p>
                        <div class="dtr-styled-divider divider-center bg-light-green"></div>
                    </div>
                </div>
                <!-- section intro row ends -->

                <!-- row starts -->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-5 dtr-md-mb-30"> <img src="assets/images/contact-img.png" alt="image"> </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-7">

                        <!-- form starts -->
                        <div class="dtr-form dtr-form-has-icon">
                            <form id="contactform" method="post" action="php/contact-form-short.php">
                                <fieldset>
                                    <p class="dtr-input"> <i class="icon-envelope1 color-dark-blue"></i>
                                        <input name="email"  class="required email" type="text" placeholder="john.doe@example.com">
                                    </p>
                                    <p class="antispam">Leave this empty: <br />
                                        <input name="url" />
                                    </p>
                                    <p class="dtr-input"> <i class="icon-user-edit color-dark-blue"></i>
                                        <textarea rows="4" name="message" id="message" class="required"  placeholder="Write Message"></textarea>
                                    </p>
                                    <p class="dtr-m-0">
                                        <button class="dtr-btn btn-dark-blue" type="submit">Submit</button>
                                    </p>
                                    <div id="result"></div>
                                </fieldset>
                            </form>
                        </div>
                        <!-- form ends -->

                    </div>
                    <!-- column 2 ends -->

                </div>
                <!-- row ends -->

            </div>
        </section>
        <!-- contact section ends
================================================== -->

        <!-- footer section starts
================================================== -->
        <footer id="dtr-footer" class="dtr-section-with-bg" style="background-image: url(assets/images/footer-bg.png);">
            <div class="container">
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-sm-6 col-lg-4 dtr-mb-30"> <a href="index.html" class="d-block dtr-mb-15"><h3 style="color: whitesmoke;"> Stockrelief</h3></a>
                        <p>Lorem ipsum dolor sit amet consect adipiscing elit, sed do eiusmod tempor incididunt labore at dolore.</p>
                        <p>© 2021 StockRelief. All rights reserved.</p>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-sm-6 col-lg-2 dtr-mb-30">
                        <h4 class="color-white">Company</h4>
                        <ul class="dtr-list-simple">
                            <li><a href="#" class="dtr-styled-link">Features</a></li>
                            <li><a href="#" class="dtr-styled-link">Plan</a></li>
                            <li><a href="#" class="dtr-styled-link">Blog</a></li>
                            <li><a href="#" class="dtr-styled-link">Contact</a></li>
                        </ul>
                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-sm-6 col-lg-2 dtr-mb-30">
                        <h4 class="color-white">Support</h4>
                        <ul class="dtr-list-simple">
                            <li><a href="#" class="dtr-styled-link">Careers</a></li>
                            <li><a href="#" class="dtr-styled-link">Help</a></li>
                            <li><a href="#" class="dtr-styled-link">Privacy Policy</a></li>
                            <li><a href="#" class="dtr-styled-link">Terms</a></li>
                        </ul>
                    </div>
                    <!-- column 3 ends -->

                    <!-- column 4 starts -->
                    <div class="col-12 col-sm-6 col-lg-4 dtr-mb-30">
                        <h4 class="color-white">Newsletter</h4>
                        <div class="dtr-form dtr-form-has-icon dtr-form-no-gap">
                            <p class="color-white"> Get informed of the latest features we introduce to help your business run smoothly. PS: we inform our subscribers of discounts before anyone else!</p>
                            <form id="subscribeform" method="post" action="#">
                                <fieldset>
                                    <div class="dtr-form-row-2col">
                                        <p class="dtr-input dtr-form-column"> <i class="icon-envelope1 color-dark-blue"></i>
                                            <input name="email"  class="required email" type="text" placeholder="Email address">
                                        </p>
                                        <p class="dtr-form-column">
                                            <button class="dtr-btn btn-green" type="submit">Subscribe</button>
                                        </p>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="dtr-social-large">
                            <ul class="dtr-social dtr-social-list color-white-muted-alt accent-color-hover text-center">
                                <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- column 4 ends -->

                </div>
            </div>
        </footer>
        <!-- footer section ends
================================================== -->

    </div>
    <!-- == main content area ends == -->

</div>
<!-- #dtr-wrapper ends -->

<!-- JS FILES -->
<script src="//code.jivosite.com/widget/25Lksdr5My" async></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
