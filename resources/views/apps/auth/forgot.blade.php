<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form Design</title>
    <link rel="stylesheet" href="{{ asset('clients/assets/css/formLogin.css') }}">
</head>

<body>
    @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif

    <div class="wrapper">
        <div class="title">
            Quên mật khẩu
        </div>

        <form action="#" method="post">
            @csrf
            <div class="field">
                <input type="text" name="forgotpass" required autofocus>
                <label>Nhập email</label>
            </div>
            <div class="field">
                <input type="submit" value="Gửi yêu cầu">
            </div>
        </form>
    </div>
</body>

</html>