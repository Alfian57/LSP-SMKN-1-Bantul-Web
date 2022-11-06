@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center text-dark mb-5">Ubah Mata Pelajaran</h1>

    <form action="/mata-pelajaran/{{ $mataPelajaran->slug }}" method="POST" class="text-dark">
        @method('put')
        @csrf
        <input type="hidden" name="nama_lama" value="{{ $mataPelajaran->nama }}">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mata Pelajaran</label>
            <input type="text" class="form-control text-dark @error('nama') is-invalid @enderror" id="nama"
                name="nama" placeholder="Masukan Nama Mata Pelajaran Disini"
                value="{{ old('nama', $mataPelajaran->nama) }}" required autofocus>
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
