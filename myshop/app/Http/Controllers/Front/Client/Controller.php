<?php

namespace App\Http\Controllers\Front\Client;

use App\Cities;
use App\Clients;
use App\Countries;
use App\Http\Controllers\Controller as BaseController;
use App\Shops;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $clients=Clients::with('shops')
            ->select('city_id','shop_id','name','last_name','email','tel','place','count')
            ->leftJoin('city','=','');
        return  view('Back.Clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {   $db=Shops::findOrFail($request->id);
        $count=$request->count;
        $countries=Countries::all();
        return view('Front.Categories.contact',compact('countries','db','count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $db=New Clients([
           'shop_id'=>$request->shop_id,
            'city_id'=>$request->city_id,
            'place'=>$request->place,
            'count'=>$request->count,
            'status'=>'1',
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'tel'=>$request->tel,
        ]);
        $db->save();
        return  redirect()->route('myShop')->with('success','Jonatildi');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function select2(Request $request){
        $cities=Cities::where('country_id','=',$request->id)->get();

        $data='';
        foreach ($cities as $city):
            $data.= '<option'.' '.'value='.$city->id.' '.'>'.$city->name['uz'].'</option>';
        endforeach;
        $success=$data;
        return response()->json(['success'=>$success]);
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
