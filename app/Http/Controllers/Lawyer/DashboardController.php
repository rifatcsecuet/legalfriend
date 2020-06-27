<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\SiteSettings;
use App\User;
use App\Lawyer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
      //  dashboard for Lawyer

      public function index()
      {    
        $data = User::find(Auth::id());
        return view('backend.multi-dashboard.lawyer._home_lawyer', compact('data'));
        
      }
  
}
