@extends('layouts.app')
@section('title', 'Chung cư The Nine - Số 9 Phạm Văn Đồng')
@section('content')
    <main id="main" class="">
        <div id="content" role="main" class="content-area">
{{--            <section class="section sec_banner" id="section_385680832">--}}
{{--                <div class="bg section-bg fill bg-fill  bg-loaded">--}}

{{--                </div><!-- .section-bg -->--}}

{{--                <div class="section-content relative">--}}

{{--                    <div class="slider-wrapper relative " id="slider-1577291748">--}}
{{--                        <div class="slider slider-nav-circle slider-nav-normal slider-nav-light slider-style-normal"--}}
{{--                             data-flickity-options='{--}}
{{--                                    "cellAlign": "center",--}}
{{--                                    "imagesLoaded": true,--}}
{{--                                    "lazyLoad": 1,--}}
{{--                                    "freeScroll": false,--}}
{{--                                    "wrapAround": true,--}}
{{--                                    "autoPlay": 6000,--}}
{{--                                    "pauseAutoPlayOnHover" : true,--}}
{{--                                    "prevNextButtons": true,--}}
{{--                                    "contain" : true,--}}
{{--                                    "adaptiveHeight" : true,--}}
{{--                                    "dragThreshold" : 10,--}}
{{--                                    "percentPosition": true,--}}
{{--                                    "pageDots": true,--}}
{{--                                    "rightToLeft": false,--}}
{{--                                    "draggable": true,--}}
{{--                                    "selectedAttraction": 0.1,--}}
{{--                                    "parallax" : 0,--}}
{{--                                    "friction": 0.6        }'--}}
{{--                        >--}}

{{--                            @foreach($slides as $slide)--}}
{{--                                <div class="banner has-hover bg-zoom"--}}
{{--                                     style="background-image: url({!! $slide['avatar'] !!}); background-repeat: no-repeat; padding-top: 45%;">--}}
{{--                                    <div class="banner-inner fill">--}}
{{--                                        <div class="banner-bg fill">--}}
{{--                                            <div class="bg fill bg-fill "></div>--}}
{{--                                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.46);"></div>--}}
{{--                                        </div><!-- bg-layers -->--}}
{{--                                        <div class="banner-layers container">--}}
{{--                                            <div class="fill banner-link"></div>--}}

{{--                                        </div><!-- .banner-layers -->--}}
{{--                                    </div><!-- .banner-inner -->--}}
{{--                                </div><!-- .banner -->--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="loading-spin dark large centered"></div>--}}
{{--                    </div><!-- .ux-slider-wrapper -->--}}
{{--                </div><!-- .section-content -->--}}
{{--                <style scope="scope">--}}

{{--                    #section_385680832 {--}}
{{--                        padding-top: 0px;--}}
{{--                        padding-bottom: 0px;--}}
{{--                    }--}}
{{--                </style>--}}
{{--            </section>--}}
            <section class="section sec_banner" id="section_385680832">
                <div class="bg section-bg fill bg-fill  bg-loaded">

                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <div class="slider-wrapper relative " id="slider-1577291748">
                        <div class="slider slider-nav-circle slider-nav-normal slider-nav-light slider-style-normal"
                             data-flickity-options='{
                                    "cellAlign": "center",
                                    "imagesLoaded": true,
                                    "lazyLoad": 1,
                                    "freeScroll": false,
                                    "wrapAround": true,
                                    "autoPlay": 6000,
                                    "pauseAutoPlayOnHover" : true,
                                    "prevNextButtons": true,
                                    "contain" : true,
                                    "adaptiveHeight" : true,
                                    "dragThreshold" : 10,
                                    "percentPosition": true,
                                    "pageDots": true,
                                    "rightToLeft": false,
                                    "draggable": true,
                                    "selectedAttraction": 0.1,
                                    "parallax" : 0,
                                    "friction": 0.6        }'
                        >

                            @foreach($slides as $key => $slide)
                            <div class="banner has-hover" id="banner-1067129818{{$key}}">
                                <div class="banner-inner fill">
                                    <div class="banner-bg fill">
                                        <div class="bg fill bg-fill "></div>
                                        <div class="overlay"></div>
                                    </div><!-- bg-layers -->
{{--                                    <div class="banner-layers container">--}}
{{--                                        <div class="fill banner-link"></div>--}}
{{--                                        <div id="text-box-273166983"--}}
{{--                                             class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">--}}
{{--                                            <div data-animate="fadeInUp">--}}
{{--                                                <div class="text dark">--}}

{{--                                                    <div class="text-inner text-center">--}}

{{--                                                        <h4>Căn hộ cao cấp tại trung tâm Sài Gòn</h4>--}}
{{--                                                        <h1>MONA PARK VIEW</h1>--}}
{{--                                                        <p><span--}}
{{--                                                                style="font-size: 130%;">Xứng đáng với đẳng cấp của bạn</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- text-box-inner -->--}}
{{--                                            </div>--}}
{{--                                            <style scope="scope">--}}

{{--                                                #text-box-273166983 {--}}
{{--                                                    width: 90%;--}}
{{--                                                }--}}

{{--                                                #text-box-273166983 .text {--}}
{{--                                                    font-size: 90%;--}}
{{--                                                }--}}


{{--                                                @media (min-width: 550px) {--}}

{{--                                                    #text-box-273166983 .text {--}}
{{--                                                        font-size: 100%;--}}
{{--                                                    }--}}

{{--                                                }--}}
{{--                                            </style>--}}
{{--                                        </div><!-- text-box -->--}}

{{--                                    </div><!-- .banner-layers -->--}}
                                </div><!-- .banner-inner -->


                                <style scope="scope">

                                    #banner-1067129818{{$key}} {
                                        padding-top: 45%;
                                    }

                                    #banner-1067129818{{$key}} .bg.bg-loaded {
                                        background-image: url({{$slide['avatar']}});
                                    }

                                    #banner-1067129818{{$key}} .overlay {
                                        background-color: rgba(0, 0, 0, 0.1);
                                    }
                                </style>
                            </div><!-- .banner -->
                            @endforeach
                        </div>
                    </div><!-- .ux-slider-wrapper -->
                </div><!-- .section-content -->
                <style scope="scope">

                    #section_385680832 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                </style>
            </section>
            <section class="section sec_video" id="section_2111218366">
                <div class="bg section-bg fill bg-fill  bg-loaded">


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div>
                    <div class="row align-center" id="row-507989373">
                        <div class="col medium-6 small-12 large-6">
                            <div class="col-inner" style="padding:0px 20px 0px 20px;margin:50px 0px 0px 0px;">
                                <h3>GPINVEST PREMIUM</h3>
                                <h1><span style="color: #105458; font-size: 130%;">THE NINE PHẠM VĂN ĐỒNG</span>
                                </h1>
                                <p style="color: #333333; font-size: 100%;">Tọa lạc tại vị trí chiến lược, trên mảnh đất
                                    vàng gần như cuối cùng tại trục đường Phạm Văn Đồng,
                                    <span
                                        style="font-weight: bold; color: #105458;">The nine</span> là công trình đầy tâm
                                    huyết của
                                    <span style="font-weight: bold; color: #105458;">GP.INVEST</span>, một tác phẩm nghệ
                                    thuật của kiến trúc sư <span style="font-weight: bold; color: #105458;">Eric Morrison </span>
                                </p>
                                <p style="color: #333333; font-size: 100%;">30 tầng cao ốc kiêu hãnh thiết kế táo bạo,
                                    phủ toàn bộ mặt ngoài bằng hệ kính trong suốt, kiến tạo kiến trúc tổng thể bề thế,
                                    tráng lệ, tựa như một
                                    <span style="font-weight: bold; color: #105458;">ngọn hải đăng</span> dẫn lối, mở
                                    cửa ra một cuộc sống hoàn toàn, trọn vẹn.
                                </p>

                            </div>
                        </div>
                        <div class="col medium-6 small-12 large-6">
                            <div class="col-inner" style="padding:0px 20px 0px 20px;margin:50px 0px 0px 0px;">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1180965298">
                                    <a class="open-video el-video__link el-video-link-js position-relative" data-href="WREeA1VjpWU"
                                       target="_self">
                                        <div class="img-inner dark">
                                            <img width="1024" height="717"
                                                 src="/images/tien-ich-the-the-nine-tower.jpg"
                                                 class="attachment-original size-original" alt=""
                                                 sizes="(max-width: 1024px) 100vw, 1024px"/>
                                            <div class="overlay" style="background-color: rgba(255, 255, 255, 0)"></div>
                                            <div
                                                class="absolute no-click x50 y50 md-x50 md-y50 lg-x50 lg-y50 text-shadow-2">
                                                <div class="overlay-icon">
                                                    <i class="icon-play"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                    <style scope="scope">

                                        #image_1180965298 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>

                        <div class="el-video-overlay_popup"> </div>
                        <div class="el-video-popup" id="el-video-popup">
                            <div class=" el-video-popup__box el-video-popup__box-js">
                                <button class="el-video__button el-video-button-js" type="button" aria-label="">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:40px"
                         class="clearfix"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_2111218366 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                </style>
            </section>

            <section class="section sec_tongquan_1 dark has-parallax" id="section_731100628">
                <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background
                     data-parallax="-10">


                    <div class="section-bg-overlay absolute fill"></div>


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <span class="scroll-to" data-label="Scroll to: #gioi-thieu" data-bullet="true"
                          data-link="#gioi-thieu" data-title="Tong quan"><a name="gioi-thieu"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:30px"
                         class="clearfix"></div>
                    <div class="row align-middle align-center" id="row-968511478">
                        <div class="col medium-6 small-12 large-6">
                            <div class="col-inner"
                                 style="background-color:rgba(255, 255, 255, 0.82);padding:20px 20px 20px 20px;margin:50px 0px 0px 0px;">
                                <h2><span style="color: #105458;">Tổng quan dự án</span></h2>
                                <div class="div_list">
                                    <ul style="list-style: none"><span style="color: #105458; line-height: 20px;"></p>
                                            <li><strong>– Tên dự án: Chung cư The Nine - Số 9 Phạm Văn Đồng</strong></li>
<li><strong>– Chủ đầu tư dự án:</strong> GPINVEST (Công ty CP Đầu tư Bất động Sản Toàn Cầu).</li>
<li><strong>– Ý tưởng thiết kế:</strong> Morrison Architects (Mỹ).</li>
<li><strong>– Địa chỉ:</strong> Số 9 Đường Phạm Văn Đồng, Quận Cầu Giấy, Hà Nội.</li>
<li><strong>– Diện tích khu đất:</strong>  5190m<sup>2</sup>.</li>
<li><strong>– Diện tích xây dựng:</strong> 2112m<sup>2</sup>.</li>
<li><strong>– Diện tích hạ tầng tiện ích Tầng 1:</strong> 3078m<sup>2</sup>.</li>
                                        <li><strong>– Diện tích hạ tầng tiện ích Tầng 6:</strong> 2380m<sup>2</sup>.</li>
                                        <li><strong>– Diện tích hạ tầng tiện ích Tầng 30:</strong> 1629m<sup>2</sup>.</li>
<li><strong>– Tòa nhà 30 Tầng:</strong> 3 tầng hầm - 6 tầng dịch vụ.</li>
<li><strong>– Ngày khởi công:</strong> Tháng 1/2020.</li>
<li><strong>– Tiến độ bàn giao:</strong> Quý 1/2022.</li>

<p></span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col medium-6 small-12 large-6">
                            <div class="col-inner" style="padding:20px 20px 0px 20px;margin:40px 0px 0px 0px;">
                                <div class="box-img-tq">
                                    <img src="/images/tq-right.jpg" alt="tq-right">
                                </div>
                            </div>
                        </div>

                        <style scope="scope">

                        </style>
                    </div>
                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_731100628 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_731100628 .section-bg-overlay {
                        background-color: rgba(0, 0, 0, 0.21);
                    }

                    #section_731100628 .section-bg.bg-loaded {
                        background-image: url('/images/bg__image__01.png');
                    }
                </style>
            </section>

            <section class="section sec_tienich" id="section_653996029">
                <div class="bg section-bg fill bg-fill  ">


                </div><!-- .section-bg -->

                <div class="section-content relative">
                <span class="scroll-to" data-label="Scroll to: #tien-ich" data-bullet="true" data-link="#tien-ich"
                      data-title="Tien ich">
                    <a name="tien-ich"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:60px"
                         class="clearfix"></div>
                    <div class="row" id="row-1029960896">
                        <div class="col small-12 large-12">
                            <div class="col-inner text-center">
                                <h1><span style="font-size: 130%;">Tiện ích sống động</span></h1>
                                <p> Theo đúng tinh thần Mỹ, sở hữu The Nine là sở hữu chuỗi trải nghiệm đẳng cấp, đa màu
                                    sắc qua hàng loạt tiện ích - dịch vụ vượt trội của 6 tầng thương mại (siêu thị, gym,
                                    spa, nhà hàng cao cấp, sân bóng rổ, mầm non quốc tế, bể sục,...), khu Sky Garden
                                    2000m2 trên tầng 30, vườn treo Babylon độc đáo, sảnh vào cao cấp. Nằm trên khu đất
                                    với tổng diện tích 5190 m2, GP.Invest đã đầu tư 4.158 m2 tổng diện tích dự án để quy
                                    hoạch đường nội bộ và cây xanh, với những giải pháp tối ưu hoá cho không gian chung
                                    của cư dân:
                                </p>


                                <div
                                    class="row large-columns-4 medium-columns- small-columns-2 row-full-width slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                    data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                    @foreach($tienIchs as $ti)
                                        <div class="gallery-col col has-shadow">
                                            <div class="col-inner">
                                                <a href="{{route('detail', $ti['slug'])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-zoom image-cover"
                                                                 style="padding-top:56.25%;">
                                                                <img width="1920" height="815" src="{{$ti['avatar']}}"
                                                                     class="attachment-original size-original wp-post-image"
                                                                     alt="" sizes="(max-width: 1920px) 100vw, 1920px">
                                                            </div>
                                                        </div><!-- .box-image -->
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">


                                                                <h5 class="post-title is-large ">{{$ti['name']}}</h5>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">{{$ti['description']}}</p>

                                                                <button
                                                                    href="{{route('detail', $ti['slug'])}}"
                                                                    class="button  is-outline is-small mb-0">
                                                                    Chi tiết
                                                                </button>


                                                            </div><!-- .box-text-inner -->
                                                        </div><!-- .box-text -->
                                                    </div><!-- .box -->
                                                </a><!-- .link -->
                                            </div>
                                        </div><!-- .col -->
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px"
                         class="clearfix"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_653996029 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_653996029 .section-bg.bg-loaded {
                        background-image: url(wp-content/uploads/2018/12/bg8934.jpg);
                    }
                </style>
            </section>

            <section class="section sec_tongquan_2 dark has-parallax" id="section_1723621646">
                <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background
                     data-parallax="-10">
                    <div class="section-bg-overlay absolute fill"></div>
                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div>
                    <div class="row align-middle align-center" id="row-305740348">
                        <div class="col small-12 large-12">
                            <div class="col-inner text-center dark">
                                <h1><span style="font-size: 130%;">Đăng ký tham quan và nhận báo giá</span></h1>
                                <p> Tìm kiếm một căn hộ cao cấp ở Hà Nội không khó, nhưng để chọn lựa một ngôi nhà mà
                                    mọi tiện ích được đáp ứng và đạt chuẩn sống cao vẫn luôn là mối băn khoăn với những
                                    cư dân hiện đại.</p>
                                <a href="{{route('home')}}#lien-he" class="button white is-outline" style="border-radius:99px;">
                                    <span>Đăng ký tham quan</span>
                                </a>

                            </div>
                        </div>

                        <style scope="scope">

                        </style>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:50px"
                         class="clearfix"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_1723621646 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_1723621646 .section-bg-overlay {
                        background-color: rgba(0, 0, 0, 0.21);
                    }

                    #section_1723621646 .section-bg.bg-loaded {
                        background-image: url('/images/bg-2-16-scaled.jpg');
                    }
                </style>
            </section>

            <section class="section sec_local" id="section_950952500">
                <div class="bg section-bg fill bg-fill  bg-loaded">


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <span class="scroll-to" data-label="Scroll to: #vi-tri" data-bullet="true" data-link="#vi-tri"
                          data-title="Vị trí"><a name="vi-tri"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:0px"
                         class="clearfix"></div>
                    <div class="row" id="row-754842918" style="max-width: unset">
                        <div class="col medium-4 small-12 large-5" style="padding-bottom: 5px!important;">
                            <div class="col-inner" style="margin:50px 0px 0px 0px;">
                                <h1><span style="color: #105458; font-size: 130%;">Vị trí kiêu hãnh</span></h1>
                                <p>Sở hữu 2 mặt tiền đắt giá</p>
                                <ul>
                                    <li><span style="font-size: 100%;"><strong>Kiêu hãnh</strong> giữa khu vực phát triển nhất thủ đô Hà Nội, nổi bật với kiến trúc phóng khoáng các chủ nhân thành đạt khi tìm kiếm nơi an cư cho gia đình mình</span>
                                    </li>
                                    <li><span style="font-size: 100%;">Tọa lạc tại <strong>số 9 Phạm Văn Đồng</strong>, Cầu Giấy, Hà Nội, <strong>THE NINE </strong>sở hữu vị trí 2 mặt tiền Phạm Văn Đồng -  Doãn Kế Thiện, vị trí đắt giá nhất tuyến đường
                                        Phạm Văn Đồng mở rộng - Trục đường vành đai 3 tại cửa ngõ phí Tây Thủ Đô.</span>
                                    </li>
                                    <li><span style="font-size: 100%;"><strong>THE NINE </strong>không chỉ đạt điểm tuyệt đối về vị trí mà đắt giá nhờ tầm nhìn Panorama bao quát toàn cảnh Thành Phố
                                        và Sông Hồng xanh mát, cùng việc hưởng lợi từ hạ tầng tiện ích, hệ thống giáo dục - giải trí sầm uất và <strong>phát triển nhất Hà Nội</strong></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col medium-8 small-12 large-7" style="padding-bottom: 0; padding-right: 0">
                            <div class="col-inner">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_554554161">
                                    <a class="image-lightbox lightbox-gallery"
                                       href="/images/thenine-location.jpg" title="">
                                        <div class="img-inner dark">
                                            <img src="/images/thenine-location.jpg" alt="thenine-location">
                                        </div>
                                    </a>
                                    <style scope="scope">

                                        #image_554554161 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:0px"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_950952500 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                </style>
            </section>

            <section class="section sec_matbang has-parallax" id="section_13959373">
                <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background
                     data-parallax="-10">


                    <div class="section-bg-overlay absolute fill"></div>


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <span class="scroll-to" data-label="Scroll to: #mat-bang" data-bullet="true" data-link="#mat-bang"
                          data-title="Mat bang"><a name="mat-bang"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:60px"
                         class="clearfix"></div>
                    <div class="row align-center" id="row-2138607903">
                        <div class="col medium-10 small-12 large-10">
                            <div class="col-inner text-center dark">
                                <h1 style="text-align: center;"><span style="font-size: 130%;">Mặt bằng điển hình</span>
                                </h1>
                                <p style="text-align: center;"><span style="font-size: 100%;">Thiết kế cao cấp được giới chuyên môn đánh giá rất cao, thông minh và đa dạng hóa các loại diện tích tương ứng với công năng sử dụng.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="row-1712479426">
                        <div class="col small-12 large-12">
                            <div class="col-inner dark">

                                <div class="tabbed-content">

                                    <ul class="nav nav-outline nav-normal nav-size-normal nav-center">
                                        <li class="tab active has-icon"><a href="#Tang_7.jpg"><span>Tầng 7</span></a>
                                        </li>
                                        <li class="tab has-icon"><a
                                                href="#tab_tang8-22"><span>Tâng 8 - 22</span></a></li>
                                        <li class="tab has-icon"><a
                                                href="#tab_tang12"><span>Tâng 12</span></a></li>
                                        <li class="tab has-icon"><a
                                                href="#tab_tang23-30"><span>Tâng 23 - 30</span></a></li>

                                    </ul>
                                    <div class="tab-panels">
                                        <div class="panel active entry-content" id="tab_tang8-22">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1523744510">
                                                <div class="img-inner dark">
                                                    <img width="1024" height="588"
                                                         src="/images/Tang_7.jpg"
                                                         class="attachment-original size-original" alt=""
                                                         sizes="(max-width: 1368px) 100vw, 1368px"/>
                                                </div>

                                                <style scope="scope">

                                                    #image_1523744510 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div>
                                        <div class="panel entry-content" id="tab_tang8-22">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1679151321">
                                                <div class="img-inner dark">
                                                    <img width="1024" height="588"
                                                         src="/images/Tang8-22.jpg"
                                                         class="attachment-original size-original" alt=""
                                                         sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </div>

                                                <style scope="scope">

                                                    #image_1679151321 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div>
                                        <div class="panel entry-content" id="tab_tang12">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y">
                                                <div class="img-inner dark">
                                                    <img width="1024" height="588"
                                                         src="/images/Tang12A.jpg"
                                                         class="attachment-original size-original" alt=""
                                                         sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="panel entry-content" id="tab_tang23-30">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y">
                                                <div class="img-inner dark">
                                                    <img width="1024" height="588"
                                                         src="/images/Tang23-30.jpg"
                                                         class="attachment-original size-original" alt=""
                                                         sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="gap-element clearfix"
                                     style="display:block; height:auto; padding-top:30px"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_13959373 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_13959373 .section-bg-overlay {
                        background-color: rgba(0, 70, 66, 0.39);
                    }

                    #section_13959373 .section-bg.bg-loaded {
                        background-image: url(wp-content/uploads/2018/12/mg76.jpg);
                    }

                    #section_13959373 .section-bg {
                        background-position: 50% 0%;
                    }
                </style>
            </section>

            <section class="section sec_payment" id="section_691729918">
                <div class="bg section-bg fill bg-fill  bg-loaded">


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <span class="scroll-to" data-label="Scroll to: #thanh-toan" data-bullet="true"
                          data-link="#thanh-toan" data-title="Thanh toán"><a name="thanh-toan"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:70px"
                         class="clearfix"></div>
                    <div class="row align-center" id="row-777571824">
                        <div class="col small-12 large-12">
                            <div class="col-inner">
                                <h1 class="text-center"><span style="font-size: 130%;" >Tiến độ thanh toán</span></h1>
                            </div>
                        </div>
                        <div class="col medium-12 small-12 large-12">
                            <h4>1. Tiến độ thanh toán với Khách hàng không sử dụng chương trình HTLS</h4>
                            <div>
                                <table class="container">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Đợt thanh toán</th>
                                        <th class="text-center">Tỷ lệ thanh toán</th>
                                        <th class="text-center">Tiến độ thanh toán</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr >
                                        <td class="text-center">1</td>
                                        <td class="text-center">Đợt 1</td>
                                        <td class="text-center">30%</td>
                                        <td class="text-center">Ngay sau ký HĐMB</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Đợt cuối</td>
                                        <td class="text-center">70% + 2% KPBT</td>
                                        <td class="text-center">15 ngày sau ký HĐMB khi có thông báo bàn giao căn hộ từ GPI</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <h4>2. Tiến độ thanh toán với Khách hàng sử dụng chương trình HTLS</h4>
                            <div>
                                <table class="container">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Đợt thanh toán</th>
                                        <th class="text-center">Tỷ lệ thanh toán</th>
                                        <th class="text-center">Tiến độ thanh toán</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr >
                                        <td class="text-center">1</td>
                                        <td class="text-center">Đợt 1</td>
                                        <td class="text-center">70%</td>
                                        <td class="text-center">Ngay sau ký HĐMB</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Đợt cuối</td>
                                        <td class="text-center">30% + 2% KPBT</td>
                                        <td class="text-center">15 ngày sau ký HĐMB khi có thông báo bàn giao căn hộ từ GPI</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px" ></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_691729918 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                </style>
            </section>

            <section class="section sec_kham_pha has-parallax" id="section_2077468791">
                <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background
                     data-parallax="-10">


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <div class="gap-element" style="display:block; height:auto; padding-top:60px"
                         class="clearfix"></div>
                    <div class="row" id="row-1081180551">
                        <div class="col small-12 large-12">
                            <div class="col-inner text-center dark">
                                <h1><span style="font-size: 130%;">Đăng ký tham quan và nhận báo giá</span></h1>
                                <p> Tìm kiếm một căn hộ cao cấp ở Hà Nội không khó, nhưng để chọn lựa một ngôi nhà mà
                                    mọi tiện ích được đáp ứng và đạt chuẩn sống cao vẫn luôn là mối băn khoăn với những
                                    cư dân hiện đại.</p>
                                <a href="{{route('home')}}#lien-he" class="button white is-outline" style="border-radius:99px;">
                                    <span>Đăng ký tham quan</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px"
                         class="clearfix"></div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_2077468791 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }

                    #section_2077468791 .section-bg-overlay {
                        background-color: rgba(0, 0, 0, 0.2);
                    }

                    #section_2077468791 .section-bg.bg-loaded {
                        background-image: url(wp-content/uploads/2018/12/bgt65.jpg);
                    }

                    #section_2077468791 .section-bg {
                        background-position: 49% 100%;
                    }
                </style>
            </section>


            <section class="section sec_news" id="section_851447186">
                <div class="bg section-bg fill bg-fill  bg-loaded">


                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <span class="scroll-to" data-label="Scroll to: #tin-tuc" data-bullet="true" data-link="#tin-tuc"
                          data-title="Tin tuc"><a name="tin-tuc"></a></span>
                    <div class="gap-element" style="display:block; height:auto; padding-top:60px"
                         class="clearfix"></div>
                    <div class="row" id="row-1908798579">
                        <div class="col small-12 large-12">
                            <div class="col-inner text-center" style="margin:0px 0px -15px 0px;">
                                <h1><span style="font-size: 130%;">Bài viết – Tin tức</span></h1>


                                <div class="row large-columns-4 medium-columns-2 small-columns-1">
                                    @foreach($posts as $post)
                                        <div class="col post-item">
                                            <div class="col-inner">
                                                <a href="{{route('detail', $post['slug'])}}"
                                                   class="plain">
                                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image">
                                                            <div class="image-cover" style="padding-top:56.25%;">
                                                                <img width="890" height="400"
                                                                     src="{{$post['avatar']}}"
                                                                     class="attachment-original size-original wp-post-image"
                                                                     alt=""
                                                                     sizes="(max-width: 890px) 100vw, 890px"/></div>
                                                        </div><!-- .box-image -->
                                                        <div class="box-text text-center">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">{{$post['name']}}</h5>
                                                                <div class="post-meta is-small op-8">{{$post->getDate()}}
                                                                </div>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">{{$post['description']}} </p>


                                                            </div><!-- .box-text-inner -->
                                                        </div><!-- .box-text -->
                                                    </div><!-- .box -->
                                                </a><!-- .link -->
                                            </div><!-- .col-inner -->
                                        </div><!-- .col -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_851447186 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                </style>
            </section>

        </div>
    </main><!-- #main -->
@endsection
