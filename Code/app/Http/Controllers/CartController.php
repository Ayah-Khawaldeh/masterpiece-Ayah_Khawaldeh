<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->Carts()->with("product")->get();
        // dd($orders);
        $total = 0;
        foreach($orders as $order){
            $sum = (Int) $order->product->special_price * (Int) $order->product_qty;
            $total = $total + $sum ;
        }
        return view('public_theme.Cart', [
            'x'=>$orders,
            'total' => $total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function  create(Request  $request)
    {
        // dd($request->id);
        Cart::where("user_id", auth()->user()->id)->where("product_id", "!=", null)->get();
        Cart::create(["user_id" => auth()->user()->id,
                      "product_id" => $request->id,
                      "product_qty"=> $request->product_qty]);

        // return "done";
        return redirect("/Cart");
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $orders = auth()->user()->Carts()->with("product")->get();
        // dd($orders);
        $total = 0;
        foreach($orders as $order){
            $sum = (Int) $order->product->special_price * (Int) $order->product_qty;
            $total = $total + $sum ;
        }
        return view('public_theme.Checkout', [
            'x'=>$orders,
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = Cart::where("id", $id)->delete();
        return redirect("/Cart");
    }
}
