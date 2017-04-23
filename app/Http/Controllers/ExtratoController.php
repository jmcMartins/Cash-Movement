<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtratoController extends Controller
{
    public function index()
    {
    	if (auth()->guest())
    		return view('auth.login');
    	return view('extrato');
    }
}
