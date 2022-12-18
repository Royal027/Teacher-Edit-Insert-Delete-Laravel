<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ElaqeRequest;

class ElaqeController extends Controller
{
    public function index()
    {
        return view('elaqe');
    }
    public function elaqePost(ElaqeRequest $request)
    {

        return 'ugurlu mesaj ' . $request;
    }
}
