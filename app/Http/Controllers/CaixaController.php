<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;

class CaixaController extends Controller
{
    public function index()
    {
    	if (auth()->guest())
    		return view('auth.login');
    	return view('caixa');
    }
    public function buscar(Request $request)
  	{
  		if (auth()->guest())
    		return view('auth.login');

    	$caixas = Caixa::where('data', $request->dataBusca)->get();
    	return view('caixa',compact('caixas'));
 	 }
}
