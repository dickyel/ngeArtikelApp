<?php

namespace App\Http\Controllers\Admin;

use App\ArticlePackage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'article_package' => ArticlePackage::count()
        ]);
    }
}
