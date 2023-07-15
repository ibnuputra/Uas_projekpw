@extends('admin.layout.appadmin')
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1>Form Edit Kategori</h1>

    @foreach ($kategoriProduk as $k)
        <form method="POST" action="{{ url('kategori/update/' . $k->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Kategori</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" value="{{ $k->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
