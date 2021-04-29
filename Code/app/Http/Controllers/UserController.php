<?php

namespace App\Http\Controllers;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    
 

    public function show()
    {

        $user= User::all();
        return view('dash_theme.Customers', [
            "user" => $user
        ]);
    }
    public function profile()
    {

        $user= User::all();
        return view('public_theme.Profile', [
            "user" => $user
        ]);
    }



    public function validateRequest($request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required',
        ]);

    }

   

    public function edit($id)
    {
        $useredit =User::where("id", $id)->get()->first();
        return view("public_theme.profile-edit",[
            "useredit" => $useredit
        ]);
    }
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')){

            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/', $filename);
            
        }
      
        user::where("id", $id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => $request->password,
            'phone' =>$request->phone,
            'image' => $filename,
        ]);
        return redirect("/profile");
       


    }


    public function delete($id)
    {
        $user=User ::where("id", $id)->delete();
        return redirect("/Users")->with('status','user is updated');
    }


}
