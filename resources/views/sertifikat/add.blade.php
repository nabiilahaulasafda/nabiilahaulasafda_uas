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
    <div class="container center col-6 col-sm-4">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> USER X </h2>
            </div>
            <div class="card-body">
                <div class="row g-3 ">
                        <div class="col mt-3 mx-3">
                            <form method="POST" action="/sertifikat" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">No Sertifikat</label>
                                    <input type="text" name="no_sertifikat" id="" class="form-control" placeholder="">
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nim Mahasiswa</label>
                                    <select name="pengajuan" id="" class="form-control">
                                        <option value="">-Pilih-</option>
                                        @foreach ($pengajuan as $item2)
                                            <option value="{{$item2->id}}">{{$item2->nim_mahasiswa}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nip Petugas</label>
                                    <select name="petugas" id="" class="form-control">
                                        <option value="">-Pilih-</option>
                                        @foreach ($petugas as $item1)
                                            <option value="{{$item1->id}}">{{$item1->nip_petugas}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"> File Sertifikat </label>
                                    <input type="file" accept="image/*" name="file_sertifikat" id="" class="form-control" placeholder="">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/sertifikat"> Tutup </a> </button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
</body>
</html>
