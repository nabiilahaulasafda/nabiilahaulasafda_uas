@extends('layouts.template')
@section('title')
    Halaman Data Pengajuan
@endsection

@section('headline')
    DAFTAR PENGAJUAN
@endsection

@section('content')
    <div class="card ">
        <div class="card-header text-center bg-light">
                  <h2> FORM DATA MAHASISWA </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/pengajuan" enctype="multipart/form-data">
                        @csrf
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim Mahasiswa</label>
                        <input type="text" name="nim_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempatlahir_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> No Hp Mahasiswa</label>
                        <input type="text" name="hp_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Mahasiswa</label>
                        <input type="email" name="email_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Mahasiswa</label>
                        <input type="text" name="alamat_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal Kampus</label>
                        <input type="text" name="asal_kampus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Kampus">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File Surat Permohonan</label>
                        <input type="file" accept="image/*" name="file_suratpermohonan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="text-end">
                        <a href="/pengajuan" class="btn btn-outline-secondary">Tutup</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                     </form>
                </div>
            </div>
@endsection
