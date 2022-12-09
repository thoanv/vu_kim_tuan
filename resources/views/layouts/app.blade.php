@php
    $info = \App\Models\Information::find(1);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href="wp-includes/css/dashicons.minca80.css?ver=4.9.15" type='text/css'
          media='all'/>
    <link rel='stylesheet' id='menu-icons-extra-css'
          href="wp-content/plugins/ot-flatsome-vertical-menu/libs/menu-icons/css/extra.mincf86.css?ver=0.10.2"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='hrw-css' href="wp-content/plugins/call-now-icon-animate/css.css" type='text/css'
          media=''/>
    <link rel='stylesheet' id='contact-form-7-css'
          href="wp-content/plugins/contact-form-7/includes/css/styles1748.css?ver=5.0.5" type='text/css' media='all'/>
    <link rel='stylesheet' id='fb-messenger-style-css'
          href="wp-content/plugins/fb-messenger/css/styleca80.css?ver=4.9.15" type='text/css' media='all'/>
    <link rel='stylesheet' id='ot-vertical-menu-css'
          href="wp-content/plugins/ot-flatsome-vertical-menu/assets/css/ot-vertical-menuf488.css?ver=1.1.0"
          type='text/css' media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='tt-easy-google-fonts-css'
          href="https://fonts.googleapis.com/css?family=Yeseva+One%3Aregular&amp;subset=latin%2Call&amp;ver=4.9.15"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='flatsome-icons-css' href="wp-content/themes/flatsome/assets/css/fl-icons6de8.css?ver=3.3"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='easy-social-share-buttons-css'
          href="wp-content/plugins/easy-social-share-buttons3/assets/css/default-retina/easy-social-share-buttons1ac1.css?ver=3.7.3"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='essb-cct-style-css'
          href="wp-content/plugins/easy-social-share-buttons3/lib/modules/click-to-tweet/assets/css/styles1ac1.css?ver=3.7.3"
          type='text/css' media='all'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='stylesheet' id='flatsome-main-css'
          href="wp-content/themes/flatsome/assets/css/flatsomef43b.css?ver=3.7.1" type='text/css' media='all'/>
    <link rel='stylesheet' id='flatsome-shop-css'
          href="wp-content/themes/flatsome/assets/css/flatsome-shopf43b.css?ver=3.7.1" type='text/css' media='all'/>
    <link rel='stylesheet' id='flatsome-style-css' href="wp-content/themes/flatsome-child/stylef43b.css?ver=3.7.1"
          type='text/css' media='all'/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type='text/javascript' src="wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"></script>
    <script type='text/javascript' src="wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>
    <link rel="canonical" href="index.html"/>
    <link rel='shortlink' href="index.html"/>


</head>
<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-16 woocommerce-no-js lightbox nav-dropdown-has-arrow">

<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div id="wrapper">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div><!-- #wrapper -->

