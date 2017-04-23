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
    	return view('caixa',compact('caixas'));
    }
    public function buscar()
  	{
    	$caixas = Caixa::all();
    	return view('caixaBusca',compact('caixas'));
 	 }
}
