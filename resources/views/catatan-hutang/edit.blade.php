<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Fredy Nur Apriyanto">
  <title>Catatan Hutang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-4">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CATATAN HUTANG</a>
            </div>
        </nav>

        <div class="row mt-4">
            <div class="col-md-12 mb-4">
                <a href="{{ route('catatan-hutang.index') }}" class="btn btn-light btn-sm px-4"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>

            <div class="col-md-12">
                <form action="{{ route('catatan-hutang.update', $catatan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $catatan->nama }}">

                            @error('nama')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">KATEGORI</label>
                        <div class="col-sm-10">
                            <select name="kategori" class="form-control @error('kategori') is-invalid @enderror">
                                <option value="HUTANG" {{ $catatan->kategori == 'HUTANG' ? 'selected':'' }}>HUTANG</option>
                                <option value="BAYAR" {{ $catatan->kategori == 'BAYAR' ? 'selected':'' }}>BAYAR</option>
                            </select>

                            @error('kategori')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nominal" class="col-sm-2 col-form-label">NOMINAL</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" value="{{ $catatan->nominal }}">

                            @error('nominal')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-success px-4">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
