<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;

class EntradaController extends Controller
{
    public function index()
    {
    	if (auth()->guest())
    		return view('auth.login');
    	return view('entrada');
    }
    public function store(Request $request)
  	{
   		Caixa::create($request->all());
    	return redirect('/entrada');
  	}

}
