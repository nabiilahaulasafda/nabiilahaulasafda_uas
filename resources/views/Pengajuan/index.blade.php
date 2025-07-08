@extends('layouts.template')
@section('title')
    Halaman Data Pengajuan
@endsection

@section('headline')
    DAFTAR PENGAJUAN
@endsection

@section('content')
              <h2 class=" float-start"> DAFTAR PENGAJUAN </h2>
              <span class="float-end btn btn-primary text-end btn-md" type="button" id="button-addon2">
                <a class="nav-link" href="pengajuan/add"> <i class="fa fa-user-plus"></i> Add </a>
                </span>
        </div>
        <div class="card-body row g-2 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-4" scope="col">NO</th>
                            <th class="fs-4" scope="col">NIM</th>
                            <th class="fs-4" scope="col">NAMA</th>
                            <th class="fs-4" scope="col">EMAIL</th>
                            <th class="fs-4 text-end" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $pengajuan as $data )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$data->nim_mahasiswa}}</td>
                                <td>{{$data->nama_mahasiswa}}</td>
                                <td>{{$data->email_mahasiswa}}</td>
                                <td class="text-end"> <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/pengajuan/open/{{ $data->id }}"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                                                      <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/pengajuan/edit/{{ $data->id }}"> <i class="fa-solid fa-pen"></i> </a> </button>
                                </td>
                            </tr>
                        @empty
                            tidak ada data
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection


