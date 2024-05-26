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
<div class="container"><br><br>
    <h1 style="text-align: center; display: block;">Kết quả tìm kiếm cho: "{{ $query }}"</h1>
    @if (count($results) > 0)
    <ul style="font-size: 24px;">
        @foreach ($results as $name => $link)
        <li><a href="{{ $link }}">{{ $name }}</a></li>
        @endforeach
    </ul>
    @else
    <!-- <p>Không tìm thấy chức năng nào khớp với từ khóa.</p> -->
    <br><br>
    <h3 style="color: red;">Không tìm thấy chức năng nào khớp với từ khóa.</h3>
    @endif
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