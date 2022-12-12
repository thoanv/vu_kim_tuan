@extends('admin.layouts.app')
@section('title', 'Thông tin chung')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Thông tin chung</h6>
                </nav>
            </div>
        </nav>

        <div class="container py-4">
            <form method="POST" action="{{route('information.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$infomation['id']}}">
            <div class="row mb-4">
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="box-images file-upload">
                                <div class="upload_image" data-name="logo">
                                    <input type="hidden" class="logo" name="logo" value="{{old('logo', $infomation['logo'])}}">
                                    <img src="{{$infomation['logo'] ? $infomation['logo'] : '/assets/img/department.jpg'}}" alt="logo" class="imge image-logo">
                                </div>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0">Logo</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="box-images file-upload">
                                <div class="upload_image" data-name="favicon">
                                    <input type="hidden" class="favicon" name="favicon" value="{{old('favicon', $infomation['favicon'])}}">
                                    <img src="{{$infomation['favicon'] ? $infomation['favicon'] : '/assets/img/department.jpg'}}" alt="favicon" class="imge image-favicon">
                                </div>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0">Favicon</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="box-images file-upload">
                                <div class="upload_image" data-name="thumbnail">
                                    <input type="hidden" class="thumbnail" name="thumbnail" value="{{old('thumbnail', $infomation['thumbnail'])}}">
                                    <img src="{{$infomation['thumbnail'] ? $infomation['thumbnail'] : '/assets/img/department.jpg'}}" alt="thumbnail" class="imge image-thumbnail">
                                </div>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0">Thumbail</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3 pt-2">
                            <h4 class="font-weight-normal mt-1">Thông tin chung</h4>
                            <hr class="dark horizontal my-0">
                            <div class="pt-2">
                                <div class="form-group row mb-4">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label>Tên công ty</label>
                                            <input type="text" class="form-control form-control-lg" name="company" value="{{$infomation['company']}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label>Địa chỉ Email</label>
                                            <input type="email" class="form-control form-control-lg" name="email" value="{{$infomation['email']}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label>Số điện thoại</label>
                                            <input type="text" class="form-control form-control-lg" name="phone" value="{{$infomation['phone']}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label>Địa chỉ</label>
                                            <input type="text" class="form-control form-control-lg" name="address" value="{{$infomation['address']}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control form-control-lg" name="facebook" value="{{$infomation['facebook']}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label>Zalo</label>
                                            <input type="text" class="form-control form-control-lg" name="zalo" value="{{$infomation['zalo']}}" placeholder="10">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-2 text-center">
                            <button type="submit" class="btn btn-primary mb-0">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>2022,
                                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 969px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 734px;"></div></div></main>
@endsection
