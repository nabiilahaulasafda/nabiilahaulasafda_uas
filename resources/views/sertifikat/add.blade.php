@extends('layouts.template')
@section('title')
    Halaman Data Sertifikat
@endsection

@section('headline')
    DAFTAR SERTIFIKAT
@endsection

@section('content')
    <div class="card ">
        <div class="card-header text-center bg-light">
                  <h2> FORM DATA SERTIFIKAT </h2>
            </div>
            <div class="card-body">
                <div class="row g-3 ">
                        <div class="col mt-3 mx-3">
                            <form method="POST" action="/sertifikat" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">No Sertifikat</label>
                                    <input type="text" name="no_sertifikat" id="" class="form-control" placeholder="">
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nim Mahasiswa</label>
                                    <select name="pengajuan" id="" class="form-control">
                                        <option value="">-Pilih-</option>
                                        @foreach ($pengajuan as $item2)
                                            <option value="{{$item2->id}}">{{$item2->nim_mahasiswa}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nip Petugas</label>
                                    <select name="petugas" id="" class="form-control">
                                        <option value="">-Pilih-</option>
                                        @foreach ($petugas as $item1)
                                            <option value="{{$item1->id}}">{{$item1->nip_petugas}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"> File Sertifikat </label>
                                    <input type="file" accept="image/*" name="file_sertifikat" id="" class="form-control" placeholder="">
                                </div>
                                <div class="text-end">
                                    <a href="/sertifikat" class="btn btn-outline-secondary">Tutup</a>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
@endsection
