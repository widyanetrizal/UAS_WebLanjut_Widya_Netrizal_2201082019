<?php

namespace App\Http\Controllers;

use App\Models\FotoLatar;
use Illuminate\Http\Request;

class FotoLatarController extends Controller
{
    public function showCarousel()
    {
        $fotoLatars = FotoLatar::all();

        return view('carousel', compact('fotoLatars'));
    }
}
