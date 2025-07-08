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
                            <form class="p-3">
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">No Sertifikat</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nim Mahasiswa</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nip Petugas</label>
                                    <input type="text" id="" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"> File Sertifikat </label>
                                    <input type="file" accept="image/*" id="" class="form-control" placeholder="">
                                </div>
                                <div class="text-end">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="">  Upload  </a> </button>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/sertifikat">  Tutup  </a> </button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>
