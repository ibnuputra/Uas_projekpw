@extends('admin.layout.appadmin')
@section('content')

    {{-- Ngebatasin konten untuk dikses --}}
    @if (Auth::user()->role != 'pelanggan')
        <h1 class="mt-4">Kategori</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Kategori</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                @if (Auth::user()->role == 'admin')
                    <a class="btn btn-primary" href="{{ url('kategori/create') }}">Create</a>
                @endif
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kategoriProduk as $k)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>
                                    {{-- tombol edit --}}
                                    <a href="{{ url('kategori/edit/' . $k->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- tombol delete --}}
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ url('kategori/delete/' . $k->id) }}" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kategori?')">Delete</a>
                                    @endif
                                </td>
                            </tr>
                            @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    @else
        @include('admin.access_denied')
    @endif

@endsection
