<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaqqindaController extends Controller
{
    public function index()
    {
        return 'haqqinda seyfe';
    }
    public function person($ad)
    {
        return $ad . ' Haqqinda Melumat';
    }
}
