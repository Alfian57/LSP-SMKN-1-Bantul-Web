@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Unit Kompetensi</h1>

    <div class="text-end">
        <a href="/unit-kompetensi/create" class="btn btn-success btn-sm">+ Tambah Unit Kompetensi</a>
    </div>

    @if ($unitKompetensis->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th>Kode Unit</th>
                    <th>Judul</th>
                    <th>Jenis Standar</th>
                    <th class="action">Aksi</th>
                </tr>
                @foreach ($unitKompetensis as $unitKompetensi)
                    <tr class="text-dark">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $unitKompetensi->kode_unit }}</td>
                        <td>{{ $unitKompetensi->judul }}</td>
                        <td>{{ $unitKompetensi->jenis_standar->nama }}</td>
                        <td>
                            <a href="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}/sub"
                                class="btn btn-primary btn-sm my-1">
                                <img src="/img/show.png" alt="Detail" class="img-fluid icon">
                            </a>
                            <a href="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}/edit"
                                class="btn btn-warning btn-sm my-1">
                                <img src="/img/edit.png" alt="Edit" class="img-fluid icon">
                            </a>
                            <form action="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}" method="post"
                                class="d-inline-block">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm my-1"
                                    onclick="return confirm('ingin menghapus data ini ?')">
                                    <img src="/img/delete.png" alt="Hapus" class="icon">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif

@endsection
