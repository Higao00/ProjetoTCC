<?php

namespace App\Http\Controllers;

use App\Quadra;
use App\Endereco;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class QuadraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Quadra::all();

        for ($i = 0; $i < count($data); $i++) {
            $endereco = Endereco::find($data[$i]->endereco_id);
            $user = User::find($data[$i]->owner_id);

            $quadras[] = [
                'id' => $data[$i]->id,
                'titulo' => $data[$i]->titulo,
                'nome_quadra' => $endereco->rua . ' - ' . $endereco->bairro,
                'valor_aluguel' => $data[$i]->valor_aluguel,
                'owner_id' => $user->name,
                'status' => $data[$i]->status
            ];
        }

        return view('admin.suspenderQuadra', compact('quadras'));
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
     * @param  \App\Quadra  $quadra
     * @return \Illuminate\Http\Response
     */
    public function show(Quadra $quadra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quadra  $quadra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quadra = Quadra::find($id);

        if ($quadra->status == 0) {
            $certo = $quadra->update(['status' => '1',]);
        } else {
            $certo = $quadra->update(['status' => '0',]);
        }

        if ($certo) {
            $mensagem = 'success';
        } else {
            $mensagem = 'error';
        }

        $quadras = Quadra::all();

        return view("admin.suspenderQuadra", compact("quadras"))->with('mensagem', $mensagem);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quadra  $quadra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quadra $quadra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quadra  $quadra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quadra $quadra)
    {
        //
    }
}
