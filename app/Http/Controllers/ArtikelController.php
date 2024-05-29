<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = Artikel::all();
        return view('admin.artikel.artikel_view', compact('artikel'));
    }

    public function add(){
        return view('admin.artikel.artikel_add');
    }

    public function store(Request $request){
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $artikelImage = $request->file('image')->store('image');
            $artikel->image = $artikelImage;
        }
        $artikel->save();
        return redirect()->route('artikel.read');
    }

    public function edit($id){
        $editartikel = Artikel::find($id);
        return view('admin.artikel.artikel_edit', compact('editartikel'));
    }

    public function update(Request $request, $id){
        $artikel = Artikel::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $artikelImage = $request->file('image')->store('image');
            $artikel->image = $artikelImage;
        }
        $artikel->update();
        return redirect()->route('artikel.read');
    }

    public function delete($id){
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect()->route('artikel.read');
    }

    public function detail($id){
        $detailartikel = Artikel::find($id);
        return view('artikel', compact('detailartikel'));
    }
}
