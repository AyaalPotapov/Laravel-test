<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        // return "Test"
        // return response('Test');

        // return ['foo' => 'bar'];
        return response()->json(['foo' => 'bar']);
    }
}
