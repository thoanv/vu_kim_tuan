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

    <title>Chung cư The Nine - Số 9 Phạm Văn Đồng</title>
    <meta name="keywords" content="Chung cư The Nine số 9 Phạm Văn Đồng, The Nine 9 Phạm Văn Đồng, The Nine Phạm Văn Đồng">
    <meta name="description" content="The Nine 9 - tọa lạc tại vị trí chiến lược, trên mảnh đất vàng gần như cuối cùng tại trục đường Phạm Văn Đồng.">
    <link rel="shortcut icon" href="{{$info['favicon']}}">
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
    <link rel='stylesheet' id='dashicons-css' href="/wp-includes/css/dashicons.minca80.css?ver=4.9.15" type='text/css'
          media='all'/>
    <link rel='stylesheet' id='menu-icons-extra-css'
          href="/wp-content/plugins/ot-flatsome-vertical-menu/libs/menu-icons/css/extra.mincf86.css?ver=0.10.2"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='hrw-css' href="/wp-content/plugins/call-now-icon-animate/css.css" type='text/css'
          media=''/>
    <link rel='stylesheet' id='contact-form-7-css'
          href="/wp-content/plugins/contact-form-7/includes/css/styles1748.css?ver=5.0.5" type='text/css' media='all'/>
    <link rel='stylesheet' id='fb-messenger-style-css'
          href="/wp-content/plugins/fb-messenger/css/styleca80.css?ver=4.9.15" type='text/css' media='all'/>
    <link rel='stylesheet' id='ot-vertical-menu-css'
          href="/wp-content/plugins/ot-flatsome-vertical-menu/assets/css/ot-vertical-menuf488.css?ver=1.1.0"
          type='text/css' media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='tt-easy-google-fonts-css'
          href="https://fonts.googleapis.com/css?family=Yeseva+One%3Aregular&amp;subset=latin%2Call&amp;ver=4.9.15"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='flatsome-icons-css'
          href="/wp-content/themes/flatsome/assets/css/fl-icons6de8.css?ver=3.3"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='easy-social-share-buttons-css'
          href="/wp-content/plugins/easy-social-share-buttons3/assets/css/default-retina/easy-social-share-buttons1ac1.css?ver=3.7.3"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='essb-cct-style-css'
          href="/wp-content/plugins/easy-social-share-buttons3/lib/modules/click-to-tweet/assets/css/styles1ac1.css?ver=3.7.3"
          type='text/css' media='all'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='stylesheet' id='flatsome-main-css'
          href="/wp-content/themes/flatsome/assets/css/flatsomef43b.css?ver=3.7.1" type='text/css' media='all'/>
    <link rel='stylesheet' id='flatsome-shop-css'
          href="/wp-content/themes/flatsome/assets/css/flatsome-shopf43b.css?ver=3.7.1" type='text/css' media='all'/>
    <link rel='stylesheet' id='flatsome-style-css' href="/wp-content/themes/flatsome-child/stylef43b.css?ver=3.7.1"
          type='text/css' media='all'/>
    <link rel="stylesheet" href="{{asset('assets/lib/sweetalert2/css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('company')"/>
    <meta property="og:url" content="@yield('canonical', route('home'))"/>
    <meta property="article:modified_time" content=""/>
    <meta property="og:image" content="@yield('image', $info['thumbnail'])"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:description" content="The Nine 9 - tọa lạc tại vị trí chiến lược, trên mảnh đất vàng gần như cuối cùng tại trục đường Phạm Văn Đồng.">
    <meta name="twitter:card" content="summary_large_image"/>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CCJ7W5R771"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CCJ7W5R771');
    </script>
