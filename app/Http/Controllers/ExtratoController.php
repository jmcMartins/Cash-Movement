<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;

class ExtratoController extends Controller
{

    public function index()
    {
        $caixas = Caixa::where('data', '>=', date('Y-m-d'))
            ->where('data' , '<=', date('Y-m-d'))
            ->orderBy('data', 'ASC')
        ->get();
    	return view('extrato', compact('caixas'));
    }

    public function gerar(Request $request)
  	{
        session([
            'inicio' => $request->dataInic,
            'fim' => $request->dataFinal
        ]);


    	$caixas = Caixa::where('data', '>=', $request->dataInic)
            ->where('data' , '<=', $request->dataFinal)
            ->orderBy('data', 'ASC')
        ->get();

    	return view('extrato',compact('caixas', 'caixaData'));
 	}

    public function destroy($id)
    {
        Caixa::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $caixas = Caixa::find($id);
        return view('edit', compact('caixas'));
    }
}
