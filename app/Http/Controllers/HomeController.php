<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

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
    {
//        return Permission::create([
//            'name'=>'delete-user',
//            'label'=>'حذف یوزر'
//        ]);
       // dd(auth()->user()->hasRole(Permission::whereName('delete-user')->first()->roles));
       // return Role::whereName('manager')->first()->permissions()->sync([1,2]);
      //  return view('home');
    }
}
