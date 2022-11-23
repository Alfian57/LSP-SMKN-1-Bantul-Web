@extends('layouts.dashboard')

@section('content')

    <h1 class="text-center">Peserta</h1>

    <div class="text-end">
        <a href="/peserta/create" class="btn btn-success btn-sm">+ Tambah Peserta</a>
    </div>

    @if ($pesertas->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th>No KTP</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th class="action">Aksi</th>
                </tr>
                @foreach ($pesertas as $peserta)
                    <tr class="text-dark">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $peserta->no_ktp }}</td>
                        <td>{{ $peserta->nama }}</td>
                        <td>{{ $peserta->no_telepon }}</td>
                        <td>
                            <a href="/peserta/{{ $peserta->id }}/edit" class="btn btn-warning btn-sm my-1">
                                <img src="/img/edit.png" alt="Edit" class="img-fluid icon">
                            </a>
                            <form action="/peserta/{{ $peserta->id }}" method="post" class="d-inline-block">
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
