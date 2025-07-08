<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <title>TAMBAH <span class="oi oi[data-glyph=account-login]"></span></title>
</head>
<body>
    <div class="container center col-6 ">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> DATA MAHASISWA </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/pengajuan" enctype="multipart/form-data">
                        @csrf
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nim Mahasiswa</label>
                        <input type="text" name="nim_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempatlahir_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> No Hp Mahasiswa</label>
                        <input type="text" name="hp_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Mahasiswa</label>
                        <input type="email" name="email_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Mahasiswa</label>
                        <input type="text" name="alamat_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal Kampus</label>
                        <input type="text" name="asal_kampus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Kampus">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File Surat Permohonan</label>
                        <input type="file" accept="image/*" name="file_suratpermohonan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/pengajuan">  Tutup  </a> </button>
                        <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
