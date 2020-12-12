<?php

namespace App\Http\Controllers\Front\Categories;

use App\Brands;
use App\Categories;
use App\Http\Controllers\Controller as BaseController;
use App\Pays;
use App\Shops;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param $name
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($name)
    {
        $id=Categories::where("name->uz",$name)->get();
        $id=$id[0]->id;
        $models=Shops::with('category')
            ->where('category_id','=',$id)
            ->orderBy('id','DESC')
            ->paginate(12);
        return view('Front.Categories.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Front.Categories.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    public function likes(Request $request){
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id,$slug)
    {
        $brands=Brands::orderBy('id','DESC')->take(5)->get();
        $single=Shops::with('category')->where('id','=',$id)->get();
        return view('Front.Categories.single',compact('single','brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
