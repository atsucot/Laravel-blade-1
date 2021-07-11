<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'index' => 1,
        ];
        return view('test', $data);
    }
}