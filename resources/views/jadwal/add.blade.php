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
                           <form action="/jadwal" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col mt-3 mx-3">
            <div class="mb-3">
                <label class="form-label">Nip Petugas</label>
                <select name="petugas" class="form-control">
                    <option value="">-Pilih-</option>
                    @foreach ($petugas as $item1)
                        <option value="{{ $item1->id }}">{{ $item1->nip_petugas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nim Mahasiswa</label>
                <select name="pengajuan" class="form-control">
                    <option value="">-Pilih-</option>
                    @foreach ($pengajuan as $item2)
                        <option value="{{ $item2->id }}">{{ $item2->nim_mahasiswa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Mulai Magang</label>
                <input type="date" name="tgl_mulaimagang" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Selesai Magang</label>
                <input type="date" name="tgl_selesaimagang" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Jadwal</label>
                <input type="text" name="jadwal" class="form-control">
            </div>
        </div>

        <div class="col mt-3 mx-3">
            <div class="mb-3">
                <label class="form-label">Senin</label>
                <input type="text" name="senin" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Selasa</label>
                <input type="text" name="selasa" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Rabu</label>
                <input type="text" name="rabu" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Kamis</label>
                <input type="text" name="kamis" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumat</label>
                <input type="text" name="jumat" class="form-control">
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
