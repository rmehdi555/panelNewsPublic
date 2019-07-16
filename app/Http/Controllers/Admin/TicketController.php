<?php

namespace App\Http\Controllers\Admin;

use App\BodyTicket;
use App\CategoryTicket;
use App\File;
use App\Http\Controllers\StatusTicketController;
use App\LevelTicket;
use App\StatusTicket;
use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tickets=Ticket::latest()->paginate(25);
        return view('Admin.tickets.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $levels=LevelTicket::all();
        //$statuses=StatusTicket::all();
        $categoryticket=CategoryTicket::all();
        return view('Admin.tickets.create',compact('levels','statuses','categoryticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'name'=>'required',
            'family'=>'required',
            'username'=>'required',
            'mobile'=>'required',
            'category_id'=>'required',
            'level_id'=>'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8048',
            'body'=>'required',

        ]);

        $ticket=new  Ticket;
        $ticket->name=$request->name;
        $ticket->family=$request->family;
        $ticket->username=$request->username;
        $ticket->mobile=$request->mobile;
        $ticket->category_id=$request->category_id;
        $ticket->level_id=$request->level_id;
        $ticket->status_id=1;
        //$ticket->code='code';
        $ticket->save();

        $body=new BodyTicket;
        $body->body=$request->body;
        $body->ticket_id=$ticket->id;
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

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('Admin.tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        $this->validate($request,[

            'name'=>'required',
            'label'=>'required'

        ]);

        $ticket->update($request->all());

        return redirect(route('tickets.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
        $ticket->delete();
        return back();
    }


    public  function answer( $ticket){

        $ticket=Ticket::find($ticket);
        if($ticket->status_id==1)   // if status ticket => new
              $ticket->status_id=2;
        $ticket->save();
        return view('Admin.tickets.answer',compact('ticket'));
    }

    public function storeanswer(Request $request, Ticket $ticket){
        $this->validate($request,[
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8048',
            'body'=>'required',
        ]);
        $ticket=Ticket::find($request->id);
        $ticket->status_id=3;
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
        return redirect(route('tickets.index'));

    }



}
