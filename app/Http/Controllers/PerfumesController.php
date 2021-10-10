<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;

class PerfumesController extends Controller
{
    public function create(){
        return view('perfumes.create');
    }

    public function store(Request $request){
        Perfume::create([
            'nome' => $request->nome,
            'fragrancia' => $request->fragrancia,
            'percent_agua' => $request->percent_agua,
            'percent_alcool' => $request->percent_alcool,
            'percent_fragrancia' => $request->percent_fragrancia,
            'total_produzido' => $request->total_produzido,
            'preco' => $request->preco
        ]);
        return "Perfume salvo com sucesso";

    }

    public function index(){
        $perfumes = Perfume::all();
        return view('perfumes.index',['perfumes' => $perfumes]);
    }

    public function destroy($id){
        $perfume = Perfume::findorfail($id);
        $perfume->delete();
        return "Perfume excluído com sucesso";
    }

    public function edit($id){
        $perfume = Perfume::findorfail($id);
        return view('perfumes.edit',['perfume' => $perfume]);
    }

    public function update(Request $request,$id){
        $perfume = Perfume::findorfail($id);
        $perfume->update([
            'nome' => $request->nome,
            'fragrancia' => $request->fragrancia,
            'percent_agua' => $request->percent_agua,
            'percent_alcool' => $request->percent_alcool,
            'percent_fragrancia' => $request->percent_fragrancia,
            'total_produzido' => $request->total_produzido,
            'preco' => $request->preco
        ]);
        return "Perfume atualizado com sucesso";
    }


}
