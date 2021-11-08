<?php

namespace App\Http\Controllers;

use App\Models\Sales_Details;
use Illuminate\Http\Request;

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
        // return view('home');
        $salesdetails = Sales_Details::all();
        return view('home', ['salesdetails'=>$salesdetails]);

    }
}
