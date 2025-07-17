@extends('layouts.template')
@section('title')
    Halaman Data Petugas
@endsection

@section('headline')
    DAFTAR PETUGAS
@endsection

@section('content')
    <div class="card ">
        <div class="card-header text-center bg-light">
                  <h2> DATA PETUGAS </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/petugas" enctype="multipart/form-data">
                        @csrf
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nip Petugas</label>
                        <input type="text" name="nip_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nip Petugas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jabatan Petugas</label>
                        <input type="text" name="jabatan_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan Petugas">
                    </div>
                    <div class="text-end">
                        <a href="/petugas" class="btn btn-outline-secondary">Tutup</a>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
