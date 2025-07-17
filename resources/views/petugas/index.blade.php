@extends('layouts.template')
@section('title')
    Halaman Data Petugas
@endsection

@section('headline')
    DAFTAR PETUGAS
@endsection

@section('content')
<div class="card shadow-sm rounded-2 border-3">
    {{-- HEADER CARD (Search dan Add) --}}
    <div class="card-header bg-white border-0 py-2 px-3">
        <div class="d-flex justify-content-between align-items-center">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="searchInput" placeholder="Cari NIM Mahasiswa...">
            <datalist id="datalistOptions">
                @foreach($petugas as $data)
                    <option value="{{ $data->nip_petugas }}">
                @endforeach
            </datalist>

           <a href="petugas/add" class="btn btn-primary btn-md d-flex align-items-center">
            <i class="fa fa-user-plus me-1"></i> Add
        </a>
        </div>
    </div>

    {{-- BODY CARD (TABEL) --}}
    <div class="card-body pt-1 px-3 pb-3">
        <table class="table table-striped" id="tabelPengajuan">
            <thead>
                <tr>
                    <th class="fs-4" scope="col">NO</th>
                    <th class="fs-4" scope="col">NIP PETUGAS</th>
                    <th class="fs-4" scope="col">NAMA PETUGAS</th>
                    <th class="fs-4" scope="col">JABATAN PETUGAS</th>
                    <th class="fs-4" scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $petugas as $data )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$data->nip_petugas}}</td>
                    <td>{{$data->nama_petugas}}</td>
                    <td>{{$data->jabatan_petugas}}</td>
                    <td>
                    <!-- Button Detail -->
                    <button class="btn btn-outline-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $data->id }}" title="Detail">
                        <i class="fa-solid fa-folder-open"></i>
                    </button>
                    <!-- Modal Detail -->
                    <div class="modal fade" id="modalDetail{{ $data->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $data->id }}">Detail Data Petugas</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tr><td>Nip Petugas</td><td>: {{ $data->nip_petugas }}</td></tr>
                                                            <tr><td>Nama Petugas</td><td>: {{ $data->nama_petugas }}</td></tr>
                                                            <tr><td>Jabatan Petugas</td><td>: {{ $data->jabatan_petugas }}</td></tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
									</div>
                    <button class="btn btn-outline-dark btn-sm" type="button">
                        <a class="nav-link" href="/petugas/edit/{{ $data->id }}">
                        <i class="fa-solid fa-pen"></i>
                        </a>
                    </button>
                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body m-3">
													<p class="mb-0">Yakin data a.n <strong> {{ $data->nama_petugas }} </strong>ingin dihapus ?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<form action="petugas/{{$data->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
												</div>
											</div>
										</div>
									</div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
                @stack('scripts')
            </tbody>
        </table>
    </div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('searchInput');
    const table = document.getElementById('tabelPengajuan');
    const rows = table.querySelectorAll('tbody tr');

    input.addEventListener('input', function () {
        const keyword = this.value.toLowerCase();

        rows.forEach(row => {
            const nim = row.cells[1].textContent.toLowerCase(); // kolom ke-2 = NIM
            if (!keyword || nim.includes(keyword)) {
                row.style.display = '';
                row.parentNode.insertBefore(row, row.parentNode.firstChild); // pindahkan ke atas
            } else {
                row.style.display = 'none';
            }
        });
    });
});
</script>
@endpush
@endsection

