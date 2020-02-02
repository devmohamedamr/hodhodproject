<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{

    // back function to get all orders
    public function index(){

        $orders = DB::table('order')
            ->join('menu', 'menu.id', '=', 'order.menu')
            ->select('order.*', 'menu.menu_title')
            ->where('order',0)
            ->get();
        // $orders = Order::where('order',0)->get();
        return view('back.orders',['orders'=>$orders]);
    }

    public function store(Request $request){


        $validation_result = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'menu' => 'required',
        ]);

            $order = new order();
            $order->user_name = $request->input('name');
            $order->user_email = $request->input('email');
            $order->user_address = $request->input('address');
            $order->user_phone = $request->input('phone');
            $order->service = $request->input('service');
            $order->menu = $request->input('menu');

            $order->save();

            return  redirect()->back();

    }

    public function orderDone($order_id){
        $order  = Order::find($order_id);
        $order->order = 1;
        $order->save();
        return redirect()->back();
    }




}
