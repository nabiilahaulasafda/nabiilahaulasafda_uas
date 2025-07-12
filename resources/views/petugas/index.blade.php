@extends('layouts.template')
@section('title')
    Halaman Data Petugas
@endsection

@section('headline')
    DAFTAR PETUGAS
@endsection

@section('content')
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            @foreach($petugas as $data)
                <option value="{{ $data->nip_petugas }}">
            @endforeach
            </datalist>

            <a href="petugas/add" class="btn btn-primary btn-md d-flex align-items-center">
            <i class="fa fa-user-plus me-1"></i> Add
            </a>
        </div>

        <table class="table table-striped">
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
                    <button class="btn btn-outline-dark btn-sm" type="button">
                        <a class="nav-link" href="/petugas/open/{{ $data->id }}">
                        <i class="fa-solid fa-folder-open"></i>
                        </a>
                    </button>
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
													<p class="mb-0">Yakin data a.n {{ $data->nama_petugas }} ingin dihapus ?</p>
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
            </tbody>
        </table>
    </div>
@endsection

