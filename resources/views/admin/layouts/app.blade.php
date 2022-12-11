<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/assets/img/wait.png" />
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-200">
@include('admin.layouts.navigation')
@yield('content')

<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/notify.min.js')}}"></script>
<script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-dashboard.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{url('ckeditor/ckeditor.js')}}"></script>
<script>

    CKEDITOR.replace('content', {
        filebrowserBrowseUrl: '{{route('ckfinder_browser')}}'
    })
    CKEDITOR.replaceAll('content', {
        filebrowserBrowseUrl: '{{route('ckfinder_browser')}}'
    })
    CKEDITOR.on('content', function(e) {
        e.editor.addCss( 'body { background-color: red; }' );
    });
    $('.js-example-basic-multiple').select2({
        placeholder: '--Chọn--'
    });
</script>
@include('ckfinder::setup')
@stack('scripts')
@stack('scripts')
</body>
</html>
