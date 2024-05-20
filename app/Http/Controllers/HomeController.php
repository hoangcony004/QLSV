<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //

    protected $title;

    public function index()
    {
    }

    public function dashboard()
    {
        $this->title = 'Dashboard';
        return view('apps.dashboard')->with('title', $this->title);
    }

    public function thongtin()
    {
        $this->title = 'Thông Tin Học Sinh';


        return view('apps.thongtin')->with('title', $this->title);
    }




}
