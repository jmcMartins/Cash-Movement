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

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');

        $caixas = Caixa::where('data', $date)->get();
    	return view('caixa', compact('caixas'));
    }
    public function buscar(Request $request)
  	{
  		if (auth()->guest())
    		return view('auth.login');

    	$caixas = Caixa::where('data', $request->dataBusca)->get();
    	return view('caixa',compact('caixas'));
 	}

    public function destroy($id)//Exclui item.
    {
        Caixa::find($id)->delete();
        return redirect('home');
    }
}
