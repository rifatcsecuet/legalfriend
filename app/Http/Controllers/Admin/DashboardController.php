<?php

namespace App\Http\Controllers\Admin;

use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
{
    // Code Start From Here
    public function index()
    {        
        return view('backend.admin.dashboard');
    }
}
