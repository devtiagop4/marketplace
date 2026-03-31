<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard()

{
return view('admin/dashboard');
}
public function login(){
    return view('admin/auth/login');
}
public function forgot(){
    return view('admin/auth/forgot-password');
}
}
