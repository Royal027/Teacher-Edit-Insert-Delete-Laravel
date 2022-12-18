<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $adlar = ['sahmar', "aqil", 'seki'];
        return view('welcome', compact('adlar'));
    }
    public function index1()
    {
        return view('telebe');
    }
}
