@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center text-dark mb-5">Edit Sub Unit Kompetensi</h1>

    <p class="text-dark mt-3">Judul Unit Kompetensi: {{ $unitKompetensi->judul }}</p>

    <form action="/unit-kompetensi/{{ $unitKompetensi->kode_unit }}/sub/{{ $subUnitKompetensi->id }}" method="POST"
        class="text-dark">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Sub Unit Kompetensi</label>
            <input type="text" class="form-control text-dark @error('judul') is-invalid @enderror" id="judul"
                name="judul" placeholder="Masukan Judul Sub Unit Kompetensi"
                value="{{ old('judul', $subUnitKompetensi->judul) }}" required autofocus>
            @error('judul')
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
