@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Jenis Standar</h1>

    <div class="text-end">
        <a href="/jenis-standar/create" class="btn btn-success btn-sm">+ Tambah Jenis Standar</a>
    </div>

    @if ($jenisStandars->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th class="w-75">Nama</th>
                    <th class="action">Aksi</th>
                </tr>
                @foreach ($jenisStandars as $jenisStandar)
                    <tr class="text-dark">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jenisStandar->nama }}</td>
                        <td>
                            <a href="/jenis-standar/{{ $jenisStandar->slug }}/edit" class="btn btn-warning btn-sm my-1">
                                <img src="/img/edit.png" alt="Edit" class="img-fluid icon">
                            </a>
                            <form action="/jenis-standar/{{ $jenisStandar->slug }}" method="post" class="d-inline-block">
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
