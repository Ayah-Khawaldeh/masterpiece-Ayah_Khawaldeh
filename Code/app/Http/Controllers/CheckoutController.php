<?php

namespace App\Http\Controllers;

use App\Checkout;
use App\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Cart::truncate();
        return view('public_theme.check', [
          
           
        ]);
    }

    public function adminshow()
    {
        $check=Checkout::all();
        return view('dash_theme.orders', [
           "x"=>$check
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateRequest($request)
    {
        $request->validate([
            
            "FirstName"    => 'required',
            "LastName"     => 'required',
            "Country"      =>'required',
            "City"         =>'required',
            "email"        => 'required',
            "phone"        => 'required',
            "Address"      => 'required',
            "payment"      =>'required',
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        Checkout::create([
            "user_id"      => auth()->user()->id,
            "FirstName"    => $request->FirstName,
            "LastName"     => $request->LastName,
            "Country"      =>$request->Country,
            "City"         =>$request->City,
            "email"        => $request->email,
            "phone"        => $request->phone,
            "Address"      => $request->Address,
            "payment"      => $request->payment="Handcash",
          
           
        ]);
    //    Cart::where("user_id", "user_id")->delete();
        // return "done";
        return redirect("/check");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
