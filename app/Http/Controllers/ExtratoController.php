<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;

class ExtratoController extends Controller
{
    public function index()
    {
    	if (auth()->guest())
    		return view('auth.login');

        $caixas = [];
    	return view('extrato', compact('caixas'));
    }

    public function gerar(Request $request)
  	{
  		if (auth()->guest())
    		return view('auth.login');

    	$caixas = Caixa::where('data', '>=', $request->dataInic, 'AND', $request->dataFinal , '<=')->get();
    	return view('extrato',compact('caixas'));
 	}

    public function destroy($id)//Exclui item.
    {
        Caixa::find($id)->delete();
        return redirect('extrato');
    }
}
