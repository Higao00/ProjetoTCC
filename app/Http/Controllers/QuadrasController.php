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
                'valorHora' => 'R$ ' . $quadra->valor_aluguel . ',00',
                'id' => $quadra->id,
                'endereco' => $endereco->rua . ' - ' . $endereco->cidade . ',' . $endereco->estado,
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
