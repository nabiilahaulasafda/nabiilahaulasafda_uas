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
            <h2>EDIT DATA SERTIFIKAT</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="/sertifikat/{{ $sertifikat->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- No Sertifikat --}}
<div class="mb-3">
    <label for="no_sertifikat" class="form-label">No Sertifikat</label>
    <input type="text" name="no_sertifikat" class="form-control" value="{{ $sertifikat->no_sertifikat }}">
</div>

                {{-- Pilih Mahasiswa (Pengajuan) --}}
                <div class="mb-3">
                    <label for="pengajuans_id" class="form-label">NIM Mahasiswa</label>
                    <select name="pengajuans_id" class="form-control">
                        <option value="">-- Pilih Mahasiswa --</option>
                        @foreach($pengajuans as $pengajuan)
                            <option value="{{ $pengajuan->id }}"
                                {{ $sertifikat->pengajuans_id == $pengajuan->id ? 'selected' : '' }}>
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
                                {{ $sertifikat->petugass_id == $petugas->id ? 'selected' : '' }}>
                                {{ $petugas->nip_petugas }} - {{ $petugas->nama_petugas }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                        <label class="form-label">File Sertifikat</label>

                        <div class="input-group">
                            {{-- Tampilkan nama file lama dalam input text readonly --}}
                            <input type="text" class="form-control" value="{{ $sertifikat->file_sertifikat }}" readonly>

                            {{-- Tombol Choose File untuk upload ulang --}}
                            <input type="file" name="file_sertifikat" class="form-control">
                        </div>

                        {{-- Tampilkan file link di bawahnya (jika ingin akses lama) --}}
                        @if ($sertifikat->file_sertifikat)
                            <small class="text-muted">
                                File saat ini: <a href="{{ asset('file_sertifikat/' . $sertifikat->file_sertifikat) }}" target="_blank">
                                    {{ $sertifikat->file_sertifikat }}
                                </a>
                            </small>
                        @endif
                    </div>


                <div class="text-end">
                    <a href="/sertifikat" class="btn btn-outline-secondary">Tutup</a>
                    <button type="submit" class="btn btn-outline-secondary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
