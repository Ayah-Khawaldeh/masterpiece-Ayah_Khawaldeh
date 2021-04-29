<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function myProfile()
    {
        return view('public_theme.Profile');

    }
    public function profileUpdate(Request $request, $id)

    {
        // $user_id=Auth::user()->id;
        // $user=User::findOrFail($user_id);

        if ($request->hasFile('image')) {
            // $destination = 'uploads/profile/'.$user->image;
            // if(File::exists($destination)){
            //     File::delete($destination);
            // }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profile/', $filename);

        }


        User::where("id",$id)->update([

            "name"      => $request->name,
            "email"     => $request->email,
            "password"  => $request->password,
            "phone"     => $request->phone,
            "address"   => $request->address,
            "image"     => $filename,

        ]);

           $user->update();
           return Redirect()->back()->with('status','profile updated');
    }

}
