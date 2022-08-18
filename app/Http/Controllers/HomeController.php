<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_admin == 1){
            return redirect()->route('user.order');
        }
        // $pizzas = Pizza::latest()->get();
        // return view('frontpage',compact('pizzas'));
        $orders = Order::latest()->where('user_id',auth()->user()->id)->get();
        return view('home',compact('orders'));
    }
}
