@extends('layouts.template')
@section('title')
    Halaman Data Pengajuan
@endsection

@section('headline')
    DAFTAR PENGAJUAN
@endsection

@section('content')
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            @foreach($pengajuan as $data)
                <option value="{{ $data->nim_mahasiswa }}">
            @endforeach
            </datalist>

            <a href="pengajuan/add" class="btn btn-primary btn-md d-flex align-items-center">
            <i class="fa fa-user-plus me-1"></i> Add
            </a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="fs-4" scope="col">NO</th>
                    <th class="fs-4" scope="col">NIM MAHASISWA</th>
                    <th class="fs-4" scope="col">NAMA MAHASISWA</th>
                    <th class="fs-4" scope="col">EMAIL</th>
                    <th class="fs-4" scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $pengajuan as $data )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$data->nim_mahasiswa}}</td>
                    <td>{{$data->nama_mahasiswa}}</td>
                    <td>{{$data->email_mahasiswa}}</td>
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
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $data->id }}">Detail Data Mahasiswa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tr><td>Nim Mahasiswa</td><td>: {{ $data->nim_mahasiswa }}</td></tr>
                                                            <tr><td>Nama Mahasiswa</td><td>: {{ $data->nama_mahasiswa }}</td></tr>
                                                            <tr><td>Tanggal Lahir</td><td>: {{ $data->tanggallahir_mahasiswa }}</td></tr>
                                                            <tr><td>Tempat Lahir</td><td>: {{ $data->tempatlahir_mahasiswa }}</td></tr>
                                                            <tr><td>No Hp</td><td>: {{ $data->hp_mahasiswa }}</td></tr>
                                                            <tr><td>Email Mahasiswa</td><td>: {{ $data->email_mahasiswa }}</td></tr>
                                                            <tr><td>Alamat Mahasiswa</td><td>: {{ $data->alamat_mahasiswa }}</td></tr>
                                                            <tr><td>Asal Kampus</td><td>: {{ $data->asal_kampus }}</td></tr>
                                                            <tr><td>File Surat Permohonan</td><td>: {{ $data->file_suratpermohonan }}</td></tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
									</div>
                    <button class="btn btn-outline-dark btn-sm" type="button">
                        <a class="nav-link" href="/pengajuan/edit/{{ $data->id }}">
                        <i class="fa-solid fa-pen"></i>
                        </a>
                    </button>
                     <!-- Button Hapus -->
                    <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <!-- Modal Hapus -->
                    <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body m-3">
													<p class="mb-0">Yakin data a.n <strong>{{ $data->nama_mahasiswa }} </strong> ingin dihapus ?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<form action="pengajuan/{{$data->id}}" method="post">
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

            {{-- @foreach ($pengajuan as $data)
            <!-- Modal Konfirmasi Hapus -->
            <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content border-danger">
                    <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Yakin ingin menghapus data <strong>{{ $data->nama_mahasiswa }}</strong> (NIM: {{ $data->nim_mahasiswa }})?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <form action="/pengajuan/delete/{{ $data->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            @endforeach --}}

@endsection

