<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caixa;


class CaixaController extends Controller
{
    public function index()
    {
        $caixas = Caixa::where('data', date('Y-m-d'))->orderBy('data', 'ASC')->get();
    	return view('caixa', compact('caixas'));
    }

    public function buscar(Request $request)
  	{
    	$caixas = Caixa::where('data', $request->dataBusca)->orderBy('data', 'ASC')->get();
    	return view('caixa',compact('caixas'));
    }

    public function destroy($id)
    {
        Caixa::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $caixas = Caixa::find($id);

        if(stripos(session()->get('_previous')['url'], 'home') !== false)
            return view('edit', compact('caixas'))->withSimples(true);

        return view('edit', compact('caixas'));
    }

    public function update(Request $request, $id)
    {
        Caixa::find($id)->update($request->all());

        if( $request->has('simples') )
            return redirect('home/buscar?dataBusca='.$request->data);

        $inicio = session()->get('inicio');
        $fim = session()->get('fim');
        return redirect('extrato/gerar?dataInic='.$inicio.'&dataFinal='.$fim);
    }
}
