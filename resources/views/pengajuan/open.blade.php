<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>OPEN</title>
</head>
<body>
    <div class="container center col-6">
            <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> DATA MAHASISWA </h2>
            </div>
            <div class="card-body">
                <form method="post" action="/pengajuan/{{ $pengajuan->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->nim_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->nama_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->tanggallahir_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->tempatlahir_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> HP Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->hp_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->email_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Mahasiswa</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->alamat_mahasiswa }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal Kampus</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->asal_kampus }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File Surat Permohonan</label>
                        <input type="text" id="" class="form-control" placeholder="{{ $pengajuan->file_suratpermohonan }}" readonly>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/pengajuan">  Tutup  </a> </button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
