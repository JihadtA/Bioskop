<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Tiket;
use App\Models\Bioskop;

class FilmController extends Controller
{
    public function index()
    {
        $bioskops = Bioskop::get();
        $response = Http::get('https://api-kelompok-6.herokuapp.com/api/film');
        $films = $response->json('data.data');
        
        return view('film.index', compact('films','bioskops'));
    }
}
