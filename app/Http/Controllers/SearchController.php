<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    protected $title;

    public function search(Request $request)
    {

        $this->title = 'Tìm kiếm chức năng';

        $query = $request->input('query');
        $results = [];

        // Giả sử bạn có một mảng chứa các chức năng của trang web
        $functions = [
            'Thêm người dùng' => route('user'),
            'Dashboard'  => route('dashboard'),
            'Bảng người dùng' => route('user'),

            // Thêm các chức năng khác của trang web vào đây
        ];

        // Tìm kiếm các chức năng khớp với từ khóa
        foreach ($functions as $name => $link) {
            if (stripos($name, $query) !== false) {
                $results[$name] = $link;
            }
        }

        return view('apps.search', compact('results', 'query'))->with('title', $this->title);
    }
}
