<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //

    protected $title;

    public function user(Request $request)
    {
        $this->title = 'Người Dùng';

        // Lưu URL hiện tại vào session
        $request->session()->put('previous_url', url()->previous());

        $user = Auth::user();
        // Kiểm tra vai trò của người dùng
        if ($user->role == 4 || $user->role == 5) {
            return redirect('/error')->withErrors('Bạn không đủ quyền truy cập thông tin này.');
        }

        // Lấy tất cả dữ liệu từ bảng users
        $users = User::paginate(4);

        return view('apps.users.user', compact('users'))->with('title', $this->title);
    }

    public function searchuser(Request $request)
    {

        $this->title = 'Tìm kiếm người dùng.';

        $criteria = $request->input('criteria');
        $query = $request->input('query');

        $users = User::where($criteria, 'LIKE', '%' . $query . '%')->paginate(5);

        return view('apps.users.user', compact('users'))->with('title', $this->title);
    }

    public function adduser()
    {
        $this->title = 'Thêm Người Dùng Mới';
        return view('apps.users.adduser')->with('title', $this->title);
    }

    public function postadduser(Request $request)
    {


        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'required|integer',
        ]);

        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');
        $r_password = $request->input('r_password');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $image = $request->input('image');
        $role = $request->input('role');

        // Thêm logic xử lý (ví dụ: lưu vào cơ sở dữ liệu)
        if ($password === $r_password) {
            $user = new User();
            $user->name = $name;
            $user->username = $username;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->r_password = $r_password;
            $user->gender = $gender;
            $user->address = $address;
            $user->image = $image;
            $user->role = $role;
            $user->$user->save();

            return redirect()->route('user')->with('success', 'Người dùng đã được thêm thành công.');
        } else {
            return redirect()->back()->withErrors('Mật khẩu không khớp.');
        }

        // Xử lý logic với giá trị của gender
        // Ví dụ: lưu vào cơ sở dữ liệu, hiển thị giá trị, v.v.
    }

    public function edituser()
    {
        // return view('apps.edituser');
        return "edit";
    }

    public function showuser()
    {
        // return view('apps.showuser');
        return "show";
    }
    public function deluser()
    {
        // return view('apps.adduser');
        return "delete";
    }
}
