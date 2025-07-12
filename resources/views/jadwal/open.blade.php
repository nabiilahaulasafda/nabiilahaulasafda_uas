<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>ADD</title>
</head>
<body>
    <div class="container center col-6">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> USER X </h2>
            </div>
            <div class="card-body">
                <div class="row g-3 ">
                        <div class="col mt-3 mx-3">
                           <form method="post" action="/jadwal/{{ $jadwal->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="row g-3">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nip Petugas</label>
                                        <input type="text" class="form-control" value="{{ $jadwal->petugass->nip_petugas ?? '-' }}" readonly>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nim Pengajuan</label>
                                        @foreach ($pengajuan as $nim)
                                            <input type="text" value="{{ $nim->nim_pengajuan }}" class="form-control" placeholder="{{ $nim->nim_pengajuan }}" readonly>
                                        @endforeach
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Mulai Magang</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->tgl_mulaimagang }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Selesai Magang</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->tgl_selesaimagang }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jadwal</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->jadwal }}" readonly>
                                    </div>
                                </div>

                                <div class="col mt-3 mx-3">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Senin</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->senin }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Selasa</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->selasa }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Rabu</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->rabu }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kamis</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->kamis }}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jumat</label>
                                        <input type="text" id="" class="form-control" placeholder="{{ $jadwal->jumat }}" readonly>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="/jadwal" class="btn btn-outline-secondary">Tutup</a>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </body>
                        </html>




