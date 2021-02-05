<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class LoginController extends Controller
{
    public function index(){
    	return view('Login.index');
    }

     public function verify(Request $request){
    	$user = DB::table('users')
    		->where('email', $request->uemail)
    		->where('password', $request->pass)
    		->first();


    	if($user != null)
    	{
            

    		if($user->user_type_id==1)
    		{
               
    			$request->session()->put('user',$user);
    			return redirect()->route('Admin.index');
    		}
            else if($user->type==2)
            {
               
            }

    
    	}
    	else
    	{
    		//$request->session()->flash('username', $request->uname);
    		$request->session()->flash('message', 'Invalid username or password');
    		
    		return redirect()->route('login.index');
    	}
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login.index');
       
    }



}
