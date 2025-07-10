@extends('layouts.template')
@section('title')
    Halaman Data Sertifikat
@endsection

@section('headline')
    DATA SERTIFIKAT
@endsection

@section('content')
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <input class="form-control me-2" style="max-width: 300px;" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
            @foreach($sertifikat as $data)
                <option value="{{ $data->nim_mahasiswa }}">
            @endforeach
            </datalist>

            <a href="sertifikat/add" class="btn btn-primary btn-md d-flex align-items-center">
            <i class="fa fa-user-plus me-1"></i> Add
            </a>
        </div>

            <div class="row g-3 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fs-4" scope="col">NO</th>
                            <th class="fs-4" scope="col">NIM MAHASISWA</th>
                            <th class="fs-4" scope="col">NO SERTIFIKAT</th>
                            <th class="fs-4" scope="col">ACTION</th>
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
                                <td> <button class="btn btn-outline-dark  btn-sm" type="button" id="button-addon2"><a class="nav-link"  href="/sertifikat/open"> <i class="fa-solid fa-folder-open"></i> </a> </button>
                                                      <button class="btn btn-outline-dark  btn-sm" type="button" id="button-addon2"><a class="nav-link"  href="/sertifikat/edit"> <i class="fa-solid fa-pen"></i> </a> </button>
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


