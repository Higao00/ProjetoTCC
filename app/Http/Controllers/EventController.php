<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Quadra;
use App\User;

class EventController extends Controller
{
    public function loadEvents(Request $request)
    {

        // dd($request->quadra);
        $events = Event::where('quadra_id', $request->quadra)->get();

        // $events = Event::all();

        return response()->json($events);
    }

    public function store(Request $request)
    {
        Event::create($request->all());

        return response()->json('true');
    }

    public function update(Request $request)
    {
        $event = Event::where('id', $request->id)->first();

        $event->fill($request->all());
        $event->save();

        return response()->json(true);
    }

    public function destroy(Request $request)
    {
        Event::where('id', $request->id)->delete();

        return response()->json(true);
    }

    public function show($id)
    {
        $eventos = Event::all();
        $quadras = Quadra::all();
        $usuario = User::find($id);

        if ($usuario->status == 1 || $usuario->status == 2) {
            foreach ($quadras as $quadra) {
                if ($quadra->owner_id == $id) {
                    $aux[] = $quadra->id;
                } else {
                    $aux = null;
                }
            }

            if (!empty($aux)) {
                foreach ($aux as $value) {
                    foreach ($eventos as  $evento) {
                        if ($evento->quadra_id == $value) {
                            $info_quadra = Quadra::find($evento->quadra_id);
                            $info_usuario = User::find($evento->usuario_id);
                            $todos[] = [
                                'id' => $evento->id,
                                'titulo' => $evento->title,
                                'start' => $evento->start,
                                'end' => $evento->end,
                                'quadra' => $info_quadra->titulo,
                                'valor' => $info_quadra->valor_aluguel,
                                'nome_user' => $info_usuario->name,
                                'email_user' => $info_usuario->email,
                                'doc_user' => $info_usuario->documento
                            ];
                        }
                    }
                }
            }else{
                $todos = '';
            }
        }

        return view('eventos', compact('todos'));
    }
}
