<?php

namespace App\Http\Controllers\Back\Shops;

use App\Http\Controllers\Controller as BaseController;
use App\Shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
      $shops=Shops::with('category')->orderBy('id','DESC')->paginate(6);
      return  view('Back.Shops.index',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $img=($request->hasFile('img'))?$request->file('img')->store('Back/uploads'):'';

       if ($img==true) {
           $db = new Shops([
               'category_id'=>$request->category_id,
               'name'=>$request->name,
               'body'=>$request->body,
               'img'=>$img,
               'status' => $request->status
           ]);
           $db->save();
           return redirect()->back();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function show(Shops $shops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Shops $shops)
    {
        return  view('Back.Shops.edit',compact('shops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Shops $shops)
    {   $shops=Shops::findOrFail($request->id);
        if (($request->hasFile('img'))) {$img = $request->file('img')->store('Back/uploads');
            File::delete($shops->img);
        }
        else {
            $img = $shops->img;
        }
        $shops->update([
           'name'=>$request->name,
           'category_id'=>$request->category_id,
           'body'=>$request->body,
           'img'=>$img,
           'status'=>$request->status,
        ]);
     return   redirect()->route('shops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Shops $shops)
    {
        File::delete($shops->img);
           $shops->delete();
           return back()->with('success','Delete');
    }
}
