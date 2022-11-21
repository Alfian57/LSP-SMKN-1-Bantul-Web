@extends('layouts.main')

@section('content')
    <form action="/permohonan-kompetensi" method="GET">
        <h3>Pilih Salah Satu Mata Pelajaran</h3>
        <select class="form-select" name="mapel" required>
            @foreach ($mataPelajarans as $mataPelajaran)
                <option value="{{ $mataPelajaran->slug }}">{{ $mataPelajaran->nama }}</option>
            @endforeach
        </select>
        @if ($mataPelajarans->isEmpty())
            <div class="text-danger">
                Mata Pelajaran Masih Kosong
            </div>
        @endif
        <h6 class="mt-3">Persyaratan dasar uji kompetensi adalah:</h6>
        <p>Raport dan Rekomendasi dari guru mata pelajaran</p>
        <div class="text-end">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Selanjutnya</button>
        </div>
    </form>
@endsection
