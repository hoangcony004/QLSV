<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    public function error() {
        return view('apps.error.error');
    }

    public function error404() {
        return view('apps.error.error404');
    }

    public function error500() {
        return view('apps.error.error500');
    }
}
