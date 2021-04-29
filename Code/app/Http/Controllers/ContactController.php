<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdmin()
    {
        $con= Contact::all();
        return view('dash_theme.Mange_Contact', [
            "con" => $con
        ]);
    }
    public function show()
    { 
        return view('public_theme.Contact_us', [
           
        ]);
    }
    public function thanks()
    {
        return view('public_theme.thanks', [
           
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
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
            'message'  => 'required',
           
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
      
       
                    Contact::create([
                    'name'     =>$request->name,
                    'email'    => $request->email,
                    'phone'    =>$request->phone,
                    'message'  =>$request->message,
               
            ]);
         
                
                return redirect("/thanks");
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    // public function show(contact $contact)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
