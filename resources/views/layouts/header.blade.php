<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <div class="logo__site">
                        <div class="logo__site--main">
                            <a href="{{route('home')}}" class="custom-logo-link" rel="home"
                               aria-current="page">
                                <img
                                                        src="{{$info['logo']}}"
                                                        class="custom-logo" alt="Logo"
                                                        decoding="async">
                            </a>
                        </div>
                    </div>
                </div>
                <style>

                </style>
                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                               data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                        <li id="menu-item-24"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item active  menu-item-24">
                            <a href="{{route('home')}}" class="nav-top-link">Trang chủ</a></li>
                        <li id="menu-item-703"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-703">
                            <a href="{{route('home')}}#gioi-thieu" class="nav-top-link">Giới thiệu</a></li>
                        <li id="menu-item-705"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-705">
                            <a href="{{route('home')}}#vi-tri" class="nav-top-link">Vị trí</a></li>
                        <li id="menu-item-707"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-707">
                            <a href="{{route('home')}}#tien-ich" class="nav-top-link">Tiện ích</a></li>
                        <li id="menu-item-709"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-709">
                            <a href="{{route('home')}}#mat-bang" class="nav-top-link">Mặt bằng</a></li>
                        <li id="menu-item-713"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-713">
                            <a href="{{route('home')}}#tin-tuc" class="nav-top-link">Tin tức</a></li>
                        <li id="menu-item-717"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active  menu-item-717">
                            <a href="{{route('home')}}#lien-he" class="nav-top-link">Liên hệ</a></li>
                    </ul>
                </div>

            </div><!-- .header-inner -->
            <!-- Header divider -->
            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div><!-- .header-main -->
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div><!-- .header-bg-container -->   </div><!-- header-wrapper-->
</header>
