<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::latest()->paginate(10);
        return view('alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/alumni', $nama_gambar);
            $data['gambar'] = $nama_gambar;
        }

        Alumni::create($data);

        return redirect()->route('alumni.index')
            ->with('success', 'Alumni berhasil ditambahkan.');
    }

    public function show(Alumni $alumni)
    {
        return view('alumni.show', compact('alumni'));
    }

    public function edit(Alumni $alumni)
    {
        return view('alumni.edit', compact('alumni'));
    }

    public function update(Request $request, Alumni $alumni)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($alumni->gambar) {
                Storage::delete('public/alumni/' . $alumni->gambar);
            }

            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/alumni', $nama_gambar);
            $data['gambar'] = $nama_gambar;
        }

        $alumni->update($data);

        return redirect()->route('alumni.index')
            ->with('success', 'Alumni berhasil diperbarui.');
    }

    public function destroy(Alumni $alumni)
    {
        if ($alumni->gambar) {
            Storage::delete('public/alumni/' . $alumni->gambar);
        }

        $alumni->delete();

        return redirect()->route('alumni.index')
            ->with('success', 'Alumni berhasil dihapus.');
    }
}
