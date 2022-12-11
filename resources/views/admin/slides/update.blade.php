@extends('admin.layouts.app')
@section('title', 'Thêm mới')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
             data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Thêm mới</h6>
                </nav>
            </div>
        </nav>
        <div class="container py-1">
            <form class="theme-form" method="POST" action="{{route('slides.update', $slide['id'])}}">
                @csrf
                @method('PATCH')
                @include($view.'._form',['slide'=> $slide])
            </form>
        </div>
    </main>
@endsection
