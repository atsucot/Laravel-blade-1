<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '本文',
        ];
        return view('hello.index', $item);
    }
}