<?php

namespace App\Http\Controllers\Admin;

use App\CategoryTicket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorytickets=CategoryTicket::latest()->paginate(25);
        return view('Admin.categorytickets.index',compact('categorytickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.categorytickets.create');
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

        $categoryticket=CategoryTicket::create($request->all());

        return redirect(route('categorytickets.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryTicket $categoryticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryTicket $categoryticket)
    {
        //
        return view('Admin.categorytickets.edit',compact('categoryticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryTicket $categoryticket)
    {
        //
        $this->validate($request,[

            'name'=>'required',
            'label'=>'required'

        ]);

        $categoryticket->update($request->all());

        return redirect(route('categorytickets.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryTicket  $levelTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryTicket $categoryticket)
    {
        //
        $categoryticket->delete();
        return back();
    }
}
