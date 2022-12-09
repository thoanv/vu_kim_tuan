@extends('admin.layouts.guest')
@section('title', 'Hệ thống đăng nhập')
@section('content')
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-100">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Hệ thống đăng đăng ký</h4>

                                </div>
                            </div>
                            <div class="card-body attendance">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input type="text" name="name"  placeholder="Vui lòng nhập..." class="form-control" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ Email</label>
                                        <input type="email" name="email"  placeholder="Vui lòng nhập..." class="form-control" value="{{old('email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password"  placeholder="Vui lòng nhập..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" name="password_confirmation"  placeholder="Vui lòng nhập..." class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Đăng ký</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Nếu bạn đã có tài khoản ?
                                        <a href="{{route('login')}}" class="text-primary text-gradient font-weight-bold">Đăng nhập</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </main>
@endsection
