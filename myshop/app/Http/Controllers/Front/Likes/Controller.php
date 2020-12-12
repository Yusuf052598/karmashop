<?php

namespace App\Http\Controllers\Front\Likes;

use App\Http\Controllers\Controller as BaseController;
use App\Likes;
use App\Shops;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {    $auth=auth()->user()->id;
         $values=Likes::where('user_id','=',$auth)->where('shop_id','=',$request->id)->get();


        if($values->isEmpty()){
            $like=New Likes([
                'user_id'=>$auth,
                'shop_id'=>$request->id,
                'likes'=>'active'
            ]);
            $like->save();
            $status='active';
        }

        elseif($values[0]->likes=='active'){
            $like=Likes::where('shop_id','=',$request->id)
                ->where('user_id','=',$auth)
                ->update(['likes'=>'inactive']);

            $status='inactive';
            $news=Shops::findOrFail($request->id);
            $status='inactive';
        }
        elseif($values[0]->likes=='inactive') {
            $like=Likes::where('shop_id','=',$request->id)
                ->where('user_id','=',$auth)
                ->update(['likes'=>'active']);
            $status='active';
        }
        return  response()->json(['success'=>$status]);
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
