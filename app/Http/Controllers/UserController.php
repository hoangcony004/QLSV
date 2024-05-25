<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $users = User::paginate(5);

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

        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $r_password = $request->input('r_password');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $image = $request->input('image');
        $role = $request->input('role');

        // Validate dữ liệu đầu vào
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'r_password' => 'required|string|min:8|confirmed',
        //     'gender' => 'required|integer',
        //     'phone_number' => 'required|string|max:50',
        //     'address' => 'required|string|max:255',
        //     'image' => 'nullable|string|max:255',
        //     'role' => 'required|integer',
        // ]);
        $password = Hash::make($password);

        // Tạo mới user
        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = $password; // Mật khẩu đã được mã hóa
        $user->phone_number = $phone_number;
        $user->address = $address;
        $user->gender = $gender;
        $user->image = $image;
        $user->role = $role;

        // Lưu vào cơ sở dữ liệu
        $user->save();
        return redirect()->route('user')->with('success', 'Người dùng đã được thêm thành công.');
    }

    public function edituser($id)
    {
        $this->title = 'Sửa thông tin';

        // Truy vấn cơ sở dữ liệu để lấy thông tin của người dùng dựa trên ID
        $user = User::find($id);

        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            abort(404); // Nếu không tồn tại, hiển thị trang 404
        }

        // Truyền thông tin của người dùng tới view để hiển thị
        return view('apps.users.edituser', ['user' => $user])->with('title', $this->title);
    }

    public function postedituser(Request $request, $id)
    {
        // Xử lý các thay đổi của người dùng tại đây, ví dụ:
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Cập nhật các trường khác tương tự

        // Lưu thay đổi vào cơ sở dữ liệu
        $user->save();

        // Sau khi cập nhật, chuyển hướng người dùng đến trang hiển thị thông tin người dùng
        return redirect()->route('user')->with('success', 'Cập nhật thông tin người dùng thành công');
    }

    public function showuser($id)
    {

        $this->title = 'Xem thông tin';

        // Truy vấn cơ sở dữ liệu để lấy thông tin của người dùng dựa trên ID
        $user = User::find($id);

        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            abort(404); // Nếu không tồn tại, hiển thị trang 404
        }

        // Truyền thông tin của người dùng tới view để hiển thị
        return view('apps.users.showuser', ['user' => $user])->with('title', $this->title);
    }
    public function deluser($id)
    {
        $this->title = 'Xóa thông tin';

        // Truy vấn cơ sở dữ liệu để lấy thông tin của người dùng dựa trên ID
        $user = User::find($id);

        // Kiểm tra xem người dùng có tồn tại không
        if (!$user) {
            abort(404); // Nếu không tồn tại, hiển thị trang 404
        }

        // Truyền thông tin của người dùng tới view để hiển thị
        return view('apps.users.deluser', ['user' => $user])->with('title', $this->title);
    }
    public function postdeluser($id)
    {
        // Tìm người dùng theo ID
        $user = User::find($id);

        if ($user) {
            // Xóa người dùng
            $user->delete();
            return redirect()->route('user')->with('success', 'Người dùng đã được xóa thành công.');
        } else {
            return redirect()->route('user')->with('error', 'Người dùng không tồn tại.');
        }
    }
}
