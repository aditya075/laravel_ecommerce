<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Pelanggan;
use DB;
use Auth;

class PelangganController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = Admin::where('id',$id)->get();
        $pelanggan = Pelanggan::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.pelanggan.index')->with('user',$user)->with('pelanggan',$pelanggan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $user = Admin::where('id',$id)->get();

        return view('admin.pelanggan.create')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan =  new \App\Pelanggan;
        $pelanggan->name = $request->get('name');
        $pelanggan->phone = $request->get('phone');
        $pelanggan->qty = $request->get('qty');
        $pelanggan->address = $request->get('address');
        $pelanggan->laundry_type = $request->get('laundry_type');
        $pelanggan->status = $request->get('status');
        $pelanggan->price = $request->get('price');
        $pelanggan->date = $request->get('date');
        $pelanggan->save();


        return redirect('pelanggan')->with('success','Article add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $user_id = Auth::id();
        $user = Admin::where('id',$user_id)->get();
        $pelanggan = Pelanggan::find($id);

        return view('admin.pelanggan.edit',compact('pelanggan','id'))->with('user',$user);
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
        $pelanggan = Pelanggan::find($id);

        $pelanggan->name = $request->get('name');
        $pelanggan->phone = $request->get('phone');
        $pelanggan->address = $request->get('address');
        $pelanggan->qty = $request->get('qty');
        $pelanggan->laundry_type = $request->get('laundry_type');
        $pelanggan->status = $request->get('status');
        $pelanggan->price = $request->get('price');
        $pelanggan->date = $request->get('date');
        $pelanggan->save();

        return redirect('/pelanggan')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function invoice($id){
        $user_id = Auth::id();
        $user = Admin::where('id',$user_id)->get();
        $pelanggan = Pelanggan::find($id);

        return view('admin.pelanggan.invoice',compact('pelanggan','id'))->with('user',$user);
    }

    public function print($id){
        $user_id = Auth::id();
        $user = Admin::where('id',$user_id)->get();
        $pelanggan = Pelanggan::find($id);

        return view('admin.pelanggan.print',compact('pelanggan','id'))->with('user',$user);
    }
}
