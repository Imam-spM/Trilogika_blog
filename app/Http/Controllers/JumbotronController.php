<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    public function index()
    {
        $jumbotrons = Jumbotron::all();
        return view('jumbotron.index', compact('jumbotrons'));
    }

    public function create()
    {
        return view('jumbotron.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'content' => 'required',
        ]);

        $imagePath = $request->file('image')->store('jumbotrons', 'public');

        Jumbotron::create([
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return redirect()->route('jumbotron.index');
    }

    public function edit(Jumbotron $jumbotron)
    {
        return view('jumbotron.edit', compact('jumbotron'));
    }

    public function update(Request $request, Jumbotron $jumbotron)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jumbotrons', 'public');
            $jumbotron->update([
                'title' => $request->title,
                'image' => $imagePath,
                'content' => $request->content,
            ]);
        } else {
            $jumbotron->update($request->only('title', 'content'));
        }

        return redirect()->route('jumbotron.index');
    }

    public function destroy(Jumbotron $jumbotron)
    {
        $jumbotron->delete();
        return redirect()->route('jumbotron.index');
    }
}
