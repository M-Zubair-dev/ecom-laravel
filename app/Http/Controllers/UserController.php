<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function login(Request $req){
        $User= User::where(['email'=>$req->email])->first();
        if(!$User || !Hash::check($req->password,$User->password))
        {
            return"Username or password is not matched";
        }else
        {
            $req->session()->put('user',$User);
            return redirect('/');
        }
    }
}
