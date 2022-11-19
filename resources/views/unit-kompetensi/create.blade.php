@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center text-dark mb-5">Tambah Unit Kompetensi</h1>

    <form action="/unit-kompetensi" method="POST" class="text-dark">
        @csrf
        <div class="mb-3">
            <label for="kode_unit" class="form-label">Kode Unit</label>
            <input type="text" class="form-control text-dark @error('kode_unit') is-invalid @enderror" id="kode_unit"
                name="kode_unit" placeholder="Masukan Kode Unit Disini" value="{{ old('kode_unit') }}" required autofocus>
            @error('kode_unit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control text-dark @error('judul') is-invalid @enderror" id="judul"
                name="judul" placeholder="Masukan Judul Disini" value="{{ old('judul') }}" required>
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_standar_id" class="form-label">Jenis Standar</label>
            <select class="form-select @error('jenis_standar_id') is-invalid @enderror" name="jenis_standar_id"
                id="jenis_standar_id" required>
                @foreach ($jenisStandars as $jenisStandar)
                    <option value="{{ $jenisStandar->id }}">{{ $jenisStandar->nama }}</option>
                @endforeach
            </select>
            @error('jenis_standar_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-success btn-sm mt-3">Selesai</button>
        </div>
    </form>
@endsection
