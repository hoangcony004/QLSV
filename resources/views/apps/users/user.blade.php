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
    <!-- goi menu -->
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
                <span>Đánh giá giáo viên</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-life-ring font-16 me-1"></i>
                <span>Bạn cần hỗ trợ</span>
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
            <h4 class="page-title">Người dùng</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{route('adduser')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Thêm mới</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                            <form action="{{ route('users.search') }}" method="GET">
                                @csrf
                                <select name="criteria" class="mb-2 me-1">
                                    <option value="id">ID</option>
                                    <option value="name">Họ và Tên</option>
                                    <!-- <option value="class">Lớp</option> -->
                                </select>
                                <input type="search" name="query" placeholder="Tìm kiếm người dùng..." style="outline: none;">
                                <button class="btn-primary" type="submit">Tìm kiếm</button>
                            </form>

                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                        <thead class="table-light">
                            <tr>
                                <th class="all" style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th class="all">Ảnh Đại Diện</th>
                                <th>Họ Và Tên</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Chức Vụ</th>
                                <th>Địa Chỉ</th>
                                <th>Ngày Thêm</th>
                                <th style="width: 85px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{$user->image}}" alt="contact-img" title="contact-img" class="rounded me-3" height="48">

                                </td>
                                <td>
                                    <p class="m-0 d-inline-block align-middle font-16">
                                        <a href="apps-ecommerce-products-details.html" class="text-body">{{$user->name}}</a>
                                        <br>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                    </p>
                                </td>
                                <td>
                                    {{$user->username}}
                                </td>
                                <td>
                                    {{ $user->role_text }}
                                </td>

                                <td>
                                    {{$user->address}}
                                </td>

                                <td>
                                    {{$user->created_at}}
                                </td>
                                <!-- <td>
                                    <span class="badge bg-success">Active</span>
                                </td> -->

                                <td class="table-action">
                                    <a href="{{route('showuser')}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="{{route('edituser')}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="{{route('deluser')}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- Hiển thị link phân trang -->
                    <div class="d-flex justify-content-end">
                        {{ $users->links() }}
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

</div> <!-- container -->
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

@section('style')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
@endsection