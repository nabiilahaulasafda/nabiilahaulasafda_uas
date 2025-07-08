@extends('layouts.template')
@section('title')
    Halaman Data Sertifikat
@endsection

@section('headline')
    DATA SERTIFIKAT
@endsection

@section('content')
            <h2 class=" float-start"> DAFTAR SERTIFIKAT </h2>
              <span class="float-end btn btn-primary text-end btn-md" type="button" id="button-addon2">
                <a class="nav-link" href="sertifikat/add"> <i class="fa fa-user-plus"></i> Add </a>
                </span>
        </div>
        <div class="card-body">
            <div class="row g-3 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-4" scope="col">NO</th>
                            <th class="fs-4" scope="col">NIM MAHASISWA</th>
                            <th class="fs-4" scope="col">NO SERTIFIKAT</th>
                            <th class="fs-4 text-end" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ( $sertifikat as $data ) --}}
                            <tr>
                                 <td> 1 </td>
                                <td> 1234567 </td>
                                <td> 12-34-2342</td>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                {{-- <td>{{$data->pengajuans_id}}</td> --}}
                                <td class="text-end"> <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/sertifikat/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                                                      <button class="btn btn-outline-dark" type="button" id="button-addon2"><a class="nav-link"  href="/sertifikat/edit"> <i class="fa-solid fa-pen"></i> </a> </button>
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


