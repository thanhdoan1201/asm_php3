<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/index-20.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 05:07:21 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="/public_fontend/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="/public_fontend/revolution/css/settings.css">
    <link rel="stylesheet" href="/public_fontend/revolution/css/layers.css">
    <link rel="stylesheet" href="/public_fontend/revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/public_fontend/css/slider-home18.css">
    <link rel="stylesheet" id="color" href="/public_fontend/css/colors/light-black.css">

    <link rel="stylesheet" href="/public_fontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/public_fontend/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="/public_fontend/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/public_fontend/css/search.css">
    <link rel="stylesheet" href="/public_fontend/css/animate.css">
    <link rel="stylesheet" href="/public_fontend/css/aos.css">
    <link rel="stylesheet" href="/public_fontend/css/aos2.css">
    <link rel="stylesheet" href="/public_fontend/css/swiper.min.css">
    <link rel="stylesheet" href="/public_fontend/css/magnific-popup.css">
    <link rel="stylesheet" href="/public_fontend/css/lightcase.css">
    <link rel="stylesheet" href="/public_fontend/css/owl-carousel.css">
    <link rel="stylesheet" href="/public_fontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/public_fontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public_fontend/css/menu.css">
    <link rel="stylesheet" href="/public_fontend/css/slick.css">
    <link rel="stylesheet" href="/public_fontend/css/styles.css">
    <link rel="stylesheet" id="color" href="/public_fontend/css/default.css">
</head>

<body class="int_dark_bg h20">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header" class="int_content_wraapper hd">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="/public_admin/img/logo.png" data-sticky-logo="/public_admin/img/logo.png" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 black">
                            <ul id="responsive">
                                <li><a href="#">Trang chủ</a>
                                <li><a href="#">Bất động sản</a>
                                    <ul>
                                        <li><a href="#">Loại 1</a></li>
                                        <li><a href="#">Loại 2</a></li>
                                        <li><a href="#">Loại 3</a></li>
                                        <li><a href="#">Loại 4</a></li>
                                    </ul>
                                <li><a href="#">Tin tức</a>
                                    <ul>
                                        <li><a href="#">Loại 1</a></li>
                                        <li><a href="#">Loại 2</a></li>
                                        <li><a href="#">Loại 3</a></li>
                                        <li><a href="#">Loại 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Đăng Nhập</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Đăng Ký</a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="add-property.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span><img src="/public_admin/img/no-avartar.png" alt=""></span>Xin chào, 
                        </div>
                        <ul>
                            <li><a href="user-profile.html">Thông tin tài khoản</a></li>
                            <li><a href="change-password.html">Đổi mật khẩu</a></li>
                            <li><a href="#">Đăng xuất</a></li>
                        </ul>
                    </div>
                    <!-- Right Side Content / End -->

                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"><a href="#">Đăng nhập</a></div>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- lang-wrap-->
                    <!-- lang-wrap end-->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <!--End top header -->

        <div id="app" class="content-wrapper" style="background-color: #ecf0f5;">
            @yield('content')
            <div class="clearfix"></div>

        </div>


        <!-- Footer area-->
        <footer class="first-footer">
            <div class="top-footer bg-black-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/logo-yellow.svg" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@findhouses.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                        <li><a href="properties-full-list.html">Properties List</a></li>
                                        <li><a href="properties-details.html">Property Details</a></li>
                                        <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="agent-details.html">Agents Details</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="/public_fontend/js/jquery-3.5.1.min.js"></script>
        <script src="/public_fontend/js/jquery-ui.js"></script>
        <script src="/public_fontend/js/tether.min.js"></script>
        <script src="/public_fontend/js/moment.js"></script>
        <script src="/public_fontend/js/bootstrap.min.js"></script>
        <script src="/public_fontend/js/mmenu.min.js"></script>
        <script src="/public_fontend/js/mmenu.js"></script>
        <script src="/public_fontend/js/aos.js"></script>
        <script src="/public_fontend/js/aos2.js"></script>
        <script src="/public_fontend/js/swiper.min.js"></script>
        <script src="/public_fontend/js/swiper.js"></script>
        <script src="/public_fontend/js/slick.min.js"></script>
        <script src="/public_fontend/js/slick2.js"></script>
        <script src="/public_fontend/js/fitvids.js"></script>
        <script src="/public_fontend/js/jquery.waypoints.min.js"></script>
        <script src="/public_fontend/js/jquery.counterup.min.js"></script>
        <script src="/public_fontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="/public_fontend/js/isotope.pkgd.min.js"></script>
        <script src="/public_fontend/js/smooth-scroll.min.js"></script>
        <script src="/public_fontend/js/lightcase.js"></script>
        <script src="/public_fontend/js/search.js"></script>
        <script src="/public_fontend/js/owl.carousel.js"></script>
        <script src="/public_fontend/js/jquery.magnific-popup.min.js"></script>
        <script src="/public_fontend/js/ajaxchimp.min.js"></script>
        <script src="/public_fontend/js/newsletter.js"></script>
        <script src="/public_fontend/js/jquery.form.js"></script>
        <script src="/public_fontend/js/jquery.validate.min.js"></script>
        <script src="/public_fontend/js/searched.js"></script>
        <script src="/public_fontend/js/forms-2.js"></script>
        <script src="/public_fontend/js/color-switcher.js"></script>

        <!-- Slider Revolution scripts -->
        <script src="/public_fontend/jrevolution/s/jquery.themepunch.tools.min.js"></script>
        <script src="/public_fontend/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- MAIN JS -->
        <script src="/public_fontend/js/script.js"></script>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/aos2.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/color-switcher.js"></script>

        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="/public_fontend/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="/public_fontend/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="/public_fontend/revolution/js/extensions/revolution.extension.video.min.js"></script>

        <script>
            var tpj = jQuery;
            var revapi26;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_26_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_26_1");
                } else {
                    revapi26 = tpj("#rev_slider_26_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "/public_fontend/revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 50,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },

                            arrows: {
                                style: "metis",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "right",
                                    v_align: "bottom",
                                    h_offset: 80,
                                    v_offset: 10
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "bottom",
                                    h_offset: 10,
                                    v_offset: 10
                                }
                            },
                            bullets: {
                                enable: false,
                                hide_onmobile: false,
                                style: "bullet-bar",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 30,
                                v_offset: 30,
                                space: 5,
                                tmp: ''
                            }
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1270, 1024, 778, 480],
                        gridheight: [729, 600, 600, 480],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: ".site-header",
                        fullScreenOffset: "0px",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            }); /*ready*/
        </script>

        <script>
            $('.home5-right-slider').owlCarousel({
                loop: true,
                margin: 30,
                dots: false,
                nav: true,
                rtl: false,
                autoplayHoverPause: false,
                autoplay: false,
                singleItem: true,
                smartSpeed: 1200,
                navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    480: {
                        items: 1,
                        center: false
                    },
                    520: {
                        items: 2,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 5
                    },
                    1366: {
                        items: 5
                    },
                    1400: {
                        items: 5
                    }
                }
            });
        </script>
        <script src="/public_fontend/js/script.js"></script>
    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/index-20.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 05:07:24 GMT -->

</html>