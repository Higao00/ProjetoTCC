<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quadra;
use App\Endereco;
use App\FotoQuadra;
use App\Horario;
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
        $data = Quadra::where('status', 1)->get();

        $quadras = [];

        for ($i = 0; $i < count($data); $i++) {
            $endereco = Endereco::find($data[$i]->endereco_id);
            $user = User::find($data[$i]->owner_id);
            $fotos = FotoQuadra::where('quadra_id', $data[$i]->id)->get();

            $quadras[] = [
                'id' => $data[$i]->id,
                'titulo' => mb_strtoupper($data[$i]->titulo),
                'estado' => mb_strtoupper($endereco->estado),
                'cidade' => mb_strtoupper($endereco->cidade),
                'rua' => mb_strtoupper($endereco->rua),
                'valor_aluguel' => $data[$i]->valor_aluguel,
                'owner_id' => $user->name,
                'status' => $data[$i]->status,
                'fotos' => $fotos->all()
            ];
        }

        return $quadras;
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

        if (!empty($todas)) {
            return view("todasQuadras", compact("todas"));
        } else {
            return view("home");
        }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewOne($id)
    {

        $quadras = Quadra::where('id', $id)->get();

        foreach ($quadras->all() as $quadra) {

            $user = User::find($quadra->owner_id);
            $fotos = FotoQuadra::where('quadra_id', $quadra->id)->get();

            $todas = [];

            $endereco = Endereco::find($quadra->endereco_id);
            $todas[] = [
                'cep' => $endereco->cep,
                'bairro' => $endereco->bairro,
                'complemento' => $endereco->complemento,
                'numero' => $endereco->numero,
                'id' => $quadra->id,
                'titulo' => mb_strtoupper($quadra->titulo),
                'estado' => mb_strtoupper($endereco->estado),
                'cidade' => mb_strtoupper($endereco->cidade),
                'rua' => mb_strtoupper($endereco->rua),
                'valor_aluguel' => $quadra->valor_aluguel,
                'owner_id' => $user->name,
                'status' => $quadra->status,
                'fotos' => $fotos->all()
            ];
        }

        return view('viewOne', compact('todas'));
    }
}
