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
                  <h2> DATA PETUGAS </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/petugas" enctype="multipart/form-data">
                        @csrf
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nip Petugas</label>
                        <input type="text" name="nip_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nip Petugas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Petugas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jabatan Petugas</label>
                        <input type="text" name="jabatan_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan Petugas">
                    </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/petugas">  Tutup  </a> </button>
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
