<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Hash;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function page(){
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin',
        //     'password' => Hash::make('admin'),
        // ]);
        // Auth::logout();
        return view('backend.login');
    }
    function authentic(Request $request)
    {
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        // $request->session->regenerateToken();
        return redirect('/admin/dashboard');
       }
       return back()->withError(['failed'=>"Invalid username/Password!"]);
    }
    
    function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('/adminlogin');
    }
}
