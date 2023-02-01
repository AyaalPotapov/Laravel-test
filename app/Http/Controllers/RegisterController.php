<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {   
        // return Route::is('blog') ? 'yes' : 'no'; - проверка есть ли такой маршрут
        return view('register.index');
    }

    public function store(Request $request)
    {   
        // return Route::is('blog') ? 'yes' : 'no'; - проверка есть ли такой маршрут
        // $data = $request->all();
        // $data = $request->only(['name', 'Email', 'pass']);

        // $name = $request->input('name');
        // $email = $request->input('Email');
        // $agreements = $request->boolean('agreements');
        // $pass = $request->input('pass');

        // dd($name, $email, $pass, $agreements);

        // dd($request->has('name'));
        // dd($request->filled('name'));

        // if ($name = $request->input('name'))
        // {
        //     $name = strtoupper($name);
        // }
        
        if(true)
        {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user.posts');
    }
}
