@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Administrator</h1>

    <div class="text-end">
        <a href="/administrator/create" class="btn btn-success btn-sm">+ Tambah Administrator</a>
    </div>

    @if ($admins->isEmpty())
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
                @foreach ($admins as $admin)
                    <tr class="text-dark">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $admin->nama }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <a href="/administrator/{{ $admin->id }}/edit" class="btn btn-warning btn-sm my-1">
                                <img src="/img/edit.png" alt="Edit" class="img-fluid icon">
                            </a>
                            <form action="/administrator/{{ $admin->id }}" method="post" class="d-inline-block">
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
