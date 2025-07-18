@extends('layouts.template')
@section('title')
    Halaman Data Jadwal
@endsection

@section('headline')
    DAFTAR JADWAL
@endsection

@section('content')
    <div class="card ">
        <div class="card-header text-center bg-light">
                  <h2> FORM DATA JADWAL </h2>
            </div>
            <div class="card-body">
                <div class="row g-3 ">
                        <div class="col mt-3 mx-3">
                           <form action="/jadwal" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col mt-3 mx-3">
            <div class="mb-3">
                <label class="form-label">Nip Petugas</label>
                <select name="petugas" class="form-control">
                    <option value="">-Pilih-</option>
                    @foreach ($petugas as $item1)
                        <option value="{{ $item1->id }}">{{ $item1->nip_petugas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nim Mahasiswa</label>
                <select name="pengajuan" class="form-control">
                    <option value="">-Pilih-</option>
                    @foreach ($pengajuan as $item2)
                        <option value="{{ $item2->id }}">{{ $item2->nim_mahasiswa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Mulai Magang</label>
                <input type="date" name="tgl_mulaimagang" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Selesai Magang</label>
                <input type="date" name="tgl_selesaimagang" class="form-control">
            </div>
            <div class="mb-3">
                    <label for="jadwal" class="form-label">Keterangan Jadwal</label>
                    <select name="jadwal" class="form-control">
                        <option value="jadwal">-- Pilih Jadwal --</option>
                        <option value="08:15 -  12:00">08:15 -  12:00</option>
                        <option value="13:30 -  16:45">13:30 -  16:45</option>
                    </select>
                </div>
        </div>

        <div class="col mt-3 mx-3">
            <div class="mb-3">
                <label class="form-label">Senin</label>
                <select name="senin" class="form-control">
                        <option value="jadwal">-- Pilih Ruangan --</option>
                        <option value="Bagian Umum">Bagian Umum</option>
                        <option value="Bagian Program">Bagian Program</option>
                        <option value="Bagian Persidangan dan Perundang-undangan">Bagian Persidangan dan Perundang-undangan</option>
                        <option value="Bagian Fasilitasi Penganggaran Pengawasan">Bagian Fasilitasi Penganggaran Pengawasan</option>
                        <option value="Bagian Keuangan">Bagian Keuangan</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Selasa</label>
                <select name="selasa" class="form-control">
                        <option value="jadwal">-- Pilih Ruangan --</option>
                        <option value="Bagian Umum">Bagian Umum</option>
                        <option value="Bagian Program">Bagian Program</option>
                        <option value="Bagian Persidangan dan Perundang-undangan">Bagian Persidangan dan Perundang-undangan</option>
                        <option value="Bagian Fasilitasi Penganggaran Pengawasan">Bagian Fasilitasi Penganggaran Pengawasan</option>
                        <option value="Bagian Keuangan">Bagian Keuangan</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Rabu</label>
                <select name="rabu" class="form-control">
                        <option value="jadwal">-- Pilih Ruangan --</option>
                        <option value="Bagian Umum">Bagian Umum</option>
                        <option value="Bagian Program">Bagian Program</option>
                        <option value="Bagian Persidangan dan Perundang-undangan">Bagian Persidangan dan Perundang-undangan</option>
                        <option value="Bagian Fasilitasi Penganggaran Pengawasan">Bagian Fasilitasi Penganggaran Pengawasan</option>
                        <option value="Bagian Keuangan">Bagian Keuangan</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Kamis</label>
                <select name="kamis" class="form-control">
                        <option value="jadwal">-- Pilih Ruangan --</option>
                        <option value="Bagian Umum">Bagian Umum</option>
                        <option value="Bagian Program">Bagian Program</option>
                        <option value="Bagian Persidangan dan Perundang-undangan">Bagian Persidangan dan Perundang-undangan</option>
                        <option value="Bagian Fasilitasi Penganggaran Pengawasan">Bagian Fasilitasi Penganggaran Pengawasan</option>
                        <option value="Bagian Keuangan">Bagian Keuangan</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumat</label>
                <select name="jumat" class="form-control">
                        <option value="jadwal">-- Pilih Ruangan --</option>
                        <option value="Bagian Umum">Bagian Umum</option>
                        <option value="Bagian Program">Bagian Program</option>
                        <option value="Bagian Persidangan dan Perundang-undangan">Bagian Persidangan dan Perundang-undangan</option>
                        <option value="Bagian Fasilitasi Penganggaran Pengawasan">Bagian Fasilitasi Penganggaran Pengawasan</option>
                        <option value="Bagian Keuangan">Bagian Keuangan</option>
                    </select>
            </div>
            <div class="text-end">
                <a href="/jadwal" class="btn btn-outline-secondary">Tutup</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
        </div>
@endsection
