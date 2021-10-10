<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fragrancia;

class FragranciasController extends Controller
{
    public function create(){
        return view('fragrancias.create');
    }

    public function store(Request $request){
        Fragrancia::create([
            'nome' => $request->nome,
            'estoque' => $request->estoque,
            'total_utilizado' => $request->total_utilizado,
        ]);
        return "Fragrancia salva com sucesso";
    }

    public function index(){
        $fragrancias = Fragrancia::all();
        return view('fragrancias.index',['fragrancias' => $fragrancias]);
    }

    public function destroy($id){
        $fragrancia = Fragrancia::findorfail($id);
        $fragrancia->delete();
        return "Fragrancia excluída com sucesso";
    }

    public function edit($id){
        $fragrancia = Fragrancia::findorfail($id);
        return view('fragrancias.edit',['fragrancia' => $fragrancia]);
    }

    public function update(Request $request, $id){
        $fragrancia = Fragrancia::findorfail($id);
        $fragrancia->update([
            'nome' => $request->nome,
            'estoque' => $request->estoque,
            'total_utilizado' => $request->total_utilizado,
        ]);
        return "Fragrancia atualizada com sucesso";
    }
}
