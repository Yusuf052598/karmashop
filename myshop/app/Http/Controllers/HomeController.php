<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    //Role::create(['name'=>'a_admin']);
        //$permission=Permission::create(['name'=>'alex_write_two']);
        //auth()->user()->givePermissionTo('alex_write');
         //auth()->user()->assignRole('a_admin');
      //  $role=Role::findById(2);
       //    $role->givePermissionTo($permission);
        //$permission=Permission::findById(1);
        // $role->revokePermissionTo($permission);
        //$permission->removeRole($role);
        //$a=auth()->user()->permissions;
        // dd(json_decode($a));
        //return  User::role('y_admin')->get();
        return view('home');
    }
}
