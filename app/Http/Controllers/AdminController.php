<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['showAdminDashboard']);
    }
    


   
    public function showAdminLogin()
    {
    	return view('admin.login');
    }

    public function showAdminRegister()
    {
    	return view('admin.register');
    }

    public function showAdminDashboard()
    {
    	return view('admin.dashboard');
    }
}
