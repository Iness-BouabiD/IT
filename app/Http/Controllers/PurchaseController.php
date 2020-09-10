<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Purchase;
use Illuminate\Support\Facades\DB;

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
        $users = DB::table('purchases')->paginate(2);
        return view('Purchase',['purchases'=>$users,'layout'=>'index']);
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

     public function ticket()
    {
        $purchases=Purchase::all();
        return view('Purchase',['purchases'=>$purchases,'layout'=>'ticket']);
    }



    /**
     * Store a newly created resource in storquantite.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Purchase =new Purchase();
        $Purchase->categorie=$request->input('categorie');
        $Purchase->nom=$request->input('nom');
        $Purchase->prix=$request->input('prix');
        //$Purchase->quantite=$request->input('quantite');
        $Purchase->description=$request->input('description');
        $Purchase->lienvideo=$request->input('lienvideo');
        $Purchase->lienimg=$request->input('lienimg');
        $Purchase->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categorie)
    {
        //$Purchase=Purchase::where($categorie);
        $purchases=Purchase::where('categorie', 'like', '%' . $categorie . '%')->paginate(2);
        //$purchases=Purchase::all();
        return view('Purchase',['purchases'=>$purchases,'layout'=>'show']);
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
     * Update the specified resource in storquantite.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Purchase=Purchase::find($id);
        $Purchase->categorie=$request->input('categorie');
        $Purchase->nom=$request->input('nom');
        $Purchase->prix=$request->input('prix');
       // $Purchase->quantite=$request->input('quantite');
        $Purchase->description=$request->input('description');
        $Purchase->lienimg=$request->input('lienimg');
        $Purchase->lienvideo=$request->input('lienvideo');
        $Purchase->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storquantite.
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
