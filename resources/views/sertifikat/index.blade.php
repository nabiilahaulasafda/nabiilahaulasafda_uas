@extends('layouts.template')
@section('title')
    Halaman Data Sertifikat
@endsection

@section('headline')
    DATA SERTIFIKAT
@endsection

@section('content')
<div class="card">
        <div class="card-header">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            @foreach($sertifikat as $data)
                <option value="{{ $data->no_sertifikat }}">
            @endforeach
            </datalist>

            <a href="/sertifikat/add" class="btn btn-primary btn-md d-flex align-items-center">
            <i class="fa fa-user-plus me-1"></i> Add
            </a>
        </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-4" scope="col">NO</th>
                            <th class="fs-4" scope="col">NO SERTIFIKAT</th>
                            <th class="fs-4" scope="col">NIM MAHASISWA</th>
                            <th class="fs-4" scope="col">NIP PETUGAS</th>
                            <th class="fs-4" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $sertifikat as $data )
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{$data->no_sertifikat}}</td>
                                <td>{{optional ($data->pengajuans)->nim_mahasiswa}}</td>
                                <td>{{optional ($data->petugass)->nip_petugas}}</td>
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
                                                            <tr><td>No Sertifikat</td><td>: {{ $data->no_sertifikat }}</td></tr>
                                                            <tr><td>Nip Petugas</td><td>: {{optional ($data->petugass)->nip_petugas}}</td></tr>
                                                            <tr><td>Nama Petugas</td><td>: {{optional ($data->petugass)->nama_petugas}}</td></tr>
                                                            <tr><td>Nim Mahasiswa</td><td>: {{optional ($data->pengajuans)->nim_mahasiswa}}</td></tr>
                                                            <tr><td>Nama Mahasiswa</td><td>: {{optional ($data->pengajuans)->nama_mahasiswa}}</td></tr>
                                                            <tr><td>File Sertifikat</td><td>: {{ $data->file_sertifikat }}</td></tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
									</div>
                                    <button class="btn btn-outline-dark  btn-sm" type="button" id="button-addon2"><a class="nav-link"  href="/sertifikat/edit/{{ $data->id }}"> <i class="fa-solid fa-pen"></i> </a> </button>
                                    <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body m-3">
													<p class="mb-0">Yakin data a.n <strong>{{optional ($data->pengajuans)->nim_mahasiswa}}</strong> ingin dihapus ?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<form action="sertifikat/{{$data->id}}" method="post">
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
            </tbody>
        </table>
    </div>
@endsection


