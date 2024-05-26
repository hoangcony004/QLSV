<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;

class ClassController extends Controller
{
    //
    protected $title;

    public function index()
    {

        $this->title = 'Bảng Class';


        // $classes = ClassModel::all();
        $classes = ClassModel::paginate(5);

        return view('apps.class.class', compact('classes'))->with('title', $this->title);
        // return "ijdsgisaiufasjhhgusf";
    }

    public function searchclass(Request $request)
    {
        $this->title = 'Tìm kiếm lớp học.';

        // Lấy dữ liệu từ form
        $criteria = $request->input('criteria');
        $query = $request->input('query');

        // Tìm kiếm lớp học dựa trên dữ liệu từ form
        $classes = ClassModel::where($criteria, 'LIKE', '%' . $query . '%')->paginate(5);

        if ($classes->isEmpty()) {
            // Nếu không tìm thấy kết quả, quay lại trang trước đó và hiển thị thông báo lỗi
            return redirect()->back()->withInput()->with([
                'title' => $this->title,
                'danger' => 'Không tìm thấy kết quả nào trùng khớp với từ khóa.'
            ]);
        } else {
            session()->flash('success', 'Đã tìm thấy thành công.');
            // Nếu tìm thấy kết quả, hiển thị trang kết quả tìm kiếm
            return view('apps.class.class', compact('classes'))->with('title', $this->title);
        }
    }

    public function addclass()
    {
        $this->title = 'Thêm Lớp Học Mới';


        return view('apps.class.addclass')->with('title', $this->title);
    }

    public function postaddclass(Request $request)
    {

        $name = $request->input('name');


        $class = new ClassModel();
        $class->name = $name;

        $class->save();
        return redirect()->route('class')->with('success', 'Lớp học đã được thêm thành công.');
    }

    public function delclass($id)
    {

        $this->title = 'Xóa Lớp học';

        $class = ClassModel::find($id);

        return view('apps.class.delclass', ['class' => $class])->with('title', $this->title);
    }

    public function postdelclass($id)
    {
        // Lấy thông tin lớp học từ ID
        $class = ClassModel::find($id);

        if (!$class) {
            return redirect()->back()->with('error', 'Không tìm thấy lớp học.');
        }

        // Xóa lớp học (hoặc thực hiện các thao tác khác cần thiết)
        $class->delete();

        return redirect()->route('class')->with('success', 'Lớp học đã được xóa thành công.');
    }
}
