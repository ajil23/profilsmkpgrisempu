<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index(){
        $jurusan = Jurusan::all();
        return view('admin.jurusan.jurusan_view', compact('jurusan'));
    }

    public function add(){
        return view('admin.jurusan.jurusan_add');
    }

    public function store(Request $request){
        $jurusan = new Jurusan();
        $jurusan->nama = $request->nama;
        $jurusan->kode = $request->kode;
        $jurusan->save();
        return redirect()->route('jurusan.read');
    }

    public function edit($id){
        $editjurusan = Jurusan::find($id);
        return view('admin.jurusan.jurusan_edit', compact('editjurusan'));
    }

    public function update(Request $request, $id){
        $jurusan = Jurusan::find($id);
        $jurusan->nama = $request->nama;
        $jurusan->kode = $request->kode;
        $jurusan->update();
        return redirect()->route('jurusan.read');
    }

    public function delete($id){
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect()->route('jurusan.read');
    }
}
