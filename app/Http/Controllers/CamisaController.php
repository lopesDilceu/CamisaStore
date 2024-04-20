<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CamisaRequest;
use App\Models\Camisa;
use Illuminate\Support\Facades\Log;
class CamisaController extends Controller
{
    //
    public function index(){
        return view('camisas.index');
    }
    
    public function store(Request $request){
        // Log::info('Entrou no método store'); // Log para verificar se chegou aqui
        //dd($request->all());  
        Camisa::create([
            'uniforme' => $request->uniforme,
            'patrocinadores' => $request->has('patrocinadores'),
            'numero' => $request->numero,
            'nome' => $request->nome,
            'tamanho' => $request->tamanho,
            'quantidade' => $request->quantidade,
            'observacao' => $request->obs
        ]);

        return redirect()->route('camisas.index')->with('success','Camisa cadastrada com sucesso!');
    }

    public function list(){
        $camisas = Camisa::all();

        return view('camisas.list', compact('camisas'));
    }

    public function delete ($id){
        $camisas = Camisa::find($id);
        $camisas->delete();

        return redirect()->route('camisas.list')->with('success','Camisa deletada com sucesso!');
    }

    public function show($id){
        $camisas = Camisa::find($id);
        if($camisas->uniforme == 'Uniforme 1') $camisas->img = 'camisa1.png';
        if($camisas->uniforme == 'Uniforme 2') $camisas->img = 'camisa2.png';
        if($camisas->uniforme == 'Uniforme 3') $camisas->img = 'camisa3.png';
        return view('camisas.show', compact('camisas'));
    }

    public function update (Request $request, $id){
        $camisa = Camisa::find($id);
        $camisa->update([
            'uniforme' => $request->uniforme,
            'patrocinadores' => $request->has('patrocinadores'),
            'numero' => $request->numero,
            'nome' => $request->nome,
            'tamanho' => $request->tamanho,
            'quantidade' => $request->quantidade,
            'observacao' => $request->obs,
        ]);

        return redirect()->back()->with('success','Camisa atualizada com sucesso!');
    }
}
