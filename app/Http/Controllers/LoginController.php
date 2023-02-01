<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request)
    {   

        // dd($request->is('login')); // проверка пути запроса

        // dd(session()->all());
        // $foo = session('foo');

        // dd($foo);

        return view('login.index');
    }
    public function store(Request $request)
    {   
        // return Route::is('blog') ? 'yes' : 'no'; - проверка есть ли такой маршрут

        // session([
        //     'foo' => 'Bar',
        //     'name' => 'Ayaal',
        // ]);

        // session()->forget('foo');
        // session()->flush();

        session(['alert' => __('Добро пожаловать!')]);
        // alert(__('Добро пожаловать!')); //это если создана глобальная фнк helper

        // if(true)
        // {
        //     return redirect()->back()->withInput();
        // }

        return redirect()->route('user.posts');
    }
}
