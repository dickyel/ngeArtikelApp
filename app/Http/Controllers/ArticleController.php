<?php

namespace App\Http\Controllers;

use App\ArticlePackage;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = ArticlePackage::where('slug', $slug)->firstOrFail();
        return view('pages.article',[
            'item' => $item
        ]);
    }
}
