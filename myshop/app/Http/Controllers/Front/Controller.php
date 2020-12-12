<?php

namespace App\Http\Controllers\Front;

use App\Brands;
use App\Http\Controllers\Controller as BaseController;
use App\Pays;
use App\Sliders;
use Illuminate\Http\Request;
use App\Shops;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $sliders=Sliders::all();
        $brands=Brands::orderBy('id','DESC')->take(5)->get();
        $shops=Shops::with('category')->orderBy('id','DESC')->take(8)->get();
        $phones=Shops::with('category')->where('category_id','=','4')->orderBy('id','DESC')->take(8)->get();
        $tvs=Shops::with('category')->where('category_id','=','12')->orderBy('id','DESC')->take(8)->get();
        return  view('Front.index',compact('sliders','shops','phones','tvs','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(12);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
