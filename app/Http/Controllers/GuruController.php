<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::all();
        return view('admin.guru.guru_view', compact('guru'));
    }

    public function add(){
        return view('admin.guru.guru_add');
    }

    public function store(Request $request){
        $guru = new Guru();
        $guru->kode = $request->kode;
        $guru->nama = $request->nama;
        $guru->jabatan = $request->jabatan;
        $guru->kelamin = $request->kelamin;
        $guru->lahir = $request->lahir;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $guruImage = $request->file('image')->store('image');
            $guru->image = $guruImage;
        }
        $guru->save();
        return redirect()->route('guru.read');
    }

    public function edit($id){
        $editguru = Guru::find($id);
        return view('admin.guru.guru_edit', compact('editguru'));
    }

    public function update(Request $request, $id){
        $guru = Guru::find($id);
        $guru->kode = $request->kode;
        $guru->nama = $request->nama;
        $guru->jabatan = $request->jabatan;
        $guru->kelamin = $request->kelamin;
        $guru->lahir = $request->lahir;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $guruImage = $request->file('image')->store('image');
            $guru->image = $guruImage;
        }
        $guru->update();
        return redirect()->route('guru.read');
    }

    public function delete($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect()->route('guru.read');
    }
}
