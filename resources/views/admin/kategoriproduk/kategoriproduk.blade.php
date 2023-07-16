@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Kategori Produk</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ url('admin/kategoriproduk/create') }}" class="btn btn-primary">Tambah Produk</a>
                    @endif

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                {{-- karena data yg ditampilkan dalam produk controller adalah data array, maka untuk memanggil data array kita menggunakan foreach --}}
                                @foreach ($kategori_produk as $katprod)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $katprod->nama }}</td>
                                        <td>
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ url('admin/kategoriproduk/delete/' . $katprod->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        @include('admin.access_denied')
    @endif
@endsection
