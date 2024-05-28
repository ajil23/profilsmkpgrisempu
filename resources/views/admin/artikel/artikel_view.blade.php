@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Artikel</h1>
            </div>
            <a href="{{route('artikel.create')}}" class="btn btn-link">
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
                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Artikel</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Judul</center></th>
                                <th><center>Sampul</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikel as $artikel)
                            <tr>
                                <td><center>{{$loop->iteration}}</center></td>
                                <td><center>{{$artikel->judul}}</center></td>
                                <td><center><img src="{{ asset('storage/'.$artikel->image) }}" alt="artikel" style="height: 5rem; width:4rem"></center></td>
                                <td colspan="2">
                                   <center>
                                    <a href="{{route('artikel.edit', $artikel->id)}}" class="btn btn-link">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-warning">
                                                <i class="fas fa-solid fa-pen"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning">Edit Data</button>
                                        </div>
                                    </a>
                                    <a href="{{route('artikel.delete', $artikel->id)}}" class="btn btn-link">
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
