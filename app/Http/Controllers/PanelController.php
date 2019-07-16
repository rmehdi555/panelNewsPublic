<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PanelController extends Controller
{
    //

    public function index(){
        if (Auth::check()) {
            $user=Auth::User();
            return view('Admin.dashboard',compact('user'));
        }
        return view('welcome')->with('error', 'دسترسی به این صفحه برای کاربران میباشد ابتدا وارد شوید');

    }
    public function admin(){

        $users=User::all();
        return view('Admin.admin.index',compact('users'));
    }
    public function user(){

        return view('Admin.user.index');
    }
    public function edituser($id){
        $user=User::find($id);
        return view('Admin.admin.edit',compact('user'));
    }
    public function updateuser(Request $request, $id){
        $user=User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');

        $user->save();
        return Redirect::back();
    }
    public function destroyuser($id){
        $user=User::find($id)->delete();
        return redirect('/');
    }
}
