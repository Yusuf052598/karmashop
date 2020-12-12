<?php

namespace App\Http\Controllers\Back\Client;

use App\Clients;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class Controller extends  BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $clients=Clients::with('shop')->latest()->paginate(10);
        return  view('Back.Clients.index',compact('clients'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Request $request)
    { $clients=Clients::findOrFail($request->id);
        return view('Back.Clients.edit',compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Clients $clients
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Clients $clients)
    {
        $clients=Clients::findOrFail($request->id);
        $clients->update([
           'status'=>$request->status
        ]);
        return redirect()->route('client')->with('success','update');
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
