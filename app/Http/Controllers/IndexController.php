<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {
        $animals = Animal::all();
        return view('welcome', ['animals' => $animals]);
    }
}
