@extends('layouts.template')
@section('title')
    Halaman Data Jadwal
@endsection

@section('headline')
    DAFTAR JADWAL
@endsection

@section('content')
            <h2 class=" float-start"> DAFTAR JADWAL </h2>
              <span class="float-end btn btn-primary text-end btn-md" type="button" id="button-addon2">
                <a class="nav-link" href="jadwal/add"> <i class="fa fa-user-plus"></i> Add </a>
                </span>
        </div>
        <div class="card-body">
            <div class="row g-3 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-4" scope="col">NO</th>
                            <th class="fs-4" scope="col">NIM</th>
                            <th class="fs-4" scope="col">TANGGAL MULAI</th>
                            <th class="fs-4" scope="col">TANGGAL SELESAI</th>
                            <th class="fs-4 text-end" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ( $jadwal as $data ) --}}
                            <tr>
                                 <td> 1 </td>
                                <td> 1234567 </td>
                                <td> 16-28-2006 </td>
                                <td> 20-28-2005</td>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                {{-- <td>{{$data->pengajuans_id}}</td> --}}
                                <td class="text-end"> <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/jadwal/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                                                      <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/jadwal/edit"> <i class="fa-solid fa-pen"></i> </a> </button>
                                </td>
                            </tr>
                    </tbody>
                     {{-- @empty
                            tidak ada data
                     @endforelse --}}
                </table>

            </div>
        </div>
    </div>
</div>


@endsection


