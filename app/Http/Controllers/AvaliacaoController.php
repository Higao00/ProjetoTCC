<?php

namespace App\Http\Controllers;

use App\Avaliacoes;
// use Avaliacoes;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function gravar(Request $request)
    {
        $requisicao = $request->all();

        $aux = Avaliacoes::where('id_user', $request->id_user)->where('id_quadra', $request->id_quadra)->first();

        if(is_null($aux)){
            Avaliacoes::create($request->all());
        }else{

            $avaliacao = Avaliacoes::where('id_user', $request->id_user)->where('id_quadra', $request->id_quadra)->first();

            $avaliacao->fill($request->all());
            $avaliacao->save();
        }

        return response()->json(true);

    }

}
