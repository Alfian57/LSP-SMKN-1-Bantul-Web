@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Sub Unit Kompetensi</h1>

    <div class="text-end mt-5">
        <a href="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}/sub/create" class="btn btn-success btn-sm">+ Tambah
            Data</a>
    </div>

    <p class="text-dark mt-3">Judul Unit Kompetensi: {{ $unitKompetensi->judul }}</p>

    @if ($subs->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th class="w-75">Judul</th>
                    <th class="action">Aksi</th>
                </tr>
                @foreach ($subs as $sub)
                    <tr class="text-dark">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sub->judul }}</td>
                        <td>
                            <a href="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}/sub/{{ $sub->id }}/edit"
                                class="btn btn-warning btn-sm my-1">
                                <img src="/img/edit.png" alt="Edit" class="img-fluid icon">
                            </a>
                            <form action="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}/sub/{{ $sub->id }}"
                                method="post" class="d-inline-block">
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
<div class="text-end">
        <a href="/unit-kompetensi" class="btn btn-primary my-3">Back</a>
    </div>
@endsection
