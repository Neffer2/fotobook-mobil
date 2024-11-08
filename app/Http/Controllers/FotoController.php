<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FotoController extends Controller
{
    public function store (Request $request){
        // Extrae la parte de la imagen Base64
        $imageData = $request->image;
        $imageData = str_replace('data:image/png;base64,', '', $imageData);
        $imageData = str_replace(' ', '+', $imageData);
        $imageContent = base64_decode($imageData);

        // Crea un nombre único para la imagen
        $path = "public/photos/".Str::uuid().".jpg";
        Storage::disk('local')->put($path, $imageContent);

        return response()->json([
            'code' => 200,
            'message' => 'Foto guardada correctamente',
            'image' => basename($path)
        ]);
    }
}
