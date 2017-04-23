<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixaController extends Controller
{
    public function index()
    {
    	if (auth()->guest())
    		return view('auth.login');
    	return view('caixa');
    }
}
