<?php

namespace App\Http\Controllers\Admin;

use App\LevelTicket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $leveltickets=LevelTicket::latest()->paginate(25);
        return view('Admin.leveltickets.index',compact('leveltickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.leveltickets.create');
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

        $levelticket=LevelTicket::create($request->all());

        return redirect(route('leveltickets.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LevelTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function show(LevelTicket $levelticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LevelTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(LevelTicket $levelticket)
    {
        //
        return view('Admin.leveltickets.edit',compact('levelticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LevelTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LevelTicket $levelticket)
    {
        //
        $this->validate($request,[

            'name'=>'required',
            'label'=>'required'

        ]);

        $levelticket->update($request->all());

        return redirect(route('leveltickets.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LevelTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(LevelTicket $levelticket)
    {
        //
        $levelticket->delete();
        return back();
    }
}
