<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Review;
use App\Product;
use App\SiteSettings;
use Illuminate\Support\Facades\Artisan;


class FrontendController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('indexpage');
    // }

    //  start here
    public function indexpage()
    {
      //  $data = [ ];

        // $reviews = Review::all();
        // $products = Product::paginate(4);;
        // $settings = SiteSettings::find(1);
        //return view('frontend.index', compact('reviews', 'products','settings'));
        return view('frontend.index');
    }

    public function clear ()
    {
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');

        return 'Clear Ok!';
    }

    public function install ()
    {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('storage:link');
        Artisan::call('db:seed');

        return 'Migrate Reset, Storage:Link, DB Seed Done!';
    }
}
