@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Jurusan</h1>
            </div>
            <a href="{{route('jurusan.create')}}" class="btn btn-link">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success">
                        <i class="fas fa-solid fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-success">Tambah Data</button>
                </div>
            </a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Jurusan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama Jurusan</center></th>
                                <th><center>Kode Jurusan</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $jurusan)
                            <tr>
                                <td><center>{{$loop->iteration}}</center></td>
                                <td><center>{{$jurusan->nama}}</center></td>
                                <td><center>{{$jurusan->kode}}</center></td>
                                <td colspan="2">
                                   <center>
                                    <a href="{{route('jurusan.edit', $jurusan->id)}}" class="btn btn-link">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-warning">
                                                <i class="fas fa-solid fa-pen"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning">Edit Data</button>
                                        </div>
                                    </a>
                                    <a href="{{route('jurusan.delete', $jurusan->id)}}" class="btn btn-link">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fas fa-solid fa-trash"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">Hapus Data</button>
                                        </div>
                                    </a>
                                   </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$datatamu->links('pagination::bootstrap-5')}} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