</head>
<body
    class="home page-template page-template-page-blank page-template-page-blank-php page page-id-16 woocommerce-no-js lightbox nav-dropdown-has-arrow">

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

            <li id="menu-item-840"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-840">
                <a href="{{route('home')}}#gioi-thieu" class="nav-top-link">Giới thiệu</a></li>
            <li id="menu-item-837"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-837">
                <a href="{{route('home')}}#vi-tri" class="nav-top-link">Vị trí</a></li>
            <li id="menu-item-845"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-845">
                <a href="{{route('home')}}#tien-ich" class="nav-top-link">Tiện ích</a></li>
            <li id="menu-item-848"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-848">
                <a href="{{route('home')}}#mat-bang" class="nav-top-link">Mặt bằng</a></li>
            <li id="menu-item-863"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-863">
                <a href="{{route('home')}}#tin-tuc" class="nav-top-link">Tin tức</a></li>
            <li id="menu-item-856"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-856">
                <a href="{{route('home')}}#lien-he" class="nav-top-link">Liên hệ</a></li>


        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->
{{--<a href="tel:0769220162" class="hotlinemp" rel="nofollow">--}}
{{--    <div class="mypage-alo-phone" style="">--}}
{{--        <div class="animated infinite zoomIn mypage-alo-ph-circle">--}}
{{--        </div>--}}
{{--        <div class="animated infinite pulse mypage-alo-ph-circle-fill">--}}
{{--        </div>--}}
{{--        <div class="animated infinite tada mypage-alo-ph-img-circle">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</a>--}}
<!-- FB Messenger -->
{{--<div id="fbMsg">--}}
{{--    <img data-remodal-target="fb-messenger" src="/wp-content/plugins/fb-messenger/images/fb-messenger.png">--}}
{{--</div>--}}

<div class="remodal" data-remodal-id="fb-messenger">
    <div class="fb-page" data-tabs="messages" data-href="" data-width="310" data-height="330" data-href=""
         data-small-header="true" data-hide-cover="false" data-show-facepile="true" data-adapt-container-width="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote>Loading...</blockquote>
        </div>
    </div>
</div>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$info['phone']}}" class="pps-btn-img">
                <img src="/images/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:{{$info['phone']}}">
            <span class="text-hotline">{{$info['phone']}}</span>
        </a>
    </div>
