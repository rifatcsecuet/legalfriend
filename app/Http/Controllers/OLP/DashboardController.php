<?php

namespace App\Http\Controllers\OLP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\SiteSettings;
use App\User;
use Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = User::find(Auth::id());
       return view('backend.multi-dashboard.olp._home_olp',compact('data'));
    }
}
