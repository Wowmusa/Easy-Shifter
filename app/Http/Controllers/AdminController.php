<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Order;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Product=Product::count();
        // $Order=Order::count();
        // $User=User::count();
        //dd($Product);
        $Product=DB::table('products')->count();
        $Order= DB::table('orders')->count();
        $User=  DB::table('users')->count();


        return view('admin.home.home',['Product'=>$Product,'Order'=>$Order,'User'=>$User]);
    }
}
