<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\FotoQuadra;
use App\Quadra;
use App\User;
use Illuminate\Http\Request;

class BeneficiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Quadra::orderBy('valor_aluguel')->where('status', 1)->take(10)->get();

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

        return view('melhorBeneficio', compact('quadras'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
