<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;

class SaidaController extends Controller
{
    public function index()
    {
    	return view('saida');
    }

    public function store(Request $request)
  	{
   		Caixa::create($request->all());
    	return redirect('/saida');
  	}
}
