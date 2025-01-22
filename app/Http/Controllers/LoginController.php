<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create(): View
    {
        # code...
        return view('login.login');
    }
    public function store(Request $request):View
    {
        # code...
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:8|max:32'
        ]);


        //$user = User::all()->where('email',$request->email)->where('password',$pass);
        $user = User::where('email',$request->email)->where('password',$request->password)->get();

        $hashed = $user->password

       $result =  Hash::check();
       


        dd($user);
        if($user->isEmpty())
        {
            return view('login.login',['error'=>"Invalid Credentials"]);
        }
        session([
            'id',$user->id,
            'name',$user->name,
            'email',$user->email
        ]);
        return redirect()->route('task.taksList');
    }
}
