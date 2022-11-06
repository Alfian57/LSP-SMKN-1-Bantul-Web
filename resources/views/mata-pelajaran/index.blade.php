@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Mata Pelajaran</h1>

    <div class="text-end">
        <a href="/mata-pelajaran/create" class="btn btn-success btn-sm">+ Tambah Mata Pelajaran</a>
    </div>

    @if ($mataPelajarans->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle text-dark">
                <tr class="bg-primary">
                    <th>#</th>
                    <th class="w-75">Nama</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($mataPelajarans as $mataPelajaran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mataPelajaran->nama }}</td>
                        <td>
                            <a href="/mata-pelajaran/{{ $mataPelajaran->slug }}/edit" class="btn btn-warning btn-sm my-3">
                                Edit
                            </a>
                            <form action="/mata-pelajaran/{{ $mataPelajaran->slug }}" method="post" class="d-inline-block">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm my-3"
                                    onclick="return confirm('ingin menghapus data ini ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif

@endsection
