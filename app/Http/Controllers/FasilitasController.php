<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.fasilitas_view', compact('fasilitas'));
    }

    public function add(){
        return view('admin.fasilitas.fasilitas_add');
    }

    public function store(Request $request){
        $fasilitas = new Fasilitas();
        $fasilitas->nama = $request->nama;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $failitasImage = $request->file('image')->store('image');
            $fasilitas->image = $failitasImage;
        }
        $fasilitas->save();
        return redirect()->route('fasilitas.read');
    }

    public function edit($id){
        $editfasilitas = Fasilitas::find($id);
        return view('admin.fasilitas.fasilitas_edit', compact('editfasilitas'));
    }

    public function update(Request $request, $id){
        $fasilitas = Fasilitas::find($id);
        $fasilitas->nama = $request->nama;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $failitasImage = $request->file('image')->store('image');
            $fasilitas->image = $failitasImage;
        }
        $fasilitas->update();
        return redirect()->route('fasilitas.read');
    }

    public function delete($id){
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.read');
    }
}
