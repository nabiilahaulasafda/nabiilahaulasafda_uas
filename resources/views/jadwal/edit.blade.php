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
            <h2>EDIT DATA JADWAL</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="/jadwal/{{ $jadwal->id }}">
                @csrf
                @method('PUT')

                {{-- Pilih Mahasiswa (Pengajuan) --}}
                <div class="mb-3">
                    <label for="pengajuans_id" class="form-label">Mahasiswa</label>
                    <select name="pengajuans_id" class="form-control">
                        <option value="">-- Pilih Mahasiswa --</option>
                        @foreach($pengajuans as $pengajuan)
                            <option value="{{ $pengajuan->id }}"
                                {{ $jadwal->pengajuans_id == $pengajuan->id ? 'selected' : '' }}>
                                {{ $pengajuan->nim_mahasiswa }} - {{ $pengajuan->nama_mahasiswa }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Pilih Petugas --}}
                <div class="mb-3">
                    <label for="petugass_id" class="form-label">Petugas</label>
                    <select name="petugass_id" class="form-control">
                        <option value="">-- Pilih Petugas --</option>
                        @foreach($petugass as $petugas)
                            <option value="{{ $petugas->id }}"
                                {{ $jadwal->petugass_id == $petugas->id ? 'selected' : '' }}>
                                {{ $petugas->nip_petugas }} - {{ $petugas->nama_petugas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Tanggal Mulai --}}
                <div class="mb-3">
                    <label for="tgl_mulaimagang" class="form-label">Tanggal Mulai Magang</label>
                    <input type="date" name="tgl_mulaimagang" class="form-control" value="{{ $jadwal->tgl_mulaimagang }}">
                </div>

                {{-- Tanggal Selesai --}}
                <div class="mb-3">
                    <label for="tgl_selesaimagang" class="form-label">Tanggal Selesai Magang</label>
                    <input type="date" name="tgl_selesaimagang" class="form-control" value="{{ $jadwal->tgl_selesaimagang }}">
                </div>

                {{-- Input Jadwal --}}
                <div class="mb-3">
                    <label for="jadwal" class="form-label">Keterangan Jadwal</label>
                    <select name="jadwal" class="form-control">
                        <option value="">-- Pilih Jadwal --</option>
                        <option value="08:15 -  12:00" {{ $jadwal->jadwal == '08:15 -  12:00' ? 'selected' : '' }}>08:15 -  12:00</option>
                        <option value="13:30 -  16:45" {{ $jadwal->jadwal == '13:30 -  16:45' ? 'selected' : '' }}>13:30 -  16:45</option>
                    </select>
                </div>


                {{-- Hari-hari --}}
                @php
    $pilihanRuangan = ['Bagian Umum', 'Bagian Program', 'Bagian Persidangan dan Perundang-undangan', 'Bagian Fasilitasi Penganggaran Pengawasan', 'Bagian Keuangan'];
@endphp

@foreach(['senin','selasa','rabu','kamis','jumat'] as $hari)
    <div class="mb-3">
        <label for="{{ $hari }}" class="form-label">{{ ucfirst($hari) }}</label>
        <select name="{{ $hari }}" class="form-control">
            <option value="">-- Pilih Ruangan --</option>
            @foreach($pilihanRuangan as $ruangan)
                <option value="{{ $ruangan }}" {{ $jadwal->$hari == $ruangan ? 'selected' : '' }}>
                    {{ $ruangan }}
                </option>
            @endforeach
        </select>
    </div>
@endforeach


                <div class="text-end">
                    <a href="/jadwal" class="btn btn-outline-secondary">Tutup</a>
                    <button type="submit" class="btn btn-outline-secondary">Edit</button>
                </div>
            </form>
        </div>
    </div>
{{-- </div> --}}
@endsection
