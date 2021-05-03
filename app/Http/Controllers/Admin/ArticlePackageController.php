<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticlePackageRequest;
use App\ArticlePackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticlePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ArticlePackage::paginate(4);

        return view('pages.admin.article-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.article-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlePackageRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->title);
        
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );

        ArticlePackage::create($data);

        return redirect()->route('article-package.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ArticlePackage::findOrFail($id);

        return view('pages.admin.article-package.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        $item = ArticlePackage::findOrFail($id);
        $item = update($data);
        
        return redirect()->route('article-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ArticlePackage::findOrFail($id);

        $item->delete();
        return redirect()->route('article-package.index');
    }
}
