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

        return view('edit', compact('caixas'));
    }

    public function update(Request $request, $id)
    {
        Caixa::find($id)->update($request->all());
        return redirect()->back();
    }
}
