<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quadra;
use App\Endereco;
use App\User;

class QuadrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adicionarQuadras');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quadras = Quadra::where('owner_id', $id)->get();
        foreach ($quadras->all() as $quadra) {
            $endereco = Endereco::find($quadra->endereco_id);
            $todas[] = [
                'titulo' => $quadra->titulo,
                'valorHora' => $quadra->valor_aluguel,
                'id' => $quadra->id,
                'rua' => $endereco->rua,
                'cidade' => $endereco->cidade,
                'estado' => $endereco->estado,
                'cep' => $endereco->cep,
                'bairro' => $endereco->bairro,
                'complemento' => $endereco->complemento,
                'numero' => $endereco->numero,
                'status' => $quadra->status,
            ];
        }
        return view('todasQuadras', compact('todas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
