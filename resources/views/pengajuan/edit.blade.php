<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <title>EDIT <span class="oi oi[data-glyph=account-login]"></span></title>
</head>
<body>
    <div class="container center col-6 ">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> EDIT DATA MAHASISWA </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/pengajuan/{{ $pengajuan->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim Mahasiswa</label>
                        <input type="text" value="{{ $pengajuan->nim_mahasiswa }}" name="nim_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" value="{{ $pengajuan->nama_mahasiswa }}" name="nama_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="text" type="date" value="{{ $pengajuan->tanggallahir_mahasiswa }}" name="tanggallahir_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" value="{{ $pengajuan->tempatlahir_mahasiswa }}" name="tempatlahir_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> HP Mahasiswa</label>
                        <input type="text" value="{{ $pengajuan->hp_mahasiswa }}" name="hp_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Mahasiswa</label>
                        <input type="email" value="{{ $pengajuan->email_mahasiswa }}" name="email_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Mahasiswa</label>
                        <input type="text" value="{{ $pengajuan->alamat_mahasiswa }}" name="alamat_mahasiswa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal Kampus</label>
                        <input type="text" value="{{ $pengajuan->asal_kampus }}" name="asal_kampus" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File Surat Permohonan</label>
                        <input type="file" value="{{ $pengajuan->file_suratpermohonan }}" accept="image/*" name="file_suratpermohonan" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/pengajuan">  Tutup  </a> </button>
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
