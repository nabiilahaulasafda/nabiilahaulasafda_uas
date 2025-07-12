@extends('layouts.template')
@section('title')
    Halaman Data Jadwal
@endsection

@section('headline')
    DAFTAR JADWAL
@endsection

@section('content')
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            @foreach($jadwal as $data)
                <option value="{{ $data->pengajuans->nim_mahasiswa }}">
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
                                <td>{{$data->pengajuans->nim_mahasiswa}}</td>
                                <td>{{$data->tgl_mulaimagang}}</td>
                                <td>{{$data->tgl_selesaimagang}}</td>
                                <td> <button class="btn btn-outline-dark btn-sm" type="button">
                                        <a class="nav-link" href="/jadwal/open/{{ $data->id }}">
                                        <i class="fa-solid fa-folder-open"></i>
                                        </a>
                                     </button>
                                     <button class="btn btn-outline-dark  btn-sm" type="button" id="button-addon2"><a class="nav-link"  href="/jadwal/edit"> <i class="fa-solid fa-pen"></i> </a> </button>
                                     <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus $data->id }}" title="Hapus">
                                        <i class="fa-solid fa-trash"></i>
                                     </button>
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


