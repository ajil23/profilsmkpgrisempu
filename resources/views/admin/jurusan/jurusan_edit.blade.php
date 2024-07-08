@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Edit Jurusan</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{route('jurusan.update', $editjurusan->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                          <label for="kode">Kode Jurusan</label>
                          <input type="text" class="form-control" placeholder="Kode Jurusan" name="kode" value="{{$editjurusan->kode}}">
                        </div>
                        <div class="col">
                          <label for="nama">Nama Jurusan</label>
                          <input type="text" class="form-control" placeholder="Nama Jurusan" name="nama" value="{{$editjurusan->nama}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingTextarea">Deskrips</label>
                        <textarea class="form-control" placeholder="Deskripsi jurusan di tulis disini" id="deskripsi" name="deskripsi" value="{{$editjurusan->deskripsi}}"></textarea>
                    </div>
                    <br>
                    <div>
                        <button type="submit" value="Submit" class="btn btn-success shadow">Simpan</button>
                        <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                    </div>     
                </form>
            </div>
        </div>
    </div>
@endsection
