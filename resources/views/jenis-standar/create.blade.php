@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center text-dark mb-5">Tambah Jenis Standar</h1>

    <form action="/jenis-standar" method="POST" class="text-dark">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jenis Standar</label>
            <input type="text" class="form-control text-dark @error('nama') is-invalid @enderror" id="nama"
                name="nama" placeholder="Masukan Nama Jenis Standar Disini" value="{{ old('nama') }}" required
                autofocus>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-sm mt-3">Selesai</button>
            </div>
        </div>
    </form>
@endsection
