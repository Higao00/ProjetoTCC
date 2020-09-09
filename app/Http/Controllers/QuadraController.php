<?php

namespace App\Http\Controllers;

use App\Quadra;
use App\Endereco;
use App\User;
use Auth;
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

        $user = Auth::user();
        $endereco = Endereco::create([
            'cep' => $request->cep,
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade' => $request->cidade,
            'estado' => $request->estado
        ]);

        $certo = Quadra::create([
            'titulo' => $request->titulo,
            'endereco_id' => $endereco->id,
            'valor_aluguel' => $request->valorHora,
            'owner_id' => $user->id,
            'status' => 1
        ]);

        if ($certo) {
            $mensagem = 'success';
        } else {
            $mensagem = 'error';
        }

        return view("adicionarQuadras")->with('mensagem', $mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quadra  $quadra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quadra = Quadra::find($id);
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
        ];
        return view("adicionarQuadras", compact("todas"));
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
    public function update(Request $request, $id)
    {

        $quadra = Quadra::find($id);

        $quadra->update([
            'titulo' => $request->titulo,
            'valor_aluguel' => $request->valorHora,
        ]);

        $endereco = Endereco::find($quadra->endereco_id);

        $certo = $endereco->update([
            'cep' => $request->cep,
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade' => $request->cidade,
            'estado' => $request->estado
        ]);

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
        ];


        if ($certo) {
            $mensagem = 'success';
        } else {
            $mensagem = 'error';
        }

        return view("adicionarQuadras", compact('todas'))->with('mensagem', $mensagem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quadra  $quadra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quadra = Quadra::find($id);
        $endereco = Endereco::find($quadra->endereco_id);

        $certo = $endereco->delete();
        if ($certo) {
            $certo = $quadra->delete();
        } else {
            $certo = 'false';
        }

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
        ];

        if ($certo) {
            $mensagem = 'success';
        } else {
            $mensagem = 'error';
        }

        return view("todasQuadras", compact("todas"))->with('mensagem', $mensagem);
    }
}
