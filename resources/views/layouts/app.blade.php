<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Global surgical care</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Alegreya+Sans'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSS -->
    <link rel='stylesheet' href="{{ asset('css/global.css') }}">
    <link rel='stylesheet' href="{{ asset('css/structure.css') }}">
    <link rel='stylesheet' href="{{ asset('css/pharmacy.css') }}">
    <link rel='stylesheet' href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
</head>
<body class="color-custom style-default layout-full-width nice-scroll-on mobile-tb-left button-flat if-overlay if-border-hide no-content-padding header-classic minimalist-header sticky-header sticky-white ab-show subheader-both-center menuo-right menuo-no-borders footer-copy-center">
    <div id="app">
        <div id="Wrapper">
            <div id="Header_wrapper">
                <header id="Header">
                    <div id="Action_bar">
                        <div class="container">
                            <div class="column one">
                                <ul class="contact_details">
                                    <li class="slogan">
                                        Have any questions?
                                    </li>
                                    <li class="mail">
                                        <i class="icon-mail-line"></i><a href="mailto:info@globalsurgicalcare.com">info@globalsurgicalcare.com</a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="header_placeholder"></div>
                    <div id="Top_bar">
                        <div class="container">
                            <div class="column one">
                                <div class="top_bar_left clearfix">
                                    <div class="logo">
                                        <a id="logo" href="content/pharmacy/index.html" title="Global Surgical Care"><img class="logo-main scale-with-grid" src={{ asset('Logo/logo1.png') }} alt="pharmacy" /><img class="logo-sticky scale-with-grid" src={{ asset('Logo/logo1.png') }} alt="pharmacy" /><img class="logo-mobile scale-with-grid" src={{ asset('Logo/logo1.png') }} alt="pharmacy" />
                                        </a>
                                    </div>
                                    <div class="menu_wrapper">
                                        <nav id="menu" class="menu-main-menu-container">
                                            <ul id="menu-main-menu" class="menu">
                                                <li class="current_page_item">
                                                    <a href={{ URL('/') }}><span>Home</span></a>
                                                </li>
                                                <li>
                                                    <a href={{ URL('/product') }}><span>Products</span></a> 
                                                </li>
                                                <li>
                                                    <a href={{ URL('/articles') }}><span>Articles</span></a>
                                                </li>
                                                <li>
                                                    <a href={{ URL('/certificates') }}><span>Certificates</span></a>
                                                </li>
                                                <li>
                                                    <a href={{ URL('/bankdetails') }}><span>Bank Details</span></a>
                                                </li>
                                                <li>
                                                    <a href={{ URL('/aboutus') }}><span>About Us</span></a>
                                                </li>
                                                <li>
                                                    <a href={{ URL('/contact') }}><span>Contact</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <footer id="Footer" class="clearfix">
                <div class="widgets_wrapper" style="padding:40px 0 10px;">
                    <div class="container">
                        <div class="column one-third">
                            <aside class="widget widget_text">
                                <div class="textwidget">
                                    <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src={{ asset('Logo/logo3.jpg') }} alt="home_pharmacy_footer_logo" width="151" height="151" /> </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="column one-third">
                            <aside class="widget widget_text">
                                <h4>Quick Access</h4>
                                <div class="textwidget">
                                    <ul style="line-height: 32px;">
                                        <li>
                                            <i class="icon-layout" style="color: #4179a0;"></i><a href="content/pharmacy/shop.html">Products</a>
                                        </li>
                                        <li>
                                            <i class="icon-layout" style="color: #4179a0;"></i><a href="content/pharmacy/articles.html">Articles</a>
                                        </li>
                                        <li>
                                            <i class="icon-layout" style="color: #4179a0;"></i><a href="content/pharmacy/certificates.html">Certificates </a>
                                        </li>
                                        <li>
                                            <i class="icon-layout" style="color: #4179a0;"></i><a href="content/pharmacy/bankDetails.html">Bank Details</a>
                                        </li>
                                        <li>
                                            <i class="icon-layout" style="color: #4179a0;"></i><a href="content/pharmacy/aboutus.html">About Us</a>
                                        </li>
                                        <li>
                                            <i class="icon-layout" style="color: #4179a0;"></i><a href="content/pharmacy/contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="column one-third">
                            <aside id="text-6" class="widget widget_text">
                                <h4>Contact centre</h4>
                                <div class="textwidget">
                                    <p>
                                        Global Surgical Care.
                                    </p>
                                    <p>
                                        Contact us: +81 90-4284-3888
                                        <br> Write us: <a href="mailto:info@globalsurgicalcare.com">info@globalsurgicalcare.com</a>
                                        <Address>Address: Room 8378, building 62, east side of liulaogongzhuang (Beijing Int Plastic Machinery Factory), Liyuan Town, Tongzhou District, Beijing.</Address>
                                    </p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <div class="copyright">
                                &copy; <a target="_blank" rel="nofollow" href="https://logicnest.com.pk/"> LogicNest Private Limited</a>
                            </div>
                            <ul class="social"></ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JS -->
    <script src= {{ URL("js/jquery-2.1.4.min.js") }}></script>

    <script src={{ URL("js/mfn.menu.js") }}></script>
    <script src={{ URL("js/jquery.plugins.js") }}></script>
    <script src={{ URL("js/jquery.jplayer.min.js") }}></script>
    <script src={{ URL("js/animations/animations.js") }}></script>
    <script src={{ URL("js/scripts.js") }}></script>

    <script src={{ URL("plugins/rs-plugin/js/jquery.themepunch.tools.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/jquery.themepunch.revolution.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.video.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js") }}></script>
    <script src={{ URL("plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js") }}></script>

    <script>
        var tpj = jQuery;
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "hero",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1080,
                    gridheight: 610,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner0",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
        /*]]>*/
    </script>

    <script id="mfn-dnmc-retina-js">
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "content/pharmacy/images/retina-pharmacy.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "content/pharmacy/images/retina-pharmacy.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "content/pharmacy/images/retina-pharmacy.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>
</body>
</html>
