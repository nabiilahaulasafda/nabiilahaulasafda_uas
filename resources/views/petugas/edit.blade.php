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
                  <h2> EDIT DATA PETUGAS </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/petugas/{{ $petugas->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nip Petugas</label>
                        <input type="text" value="{{ $petugas->nip_petugas }}" name="nip_petugas" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                        <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jabatan Petugas</label>
                        <input type="text" type="text" value="{{ $petugas->jabatan_petugas }}" name="jabatan_petugas" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/petugas">  Tutup  </a> </button>
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </div>
                     </form>
                </div>
            </div>
@endsection