</div>
<div class="modal fade" id="modalnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="form_wrapper position-relative">
                    <a class="closes" style="position: absolute; right: 3px; top: 3px; border: 1px solid #FFF; padding: 2px; border-radius: 50%; width: 20px; height: 20px; justify-content: center; display: flex; align-items: center;cursor: pointer">
                        <i style="color: white" class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <div class="form_container">
                        <div class="title_container">
                            <div >
                                <h3 class="mb-0" style="color: white; text-transform: uppercase">Đăng ký tư vấn</h3>
                                <p class="mb-0" style="color: white; font-size: 14px">Nhập thông tin để đăng ký thăm quan dự án</p>
                            </div>
                            <div style="display: flex; justify-content: flex-start; align-items: center; /* float: right; */ /* text-align: center; */ /* width: 10%; */ margin-left: auto;">
                                <span><i style="color: #FFF; font-size: 33px" aria-hidden="true" class="fa fa-pencil fa-5"></i></span>
                            </div>

                        </div>
                        <div class="row">
                            <div class="">
                                <form id="apply-job-popup" style="margin-bottom: 0" method="POST" action="{{route('contact.store')}}">
                                    @csrf
                                    <div class="input_field">
                                        <span>
                                            <i aria-hidden="true" class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="name" placeholder="Họ và tên (*)" required/>
                                    </div>
                                    <div class="input_field">
                                        <span>
                                            <i aria-hidden="true" class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" name="email" placeholder="Địa chỉ Email" required/>
                                    </div>
                                    <div class="input_field">
                                        <span>
                                            <i aria-hidden="true" class="fa fa-phone"></i>
                                        </span>
                                        <input type="text" name="phone" id="phoneNumberPopup" placeholder="Số điện thoại (*)" required/>
                                    </div>
                                    <div class="input_field" style="margin-bottom: 0">
                                         <span style="height: 100%;">
                                            <i aria-hidden="true" class="fa fa-hand-o-up"></i>
                                        </span>
                                        <select name="can-ho" id="" style="padding-left: 50px">
                                            <option value="">Chọn loại căn hộ</option>
                                            <option value="Căn hộ 2PN: 75 - 87 m2">Căn hộ 2PN: 75 - 87 m<sup>2</sup></option>
                                            <option value="Căn hộ 3PN: 91 - 116 m2">Căn hộ 3PN: 91 - 116 m<sup>2</sup></option>
                                            <option value="Căn hộ 3PN: 131 - 162 m2">Căn hộ 3PN: 131 - 162 m<sup>2</sup></option>
                                        </select>
                                    </div>
{{--                                    <div>--}}
{{--                                        <h5 style="color: white">Quý khách đang quan tâm:</h5>--}}
{{--                                        <div>--}}
{{--                                            <label class="box-checkbox">Căn hộ 2PN: 75 - 87 m<sup>2</sup>--}}
{{--                                                <input type="checkbox" name="can-ho-1" value="CĂN HỘ 2PN: 75 - 87 m2">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div><div>--}}
{{--                                            <label class="box-checkbox">Căn hộ 3PN: 91 - 116 m<sup>2</sup>--}}
{{--                                                <input type="checkbox" name="can-ho-2" value="CĂN HỘ 3PN: 91 - 116 m2">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <label class="box-checkbox">Căn hộ 3PN: 131 - 162 m<sup>2</sup>--}}
{{--                                                <input type="checkbox" name="can-ho-3" value="CĂN HỘ 3PN: 131 - 162 m2">--}}
{{--                                                <span class="checkmark"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
                                    <hr>
                                    <div class="text-center">
                                        <input class="button-register" style="margin-bottom: 0;display: block;
    width: 100%;border-radius: 0!important;" type="submit" value="Đăng ký"/>
{{--                                        <a class="closes button button-register" style="margin-bottom: 0">Đóng</a>--}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src="/assets/js/jquery-3.6.1.min.js"></script>
<script type='text/javascript' src="/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"></script>
<script type='text/javascript' src="/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>
<script type='text/javascript' src="/wp-content/plugins/fb-messenger/js/indexca80.js?ver=4.9.15"></script>
<script type='text/javascript'
        src="/wp-content/plugins/ot-flatsome-vertical-menu/assets/js/ot-vertical-menuf488.js?ver=1.1.0"></script>
<script type='text/javascript'
        src="/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70"></script>


<script type='text/javascript'
        src="/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-searchf43b.js?ver=3.7.1"></script>
<script type='text/javascript' src="/wp-includes/js/hoverIntent.minc245.js?ver=1.8.1"></script>
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
<script src="{{asset('assets/lib/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
<script type='text/javascript' src="/wp-content/themes/flatsome/assets/js/flatsomef43b.js?ver=3.7.1"></script>
<script>
    var videoLink = $('.el-video-link-js'),
        popup_id = $('#el-video-popup'),
        videoBody = $('.el-video-body-js'),
        videoCloseButton = $('.el-video-button-js'),
        popupOverlay = $('.el-video-overlay_popup');


    videoLink.click(function (e) {
        e.preventDefault();
        // Связываем  popup_id
        linkVideoSrc = $(this).attr('data-href');
        popup_id.find('.el-video-popup__box-js').append('<iframe  src="https://www.youtube.com/embed/' + linkVideoSrc + '?rel=0&showinfo=0&autoplay=1" frameborder="0"  allowfullscreen="" allow="autoplay">');
        popup_id.find(videoCloseButton).css("display", "block");
        console.log(linkVideoSrc);
        // Открываем окно
        popup_id.show();
        popupOverlay.show();
    });

    $(videoCloseButton).click(function (e) {
        e.preventDefault();
        $(this).closest(videoBody).find(videoLink).css("display", "block");
        $(this).css("display", "none");
        popup_id.find('.el-video-popup__box-js iframe').remove();
        popupOverlay.hide();
        popup_id.hide();
    });
    // Обрабатываем клик по заднему фону
    $(popupOverlay).click(function () {

        // Скрываем затемнённый задний фон и основное всплывающее окно9
        popupOverlay.hide();
        popup_id.hide();
        popup_id.find('.el-video-popup__box-js iframe').remove();
    });

</script>
<script>

    $('.myBtn').on('click', function (e) {
        $('#modalnew').css('display', 'inline-block');
    });
    // $('#modalnew').click(function() {
    //     $(this).hide();
    // });
    // $(document).on('click',function(e){
    //     if($('#modalnew').hasClass('modal')){
    //         $('#modalnew').css('display', 'none')
    //         // console.log("yes");
    //     }
    // });
    $('.closes').on('click', function (e) {
        $('#modalnew').css('display', 'none');
    });
</script>
<script type="text/javascript">
    const isNumericInput = (event) => {
        const key = event.keyCode;
        return ((key >= 48 && key <= 57) || // Allow number line
            (key >= 96 && key <= 105) // Allow number pad
        );
    };
    const isModifierKey = (event) => {
        const key = event.keyCode;
        return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
            (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
            (key > 36 && key < 41) || // Allow left, up, right, down
            (
                // Allow Ctrl/Command + A,C,V,X,Z
                (event.ctrlKey === true || event.metaKey === true) &&
                (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
            )
    };
    const enforceFormat = (event) => {
        // Input must be of a valid number format or a modifier key, and not longer than ten digits
        if (!isNumericInput(event) && !isModifierKey(event)) {
            event.preventDefault();
        }
    };
    const formatToPhone = (event) => {
        if (isModifierKey(event)) {
            return;
        }
        // I am lazy and don't like to type things more than once
        const target = event.target;
        const input = event.target.value.replace(/\D/g, '').substring(0, 10); // First ten digits of input only
        const zip = input.substring(0, 3);
        const middle = input.substring(3, 6);
        const last = input.substring(6, 10);
        if (input.length > 6) {
            target.value = `${zip} ${middle} ${last}`;
        } else if (input.length > 3) {
            target.value = `${zip} ${middle}`;
        } else if (input.length > 0) {
            target.value = `${zip}`;
        }
    };
    const inputElement_ = document.getElementById('phoneNumber');
    inputElement_.addEventListener('keydown', enforceFormat);
    inputElement_.addEventListener('keyup', formatToPhone);

    const inputElement = document.getElementById('phoneNumberPopup');
    inputElement.addEventListener('keydown', enforceFormat);
    inputElement.addEventListener('keyup', formatToPhone);
</script>
<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        margin: 10% auto; /* 15% from the top and centered */
        width: 23%;
    }
    @media (max-width: 768px) {
        .modal-content {
            margin: 40% auto;
            width: 95%;
        }
    }
    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .box-checkbox {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 15px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: white;
    }
    /* Hide the browser's default checkbox */
    .box-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: transparent;
        border: 1px solid #ccc;
    }

    /* On mouse-over, add a grey background color */
    .box-checkbox:hover input ~ .checkmark {
        background-color: #2b3723;
    }

    /* When the checkbox is checked, add a blue background */
    .box-checkbox input:checked ~ .checkmark {
        background-color: transparent;
        border: 1px solid #ccc;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .box-checkbox input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .box-checkbox .checkmark:after {
        left: 8px;
        top: 2px;
        width: 8px;
        height: 13px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<script>
    setTimeout(function(){
        $('#modalnew').css('display', 'inline-block');
    }, 2000); // 5000 is a 5 seconds
    $('#apply-job-popup').submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        let name = $('.apply-full-name').val();
        let email = $('.apply-email').val();
        let phone = $('.apply-phone').val();
        let address = $('.apply-address').val();
        let note = $('.apply-note').val();
        let check = true;
        $('.note-name').html('');
        $('.note-email').html('');
        $('.note-phone').html('');
        $('.apply-address').html('');
        $('.apply-note').html('');

        if (check) {
            $('.wpcf7-submit').hide();
            $('.loading-comment').show();
            setTimeout(function () {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (res) => {
                        let is_check = res.data.success;
                        let data = res.data;
                        console.log(data);
                        if (is_check === 422) {
                            let errors = res.data.data;
                            if (errors.captcha) {
                                $('.note-captcha').html(errors.captcha[0]);
                            }
                            if (errors.file_cv) {
                                $('.note-file').html(errors.file_cv[0]);
                            }
                            getCaptcha();
                            $('.apply-captcha').val('');
                        } else if (is_check === 101) {
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-apply-cs',
                                },
                                buttonsStyling: false
                            })
                            swalWithBootstrapButtons.fire({
                                title: 'Thông báo',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'Đóng',
                                reverseButtons: true
                            })
                        } else {
                            // alert(data.message);
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-apply-cs',
                                },
                                buttonsStyling: false
                            })
                            swalWithBootstrapButtons.fire({
                                title: 'Thông báo',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'Đóng',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            })
                            // window.location.reload();
                        }
                        $('.wpcf7-submit').show();
                        $('.loading-comment').hide();
                    },
                    error: function (response) {
                        $('#file-input-error').text(response.responseJSON.message);
                    }
                });
            }, 500);
        }
    });
</script>
@stack('scripts')
</body>

<!-- Mirrored from mauweb.monamedia.net/luxury-parkview/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 02:25:09 GMT -->
</html>
