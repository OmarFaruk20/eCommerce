<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    public function login(Request $request){
    	$user =  User::where(['email'=>$request->email])->first();

    	if(!$user || !Hash::check($request->password, $user->password)){
    		return "Username and Password is not Match!";
    	}else{
    		$request->session()->put('user', $user);
    		return redirect('/');
    	}
    }
}
