@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Fasilitas</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{route('guru.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                          <label for="kode">Kode Guru</label>
                          <input type="text" class="form-control" placeholder="NIP/NIK" name="kode" required>
                        </div>
                        <div class="col">
                            <label for="nama">Nama Guru</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap Guru" name="nama" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                          <label for="nama">Jenis Kelamin Guru</label>
                          <select name="kelamin" id="kelamin" class="form-control">
                            <option selected>-- Pilih Kelamin --</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                          </select>
                        </div>
                        <div class="col">
                          <label for="lahir">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="lahir" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                          <label for="jabatan">Jabatan Guru</label>
                          <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required>
                        </div>
                        <div class="col">
                            <label for="image" class="form-label">Foto Guru</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
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
