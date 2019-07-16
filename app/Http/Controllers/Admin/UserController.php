<?php
namespace App\Http\Controllers\Admin;
use App\BodyTicket;
use App\File;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public  function panel(){
        //return view('Admin.dashboard');
        $user=Auth::user();

        return view('Admin.userprofile.index',compact('user'));
    }
    public function index(){
        $users=User::latest()->paginate(25);

        return view('Admin.users.index',compact('users'));
    }

    public  function destroy(User $user){
        $user->delete();
            return back();
    }

    public function edit(User $user)
    {

        return view('Admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'role_id'=> 'required',
            'name'=>'required',
            'email'=>'required',
            'family' => 'required',
            'mobile' => 'required',


        ]);

        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->family=$request->get('family');
        $user->mobile=$request->get('mobile');
        $user->save();
        $user->roles()->sync($request->input('role_id'));
        return redirect(route('admin.users.index'));
    }

    public  function userticket(){
        $user_id=Auth::user()->id;
        $user=User::find($user_id);
       // dd($username);
        $tickets=$user->tickets(Auth::user()->username);
       // dd($tickets);
        return view('Admin.usertickets.index',compact('tickets'));
    }
    public function userticketanswer($ticket_id)
    {


        $ticket= Ticket::find($ticket_id);
       // dd($tickets);
        return view('Admin.usertickets.edit', compact('ticket'));
    }
    public function userstoreanswer(Request $request, Ticket $ticket){
        $this->validate($request,[
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8048',
            'body'=>'required',
        ]);
        $ticket=Ticket::find($request->id);
        $ticket->status_id=1;
        $ticket->save();
        $body=new BodyTicket;
        $body->body=$request->body;
        $body->ticket_id=$request->id;
        if(Auth::check()){
            $body->user_id=Auth::user()->id;
        }
        $body->save();
        if($request->file)
        {
            $fileName = 'body_'.$body->id.'_ticket_'.$ticket->id.'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('fileTicket'), $fileName);
            $file=new File;
            $file->url='fileTicket/'.$fileName;
            $file->ticket_id=$ticket->id;
            $file->save();
        }
        return redirect(route('users.userticket.index'));

    }




    public function userprofile(){
        $user=Auth::user();

        return view('Admin.userprofile.index',compact('user'));
    }

    public function userprofileedit(){
        $user=Auth::user();

        return view('Admin.userprofile.edit',compact('user'));

    }

    public function userprofileupdate(Request $request, User $user){
        $this->validate($request,[

            'name'=>'required',
            'email'=>'required',
            'family' => 'required',
            'mobile' => 'required',

        ]);

        $user=Auth::user();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->family=$request->get('family');
        $user->mobile=$request->get('mobile');
        $user->save();

        return redirect(route('users.userprofile.index'));

    }
}
