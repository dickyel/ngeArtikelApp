<?php

namespace App\Http\Controllers;

use App\ArticlePackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = ArticlePackage::get();
        return view('pages.home',[
            'items'=>$items
        ]);
    }
}
