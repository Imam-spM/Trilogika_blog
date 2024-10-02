<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $jumbotron = new Jumbotron();
        $jumbotron->title = $request->title;
        $jumbotron->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jumbotron_images', 'public');
            $jumbotron->image = $imagePath;
        }

        $jumbotron->save();

        return redirect()->route('jumbotron.index')->with('success', 'Jumbotron created successfully.');
    }
    public function show($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        return view('jumbotron.show', compact('jumbotron'));
    }

    public function edit(Jumbotron $jumbotron)
    {
        return view('jumbotron.edit', compact('jumbotron'));
    }

    public function update(Request $request, Jumbotron $jumbotron)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $jumbotron->title = $request->title;
        $jumbotron->content = $request->content;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($jumbotron->image) {
                Storage::disk('public')->delete($jumbotron->image);
            }
            // Store new image
            $imagePath = $request->file('image')->store('jumbotron_images', 'public');
            $jumbotron->image = $imagePath;
        }

        $jumbotron->save();

        return redirect()->route('jumbotron.show', $jumbotron)->with('success', 'Jumbotron updated successfully');
    }
}
