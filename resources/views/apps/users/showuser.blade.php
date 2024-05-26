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
            <h4 class="page-title">Xem Thông Tin Người Dùng</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <form action="#" method="post">

        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Họ và Tên</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ $user->username }}" disabled id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Tên Đăng Nhập</label>
                </div>

                <!-- <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ $user->username }}" disabled id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Mật Khẩu</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" name="r_password" id="floatingPassword" disabled placeholder="Password" />
                    <label for="floatingPassword">Nhập Lại Mật khẩu</label>
                </div> -->

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" disabled value="{{ $user->email }}" placeholder="name@example.com" />
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="phone_number" id="floatingInput" disabled value="{{ $user->phone_number }}" placeholder="name@example.com" />
                    <label for="floatingInput">Số điện thoại</label>
                </div>
                <a href="{{ route('user') }}" class="btn btn-success"><i class="dripicons-arrow-thin-left"></i> Quay Lại</a>

                <!-- <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div> -->

            </div>
            <div class="col-6">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="gender" disabled value="" aria-label="Floating label select example">
                        <option selected>
                            @switch($user->gender)
                            @case(1)
                            <span class="badge bg-primary">Nam</span>
                            @break
                            @case(0)
                            <span class="badge bg-secondary">Nữ</span>
                            @break
                            @case(2)
                            <span class="badge bg-success">Bê Đê</span>
                            @break

                            @default
                            <span class="badge bg-info">Không Có Giới Tính</span>
                            @endswitch
                        </option>
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                        <option value="2">Bê Đê</option>

                    </select>
                    <label for="floatingSelect">Chọn Giới Tính</label>
                </div><br>

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="address" disabled value="" aria-label="Floating label select example">
                        <option selected>{{ $user->address }}</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="TP.HCM">TP.HCM</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                    </select>
                    <label for="floatingSelect">Chọn tỉnh/thành phố</label>
                </div>
                <br>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="image" disabled value="{{ $user->image }}" id="floatingInputGrid" placeholder="name@example.com" />
                            <label for="floatingInputGrid">Link Ảnh Đại Diện</label>
                        </div>
                        <!-- <a href="https://postimg.cc/files">Cách lấy link.</a> -->
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" disabled name="role" aria-label="Floating label select example">
                                <option selected>
                                    @switch($user->role)
                                    @case(1)
                                    <span class="badge bg-primary">Admin</span>
                                    @break
                                    @case(2)
                                    <span class="badge bg-secondary">Quản Lý</span>
                                    @break
                                    @case(3)
                                    <span class="badge bg-success">Giảng Viên</span>
                                    @break
                                    @case(4)
                                    <span class="badge bg-danger">Cán Bộ Lớp</span>
                                    @break
                                    @case(5)
                                    <span class="badge bg-warning">Sinh Viên</span>
                                    @break
                                    @default
                                    <span class="badge bg-info">Không có quyền</span>
                                    @endswitch
                                </option>
                                <!-- <option value="1">Admin</option>
                                <option value="2">Quản Lý</option>
                                <option value="3">Giảng Viên</option>
                                <option value="4">Cán Bộ Lớp</option>
                                <option value="5">Sinh Viên</option> -->
                            </select>

                            <label for="floatingSelectGrid">Phân Quyền</label>
                        </div>
                    </div>
                    <!-- Single Date Picker -->
                    <!-- <div class="mb-3">
                        <label class="form-label">Ngày Tháng Năm Sinh</label>
                        <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                    </div> -->
                </div>
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