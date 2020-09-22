<?php

namespace App\Http\Controllers;

use App\FotoQuadra;
use App\Http\Requests;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $imageName = md5(rand()).'.'.'jpg';
        $image->move(public_path('images'),$imageName);

        $fotoQuadra = FotoQuadra::create([
            'quadra_id' => '-1',
            'path_foto' => $imageName,
            'status'    => '1'
        ]);

        return response()->json(['success'=>$fotoQuadra->id]);
    }

}
