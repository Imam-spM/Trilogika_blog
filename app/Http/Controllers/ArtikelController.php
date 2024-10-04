<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource (admin view).
     */
    public function index()
    {
        // Menampilkan semua artikel untuk halaman admin
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Display articles on landing page.
     */
    public function landingPage()
    {
        $artikels = Artikel::orderBy('tanggal_publish', 'desc')->get();

        // Mengirimkan variabel $artikels ke view 'landingpage'
        return view('landingpage', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_publish' => 'required|date',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('artikel', 'public');
            $validatedData['gambar'] = $imagePath;
        }

        Artikel::create($validatedData);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_publish' => 'required|date',
        ]);

        $artikel = Artikel::findOrFail($id);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('artikel', 'public');
            $validatedData['gambar'] = $imagePath;
        }

        $artikel->update($validatedData);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
