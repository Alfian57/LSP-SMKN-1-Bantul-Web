@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Siswa</h1>

    <div class="text-end">
        <a href="/siswa/create" class="btn btn-success btn-sm">+ Tambah Siswa</a>
    </div>

    @if ($siswas->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle">
                <tr class="bg-dark text-white">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th class="action">Aksi</th>
                </tr>
                @foreach ($siswas as $siswa)
                    <tr class="text-dark">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->email }}</td>
                        <td>
                            <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm my-1">
                                <img src="/img/edit.png" alt="Edit" class="img-fluid icon">
                            </a>
                            <form action="/siswa/{{ $siswa->id }}" method="post" class="d-inline-block">
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
