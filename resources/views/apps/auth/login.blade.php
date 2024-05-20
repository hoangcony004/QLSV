<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/formLogin.css') }}">
</head>

<body>
    <!-- Thông báo lỗi -->
    <!-- @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @elseif(session()->has('success'))
    <div class="alert alert-success" style="color: red;">
        {{ session('success') }}
    </div>
    @endif -->


    <div class="wrapper">
        <div class="title">
            Welcome
        </div>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="field">
                <input type="text" name="username" value="{{ old('username') }}" required autofocus>
                <label>Tên đăng nhập</label>
            </div>



            <div class="field">
                <input type="password" name="password" required>
                <label>Mật khẩu</label>
            </div>

            <!-- Thông báo lỗi -->
            @if(session()->has('success'))
            <div class="alert alert-success" style="color: red; font-size: 14px; margin-top: 10px; text-align: center;">
                {{ session('success') }}
            </div>
            @endif

            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Ghi nhớ tôi</label>
                </div>
            </div>

            <div>
                <a style="color: #262626; text-decoration: none;" href="#">
                    Quên mật khẩu.
                </a>
            </div>
            <div class="field">
                <input type="submit" value="Đăng nhập">
            </div>
        </form>
    </div>
</body>

</html>