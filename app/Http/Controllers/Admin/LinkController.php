<?php

namespace App\Http\Controllers\Admin;

use App\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $links=Link::latest()->paginate(25);
        return view('Admin.links.index',compact('links'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.links.create');
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
        $link=Link::create($request->all());

        return redirect(route('links.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link=Link::find($id);
        return view('Admin.links.edit',compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Link $link)
    {
        //
//        $link=Link::find($id);
//        $link->destlink = $request->get('destlink');
//        $link->title = $request->get('title');
//        $link->link = $request->get('link');
//        $link->save();
        $link-> update($request -> all());
        return redirect(route('links.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $link=Link::find($id)->delete();

        return redirect(route('links.index'));
    }

    public function search(Request $request){
        //dd($request);
        $search=$request->search;
        return redirect(route('links.show.search',$search));
    }
    public function showSearch($q){
        if($q){
            $links=Link::where('destlink','like','%'.$q.'%')->orwhere('link','like','%'.$q.'%')->latest()->paginate(25);
            return view('Admin.links.index',compact('links'));

        }
        $links=Link::latest()->paginate(25);
        return view('Admin.links.index',compact('links'));
    }
}
