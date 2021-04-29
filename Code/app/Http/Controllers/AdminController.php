<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin= Admin::all();
        return view('dash_theme.Mange_Admins', [
            "admin" => $admin
        ]);
    }
    public function index1()
    {
        $admin= Admin::all();
        return view('dash_theme.Mange_Admins', [
            "admin" => $admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function validateRequest($request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required',
        ]);

    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        }
        Admin::create([
            "name"    => $request->name,
            "email"     => $request->email,
            "password"   => $request->password,
            "image"   => $filename,
        ]);
        return redirect("/Mange Admins");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminedit =Admin::where("id", $id)->get()->first();
        return view("dash_theme.Edit_Admins",[
            "adminedit" => $adminedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        }
            Admin::where("id",$id)->update([
                "name"     => $request->name,
                "email"    => $request->email,
                "password" => $request->password,
                "image"   => $filename,

        ]);


        return redirect("/Mange Admins");
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin= Admin::where("id", $id)->delete();
            return redirect("/Mange Admins");
    }

}
