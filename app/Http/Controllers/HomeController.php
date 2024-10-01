<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumbotron;
use App\Models\Alumni;
use App\Models\Artikel;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Ambil data terbaru
        $jumbotron = Jumbotron::latest()->first();  // Jumbotron terbaru
        $alumnis = Alumni::all();  // Semua data alumni
        $artikels = Artikel::all();  // Semua artikel

        // Kirim data ke view landing page
        return view('welcome', compact('jumbotron', 'alumnis', 'artikels'));
    }
}
