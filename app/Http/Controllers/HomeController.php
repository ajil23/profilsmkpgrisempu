<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Fasilitas;
use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guru = Guru::count();
        $fasilitas = Fasilitas::count();
        $jurusan = Jurusan::count();
        $artikel = Artikel::count();
        return view('admin.index', compact('guru', 'fasilitas', 'jurusan', 'artikel'));
    }
}
