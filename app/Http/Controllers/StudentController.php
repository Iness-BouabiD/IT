<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases=Purchase::all();
        return view('Purchase',['purchases'=>$purchases,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purchases=Purchase::all();
        return view('Purchase',['purchases'=>$purchases,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Purchase =new Purchase();
        $Purchase->cne=$request->input('cne');
        $Purchase->firstName=$request->input('firstName');
        $Purchase->secondName=$request->input('secondName');
        $Purchase->age=$request->input('age');
        $Purchase->speciality=$request->input('speciality');
        $Purchase->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Purchase=Purchase::find($id);
        $purchases=Purchase::all();
        return view('Purchase',['purchases'=>$purchases,'Purchase'=>$Purchase,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Purchase=Purchase::find($id);
        $purchases=Purchase::all();
        return view('Purchase',['purchases'=>$purchases,'Purchase'=>$Purchase,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Purchase=Purchase::find($id);
        $Purchase->cne=$request->input('cne');
        $Purchase->firstName=$request->input('firstName');
        $Purchase->secondName=$request->input('secondName');
        $Purchase->age=$request->input('age');
        $Purchase->speciality=$request->input('speciality');
        $Purchase->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Purchase=Purchase::find($id);
         $Purchase->delete();
         return redirect('/');
    }
}
