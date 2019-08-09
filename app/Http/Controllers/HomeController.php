<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPemesanan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('user.home');
    }

    public function pemesanan(Request $request)
    {
        $pemesanan = new \App\ModelPemesanan;

        $pemesanan->nama = $request->get('nama');

        return redirect('home');
    }
}
