<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('name'));

        $request->request->add(['username'> Str::slug($request->username)]);

        $this->validate($request, [
            'name' => 'required|max:40',
            'username' => 'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //Autenticar usuario
        auth()->attempt([
            'emial'=> $request->email,
            'password' => $request->password
        ]);

        //Otra forma de autenticar
        auth()->attempt($request->only('email','password'));

        //Redireccionar
        return redirect()->route('posts.index');
    }
}