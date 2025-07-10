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
                    <button class="btn btn-outline-dark btn-sm" type="button">
                        <a class="nav-link" href="/pengajuan/open/{{ $data->id }}">
                        <i class="fa-solid fa-folder-open"></i>
                        </a>
                    </button>
                    <button class="btn btn-outline-dark btn-sm" type="button">
                        <a class="nav-link" href="/pengajuan/edit/{{ $data->id }}">
                        <i class="fa-solid fa-pen"></i>
                        </a>
                    </button>
                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary">
										Primary
					</button>
                    <div class="modal fade" id="defaultModalPrimary" tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Default modal</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													<p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
														notifications, or completely custom content.</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
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

