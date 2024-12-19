<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    function login(Request $req)
    {
 
    $user = User::where(['email' => $req->email])->first();

    if (!$user || !Hash::check($req->password, $user->password)) {
       //Alert::warning('Incorrect Email or Password','please enter the correct one and try again');
        return redirect()->route('login');
    }

    if ($user->is_admin == 1) {
        $req->session()->put('admin', $user);
        return redirect('/dashboard');
    } else {
        $req->session()->put('user', $user);
        return redirect('/');
    }
}


   

    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
        
        
    }

     function logout(Request $req)
    {
        $req->session()->forget('admin');
        return redirect()->route('login');
    }


}
