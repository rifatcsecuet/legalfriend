<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Booking;
use App\ProductBooking;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('backend.multi-dashboard.user._home_user');
    }
}
