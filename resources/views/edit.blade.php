<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @include('include.style')


  </head>
  <body>

        <h1>Edit Peserta</h1>
<div class="container">
    <div class="row">
    <div class="col">
    <form action="/update-siswa" method="POST">
    @csrf

    <input type="text" class="form-control" id="exampleInputNama" name="id" value="{{$data->id}}" hidden required>
<div class="mb-3">
    <label for="exampleInputname" class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" id="exampleInputname" name="name" value="{{$data->name}}" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Nis</label>
    <input type="text" class="form-control" id="exampleInputname" name="nis" value="{{$data->nis}}" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputname" name="kelas" value="{{$data->kelas}}"required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">no_handphone</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="no_handphone" value="{{$data->no_handphone}}" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="{{$data->alamat}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">hobi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="hobi" value="{{$data->hobi}}">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <a href="/siswa"><button type="button" class="btn btn-secondary"><i class="bi bi-reply-fill"></button></i></a>
  <button type="submit" class="btn btn-primary">Submit</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </form>
    </div>
</div>
</div>
  </body>
</html>