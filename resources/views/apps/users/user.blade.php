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
    <!-- goi menu -->
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
            <h4 class="page-title">Người dùng</h4>
        </div>
    </div>
    <!-- Thông báo lỗi -->
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif

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
                                    <option value="email">Email</option>
                                    <option value="phone_number">Số điện thoại</option>
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
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <!-- <th>Giới Tính</th> -->
                                <th>Chức Vụ</th>
                                <!-- <th>Địa Chỉ</th> -->
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
                                        <a href="{{ route('showuser', ['id' => $user->id]) }}" class="text-body">{{$user->name}}</a>
                                        <!-- <br>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span> -->
                                    </p>
                                </td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>
                                <!-- <td>
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
                                </td> -->

                                <td>
                                    @switch($user->role)
                                    @case(1)
                                    <span class="badge bg-primary">Admin1</span>
                                    @break
                                    @case(2)
                                    <span class="badge bg-secondary">Admin2</span>
                                    @break
                                    @case(3)
                                    <span class="badge bg-success">Admin3</span>
                                    @break
                                    @case(4)
                                    <span class="badge bg-danger">Admin4</span>
                                    @break
                                    @case(5)
                                    <span class="badge bg-warning">User</span>
                                    @break
                                    @default
                                    <span class="badge bg-info">Không có quyền</span>
                                    @endswitch
                                </td>


                                <!-- <td>
                                    {{$user->address}}
                                </td> -->

                                <td>
                                    {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}
                                </td>
                                <!-- <td>
                                    <span class="badge bg-success">Active</span>
                                </td> -->

                                <td class="table-action">
                                    <a href="{{ route('showuser', ['id' => $user->id]) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="{{route('edituser', ['id' => $user->id]) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="{{route('deluser', ['id' => $user->id]) }}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
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

@section('style')

@endsection

@section('script')

@endsection