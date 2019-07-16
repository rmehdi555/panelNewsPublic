<?php

namespace App\Http\Controllers\Admin;

use App\StatusTicket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $statustickets=StatusTicket::latest()->paginate(25);
        return view('Admin.statustickets.index',compact('statustickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.statustickets.create');
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
        $this->validate($request,[

            'name'=>'required',
            'label'=>'required'

        ]);

        $statusticket=StatusTicket::create($request->all());

        return redirect(route('statustickets.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatusTicket  $statusTicket
     * @return \Illuminate\Http\Response
     */
    public function show(StatusTicket $statusticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatusTicket  $statusTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusTicket $statusticket)
    {
        //
        return view('Admin.statustickets.edit',compact('statusticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatusTicket  $statusTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusTicket $statusticket)
    {
        //
        $this->validate($request,[

            'name'=>'required',
            'label'=>'required'

        ]);

        $statusticket->update($request->all());

        return redirect(route('statustickets.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatusTicket  $statusTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusTicket $statusticket)
    {
        //
        $statusticket->delete();
        return back();
    }
}