<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form- is-normal">
                        <form role="search" method="get" class="searchform"
                              action="https://mauweb.monamedia.net/luxury-parkview/">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value=""
                                           placeholder="Tìm kiếm&hellip;"/>
                                    <input type="hidden" name="post_type" value="product"/>
                                </div><!-- .flex-col -->
                                <div class="flex-col">
                                    <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0">
                                        <i class="icon-search"></i></button>
                                </div><!-- .flex-col -->
                            </div><!-- .flex-row -->
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
            <li id="menu-item-840"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-840">
                <a href="index.html#gioi-thieu-m" class="nav-top-link">Giới thiệu</a></li>
            <li id="menu-item-837"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-837">
                <a href="index.html#vi-tri-m" class="nav-top-link">Vị trí</a></li>
            <li id="menu-item-845"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-845">
                <a href="index.html#tien-ich-m" class="nav-top-link">Tiện ích</a></li>
            <li id="menu-item-848"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-848">
                <a href="index.html#mat-bang-m" class="nav-top-link">Mặt bằng</a></li>
            <li id="menu-item-862"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-862">
                <a href="index.html#thanh-toan-m" class="nav-top-link">Phương thức thanh toán</a></li>
            <li id="menu-item-863"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-863">
                <a href="index.html#tin-tuc-m" class="nav-top-link">Tin tức</a></li>
            <li id="menu-item-856"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-856">
                <a href="index.html#lien-he-m" class="nav-top-link">Liên hệ</a></li>
            <li class="account-item has-icon menu-item">
                <a href="tai-khoan/index.html" class="nav-top-link nav-top-not-logged-in">
    <span class="header-account-title">
    Đăng nhập  </span>
                </a><!-- .account-login-link -->

            </li>
            <li class="html header-social-icons ml-0">
                <div class="social-icons follow-icons "><a href="http://url/" target="_blank" data-label="Facebook"
                                                           rel="noopener noreferrer nofollow"
                                                           class="icon plain facebook tooltip"
                                                           title="Follow on Facebook"><i
                            class="icon-facebook"></i></a><a href="http://url/" target="_blank"
                                                             rel="noopener noreferrer nofollow" data-label="Instagram"
                                                             class="icon plain  instagram tooltip"
                                                             title="Follow on Instagram"><i
                            class="icon-instagram"></i></a><a href="http://url/" target="_blank" data-label="Twitter"
                                                              rel="noopener noreferrer nofollow"
                                                              class="icon plain  twitter tooltip"
                                                              title="Follow on Twitter"><i
                            class="icon-twitter"></i></a></div>
            </li>
        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->
<a href="tel:0769220162" class="hotlinemp" rel="nofollow">
    <div class="mypage-alo-phone" style="">
        <div class="animated infinite zoomIn mypage-alo-ph-circle">
        </div>
        <div class="animated infinite pulse mypage-alo-ph-circle-fill">
        </div>
        <div class="animated infinite tada mypage-alo-ph-img-circle">
        </div>
    </div>
</a>
<!-- FB Messenger -->
<div id="fbMsg">
    <img data-remodal-target="fb-messenger" src="wp-content/plugins/fb-messenger/images/fb-messenger.png">
</div>

<div class="remodal" data-remodal-id="fb-messenger">
    <div class="fb-page" data-tabs="messages" data-href="" data-width="310" data-height="330" data-href=""
         data-small-header="true" data-hide-cover="false" data-show-facepile="true" data-adapt-container-width="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote>Loading...</blockquote>
        </div>
    </div>
</div>

<!-- End FB Messenger -->

<script type='text/javascript' src="wp-content/plugins/contact-form-7/includes/js/scripts1748.js?ver=5.0.5"></script>
<script type='text/javascript' src="wp-content/plugins/fb-messenger/js/indexca80.js?ver=4.9.15"></script>
<script type='text/javascript'
        src="wp-content/plugins/ot-flatsome-vertical-menu/assets/js/ot-vertical-menuf488.js?ver=1.1.0"></script>
<script type='text/javascript'
        src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70"></script>

<script type='text/javascript'
        src="wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min9d52.js?ver=3.5.1"></script>
<script type='text/javascript'
        src="wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-searchf43b.js?ver=3.7.1"></script>
<script type='text/javascript' src="wp-includes/js/hoverIntent.minc245.js?ver=1.8.1"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var flatsomeVars = {
        "ajaxurl": "",
        "rtl": "",
        "sticky_height": "70",
        "user": {"can_edit_pages": false}
    };
    /* ]]> */
</script>
<script type='text/javascript' src="wp-content/themes/flatsome/assets/js/flatsomef43b.js?ver=3.7.1"></script>
<script type='text/javascript' src="wp-content/themes/flatsome/assets/js/woocommercef43b.js?ver=3.7.1"></script>
<script type='text/javascript' src="wp-includes/js/wp-embed.minca80.js?ver=4.9.15"></script>
</body>

<!-- Mirrored from mauweb.monamedia.net/luxury-parkview/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 02:25:09 GMT -->
</html>
