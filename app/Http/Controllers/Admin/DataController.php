<?php

namespace App\Http\Controllers\Admin;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
        $datas=Data::latest()->paginate(25);
        return view('Admin.datas.index',compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.datas.create');
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
        $data=Data::create($request->all());

        return redirect(route('datas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $Data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $Data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Data::find($id);
        return view('Admin.datas.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $Data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Data $data)
    {
        //
//        $Data=Data::find($id);
//        $Data->destData = $request->get('destData');
//        $Data->title = $request->get('title');
//        $Data->Data = $request->get('Data');
//        $Data->save();
        $data-> update($request -> all());
        return redirect(route('datas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $Data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Data::find($id)->delete();

        return redirect(route('datas.index'));
    }
    public function search(Request $request){
        //dd($request);
        $search=$request->search;
        return redirect(route('datas.show.search',$search));
    }
    public function showSearch($q){
        if($q){
            $datas=Data::where('destlink','like','%'.$q.'%')->orwhere('link','like','%'.$q.'%')->orwhere('titlexpath','like','%'.$q.'%')->latest()->paginate(25);
            return view('Admin.datas.index',compact('datas'));

        }
        $datas=Data::latest()->paginate(25);
        return view('Admin.datas.index',compact('datas'));
    }
}
