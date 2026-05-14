<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    public function create()
    {
        return view('wisata.create');
    }

   public function store(Request $request)
{
    $gambar = $request->file('gambar')->store('gambar-wisata', 'public');

    Wisata::create([
        'nama_wisata' => $request->nama_wisata,
        'lokasi' => $request->lokasi,
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar
    ]);

    return redirect('/wisata');
}

    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);

        return view('wisata.edit', compact('wisata'));
    }

    public function update(Request $request, $id)
{
    $wisata = Wisata::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar')->store('gambar-wisata', 'public');
    } else {
        $gambar = $wisata->gambar;
    }

    $wisata->update([
        'nama_wisata' => $request->nama_wisata,
        'lokasi' => $request->lokasi,
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar
    ]);

    return redirect('/wisata');
}

    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        $wisata->delete();

        return redirect('/wisata');
    }
}