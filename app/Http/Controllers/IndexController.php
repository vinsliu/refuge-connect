<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {
        return view('welcome');
    }
}
