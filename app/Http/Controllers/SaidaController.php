<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;

class SaidaController extends Controller
{
    public function index()
    {
    	if (auth()->guest())
    		return view('auth.login');
    	return view('saida');
    }
    public function store(Request $request)
  	{
   		Caixa::create($request->all());
    	return redirect('/saida');
  	}
}
