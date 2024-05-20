<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $title;

    public function index(Request $request)
    {
    }

    public function getLogin()
    {
        // khai báo title
        $this->title = 'Form Login';

        // chuyển hướng và truyền thông báo xuống
        return view('apps.auth.login')->with('title', $this->title);
    }

    public function postLogin(Request $request)
    {
        // kiểm duyệt dữ liệu
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {

            // Lấy thông tin người dùng thành công
            $user = Auth::user();
            $id = $user->id;
            $name = $user->name;

            // Lưu id và name vào session
            $request->session()->put('user_id', $id);
            $request->session()->put('user_name', $name);

            // Lấy thông tin role của người dùng
            $role = $user->role;
            switch ($role) {
                case '1':
                    # code...
                    // Lấy URL mà người dùng đã cố gắng truy cập trước khi yêu cầu đăng nhập
                    $url = $request->session()->pull('url.intended', '/apps/dashboard');

                    // Chuyển hướng người dùng đến URL đã lưu hoặc URL mặc định nếu không có URL được lưu
                    return redirect()->intended($url)->withSuccess('Signed in');
                    break;
                case '2':
                    # code...
                    // Lấy URL mà người dùng đã cố gắng truy cập trước khi yêu cầu đăng nhập
                    $url = $request->session()->pull('url.intended', '/apps/dashboard');

                    // Chuyển hướng người dùng đến URL đã lưu hoặc URL mặc định nếu không có URL được lưu
                    return redirect()->intended($url)->withSuccess('Signed in');
                    break;
                case '3':
                    # code...
                    // Lấy URL mà người dùng đã cố gắng truy cập trước khi yêu cầu đăng nhập
                    $url = $request->session()->pull('url.intended', '/apps/dashboard');

                    // Chuyển hướng người dùng đến URL đã lưu hoặc URL mặc định nếu không có URL được lưu
                    return redirect()->intended($url)->withSuccess('Signed in');
                    break;
                case '4':
                    # code...
                    // Lấy URL mà người dùng đã cố gắng truy cập trước khi yêu cầu đăng nhập
                    $url = $request->session()->pull('url.intended', '/apps/hoc-sinh/thong-tin-hoc-sinh');

                    // Chuyển hướng người dùng đến URL đã lưu hoặc URL mặc định nếu không có URL được lưu
                    return redirect()->intended($url)->withSuccess('Signed in');
                    break;

                case '5':
                    # code...
                    // Lấy URL mà người dùng đã cố gắng truy cập trước khi yêu cầu đăng nhập
                    $url = $request->session()->pull('url.intended', '/apps/hoc-sinh/thong-tin-hoc-sinh');

                    // Chuyển hướng người dùng đến URL đã lưu hoặc URL mặc định nếu không có URL được lưu
                    return redirect()->intended($url)->withSuccess('Signed in');
                    break;
                default:
                    break;
            }



            // return 'Đăng nhập thành công';
            // return redirect()->route('dashboard')
            //     ->withSuccess('Đăng nhập lại.');
        } else {
            return redirect("login")->withSuccess('Tên đăng nhập hoặc mật khẩu không đúng.');
        }
    }

    public function logout()
    {
        Auth::logout(); // Đăng xuất người dùng

        // truyền thông báo xuống
        session()->flash('success', 'Đăng xuất thành công.');
        return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập
    }

}
