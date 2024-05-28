@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Artikel</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{route('artikel.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul Artikel" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Sampul Artikel</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="form-floating">
                        <label for="isi">Isi Artikel</label>
                        <textarea class="form-control" placeholder="Tulis isi Artikel disini..." id="isi" name="isi" required></textarea>
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
