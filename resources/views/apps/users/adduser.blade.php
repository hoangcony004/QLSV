@extends('layouts.client')
@section('slidebar')
<!-- LOGO -->
<a href="" class="logo text-center logo-light">
    <span class="logo-lg">
        <img src="{{ asset('clients/assets/images/logo.png') }}" alt="" height="16">
    </span>
    <span class="logo-sm">
        <img src="{{ asset('clients/assets/images/logo_sm.png') }}" alt="" height="16">
    </span>
</a>

<!-- LOGO -->
<a href="index.html" class="logo text-center logo-dark">
    <span class="logo-lg">
        <img src="{{ asset('clients/assets/images/logo-dark.png') }}" alt="" height="16">
    </span>
    <span class="logo-sm">
        <img src="{{ asset('clients/assets/images/logo_sm_dark.png') }}" alt="" height="16">
    </span>
</a>

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
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
                <input type="text" name="search" class="form-control dropdown-toggle" placeholder="Tìm kiếm..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </form>

        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-notes font-16 me-1"></i>
                <span>Báo cáo học sinh</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-life-ring font-16 me-1"></i>
                <span>Bạn cần hỗ trợ?</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-cog font-16 me-1"></i>
                <span>Đổi mật khẩu</span>
            </a>
        </div>
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
            <h4 class="page-title">Thêm người dùng</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <form action="{{ route('user.adduser') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Họ và Tên</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Tên Đăng Nhập</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Mật Khẩu</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" name="r_password" id="floatingPassword" placeholder="Password" />
                    <label for="floatingPassword">Nhập Lại Mật khẩu</label>
                </div> <br>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="phone_number" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Số điện thoại</label>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>

                <!-- <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div> -->

            </div>
            <div class="col-6">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="gender" aria-label="Floating label select example">
                        <option selected>Giới Tính</option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                    </select>
                    <label for="floatingSelect">Chọn Giới Tính</label>
                </div><br>

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="address" aria-label="Floating label select example">
                        <option selected>Vui Lòng Chọn</option>
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
                            <input type="text" class="form-control" name="image" id="floatingInputGrid" placeholder="name@example.com" />
                            <label for="floatingInputGrid">Link Ảnh Đại Diện</label>
                        </div>
                        <a href="https://postimg.cc/files">Cách lấy link.</a>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" name="role" aria-label="Floating label select example">
                                <option selected>Chọn Chức Vụ</option>
                                <option value="1">Admin</option>
                                <option value="2">Quản Lý</option>
                                <option value="3">Giảng Viên</option>
                                <option value="4">Cán Bộ Lớp</option>
                                <option value="5">Sinh Viên</option>
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
        <div class="row">
            <div class="col-md-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Hyper - Coderthemes.com
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection

@section('rightslide')
<div class="end-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="end-bar-toggle float-end">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
    </div>

    <div class="rightbar-content h-100" data-simplebar="">

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
            </div>

            <!-- Settings -->
            <h5 class="mt-3">Color Scheme</h5>
            <hr class="mt-1">

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                <label class="form-check-label" for="light-mode-check">Light Mode</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
            </div>


            <!-- Width -->
            <h5 class="mt-4">Width</h5>
            <hr class="mt-1">
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                <label class="form-check-label" for="fluid-check">Fluid</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                <label class="form-check-label" for="boxed-check">Boxed</label>
            </div>


            <!-- Left Sidebar-->
            <h5 class="mt-4">Left Sidebar</h5>
            <hr class="mt-1">
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                <label class="form-check-label" for="default-check">Default</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                <label class="form-check-label" for="light-check">Light</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                <label class="form-check-label" for="dark-check">Dark</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                <label class="form-check-label" for="fixed-check">Fixed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                <label class="form-check-label" for="condensed-check">Condensed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                <label class="form-check-label" for="scrollable-check">Scrollable</label>
            </div>

            <div class="d-grid mt-4">
                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
            </div>
        </div> <!-- end padding-->

    </div>
</div>

<div class="rightbar-overlay"></div>
@endsection