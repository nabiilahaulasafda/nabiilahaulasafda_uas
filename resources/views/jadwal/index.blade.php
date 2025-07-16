@extends('layouts.template')
@section('title')
    Halaman Data Jadwal
@endsection

@section('headline')
    DAFTAR JADWAL
@endsection

@section('content')
<div class="card">
        <div class="card-header">

        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            @foreach($jadwal as $data)
                <option value="{{optional ($data->pengajuans)->nim_mahasiswa}}">
            @endforeach
            </datalist>

            <a href="jadwal/add" class="btn btn-primary btn-md d-flex align-items-center">
            <i class="fa fa-user-plus me-1"></i> Add
            </a>
        </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-4" scope="col">NO</th>
                            <th class="fs-4" scope="col">NIM MAHASISWA</th>
                            <th class="fs-4" scope="col">TANGGAL MULAI</th>
                            <th class="fs-4" scope="col">TANGGAL SELESAI</th>
                            <th class="fs-4" scope="col">ACTION</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ( $jadwal as $data )
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{optional ($data->pengajuans)->nim_mahasiswa}}</td>
                                <td>{{$data->tgl_mulaimagang}}</td>
                                <td>{{$data->tgl_selesaimagang}}</td>
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
                                                            <tr><td>Nim Mahasiswa</td><td>: {{optional ($data->pengajuans)->nim_mahasiswa}}</td></tr>
                                                            <tr><td>Nama Mahasiswa</td><td>: {{optional ($data->pengajuans)->nama_mahasiswa}}</td></tr>
                                                            <tr><td>Tanggal Mulai Magang</td><td>: {{ $data->tgl_mulaimagang }}</td></tr>
                                                            <tr><td>Tanggal Selesai Magang</td><td>: {{ $data->tgl_selesaimagang }}</td></tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
									</div>
                                     <button class="btn btn-outline-dark  btn-sm" type="button" id="button-addon2"><a class="nav-link"  href="/jadwal/edit/{{ $data->id }}"> <i class="fa-solid fa-pen"></i> </a> </button>
                                     <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body m-3">
													<p class="mb-0">Yakin data a.n {{optional ($data->pengajuans)->nim_mahasiswa}} ingin dihapus ?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<form action="jadwal/{{$data->id}}" method="post">
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


