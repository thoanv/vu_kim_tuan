@extends('admin.layouts.app')
@section('title', 'Dữ liệu')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
             data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Slide</h6>
                </nav>
            </div>
        </nav>
        <div class="container py-1">
            <div class="row mb-4">
                <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pb-0">
                            <h6 class="mb-0">Tìm kiếm</h6>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-body p-3 pb-0 pt-1">
                            <form action="{{route('posts.index')}}">
                                <div class="form-group row mb-4">
                                    <div class="col-lg-3">
                                        <div class="form-group mb-3">
                                            <label>Tên phòng ban</label>
                                            <input type="text" class="form-control" name="name" value=""
                                                   placeholder="Nhập tên phòng ban...">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-3">
                                            <label>Ẩn/Hiển thị</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="">Tất cả</option>
                                                <option value="1">
                                                    Hiển thị
                                                </option>
                                                <option value="0">
                                                    Ẩn
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" style="display: flex; align-items: end">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Tìm kiếm</button>
                                            <a href="https://spin.haiphatland.com.vn/admin/departments"
                                               class="btn btn-danger btn-sm">Làm mới</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="row notification-submit">
                    <div class="col-lg-12">
                        <div class="alert alert-success  text-white " role="alert">
                            <strong>Thao tác !</strong> {{ session('success') }}!
                        </div>
                    </div>
                </div>
            @endif
            <div class="row mb-4">
                <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pb-0">
                            <h6 class="mb-0">Danh sách
                            </h6>
                            <div style="float: right; display: inline-block; margin-top: -30px;">
                                <a href="{{route('slides.create')}}"
                                   class="btn btn-primary btn-sm">Thêm mới</a>

                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-body p-1 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tiêu đề</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Hình ảnh</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Trạng thái</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slides as $item)
                                    <tr>
                                        <td class="align-middle text-center text-sm">{{$loop->iteration}}</td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$item['name']}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="text-center">
                                                <img src="{{$item['avatar']}}" alt="" style="width: 300px">
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <div class="form-check form-switch" style="display: inline-block">
                                                <input class="form-check-input" name="my-checkbox" type="checkbox" data-id="{{$item['id']}}"
                                                       data-api="{{route('enable-column')}}" data-table="slides"
                                                       data-column="status"  {{ $item['status'] ? 'checked="checked"' : '' }}>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="{{route('slides.edit', $item)}}" class="btn btn-info btn-sm mb-0">Sửa</a>
                                            <form class="d-inline-block" action="{{ route('slides.destroy', $item) }}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary btn-sm mb-0" onclick="return confirm('Bạn có muốn xóa không?')"> Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        @if(!count($slides))
                            @include('admin.components.data-empty')
                        @endif
                        <div class="text-center m-3 d-flex">
                            <div style="font-size: 12px">
                                Tổng: {{ $slides->total() }} bản ghi
                            </div>
                            <div class="float-end" style="margin-left: auto">
                                {{ $slides->links() }}
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
