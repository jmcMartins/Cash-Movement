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
    public function buscar()
  	{
  		if (auth()->guest())
    		return view('auth.login');
    	$caixas = Caixa::where('data', '1997-05-01');
    	var_dump($caixas);
    	return view('caixaBusca',compact('caixas'));
 	 }
}
