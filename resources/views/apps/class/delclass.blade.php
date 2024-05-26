@extends('layouts.client')
@section('slidebar')
@include('apps.blocks.logo')

<div class="h-100" id="leftside-menu-container" data-simplebar="">

    @include('apps.blocks.sidemenu')
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->
@endsection

@section('header')
<div class="navbar-custom">

    @include('apps.blocks.header')


    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
    @include('apps.blocks.search')
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
            <h4 class="page-title">Thêm người dùng</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <form action="{{ route('postdelclass', ['id' => $class->id]) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{$class->name}}" disabled id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Tên lớp học</label>
                </div>

                <a href="{{ route('user') }}" class="btn btn-success"><i class="dripicons-arrow-thin-left"></i> Quay Lại</a>
                <button type="submit" class="btn btn-danger">Xác Nhận Xóa</button>

            </div>

        </div>
    </form>
</div>

@endsection


@section('footer')
<footer class="footer">
    <div class="container-fluid">
        @include('apps.blocks.footer')
    </div>
</footer>
@endsection

@section('rightslide')
<div class="end-bar">
    @include('apps.blocks.rightbar')

</div>

<div class="rightbar-overlay"></div>
@endsection