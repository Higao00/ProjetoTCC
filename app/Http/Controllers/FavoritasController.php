<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Quadra;
use App\Endereco;
use App\Favoritas;
use App\FotoQuadra;
use App\User;
use Illuminate\Support\Facades\App;

class FavoritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quadra = Favoritas::where('id_user', auth()->user()->id)->get();

        if (!empty($quadra->all())) {
            foreach ($quadra as $value) {
                $aux = Quadra::where([
                    'status' => 1,
                    'id' => $value->id_quadra
                ])->get();

                if (!empty($aux->all())) {
                    $data[] = $aux;
                }
            }

            for ($i = 0; $i < count($data); $i++) {
                $endereco = Endereco::find($data[$i]->all()[0]->endereco_id);
                $user = User::find($data[$i]->all()[0]->owner_id);
                $fotos = FotoQuadra::where('quadra_id', $data[$i]->all()[0]->id)->get();

                $quadras[] = [
                    'id' => $data[$i]->all()[0]->id,
                    'titulo' => mb_strtoupper($data[$i]->all()[0]->titulo),
                    'estado' => mb_strtoupper($endereco->estado),
                    'cidade' => mb_strtoupper($endereco->cidade),
                    'rua' => mb_strtoupper($endereco->rua),
                    'valor_aluguel' => $data[$i]->all()[0]->valor_aluguel,
                    'owner_id' => $user->name,
                    'status' => $data[$i]->all()[0]->status,
                    'fotos' => $fotos->all()
                ];
            }
        } else {
            $quadras = '';
        }

        return view('favoritas', compact('quadras'));
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
        $favoritas = Favoritas::where([
            'id_user' => auth()->user()->id,
            'id_quadra' => $request->id_quadra
        ])->get();

        if (empty($favoritas->all())) {
            $certo = Favoritas::create([
                'id_quadra' => $request->id_quadra,
                'id_user' => auth()->user()->id
            ]);
        } else {
            $certo = Favoritas::destroy('id', $favoritas[0]['id']);
        }


        if ($certo) {
            $mensagem = 'success';
        } else {
            $mensagem = 'error';
        }

        return view("home")->with('mensagem', $mensagem);
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
