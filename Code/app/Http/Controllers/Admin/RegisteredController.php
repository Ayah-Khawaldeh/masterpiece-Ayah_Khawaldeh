<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisteredController extends Controller
{
    public function index()
    {

        $user= User::all();
        return view('dash_theme.index') -> with ('users',$user);
    }
}
