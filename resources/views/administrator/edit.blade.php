@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center text-dark mb-5">Ubah Administrator</h1>

    <form action="/administrator/{{ $admin->id }}" method="POST" class="text-dark">
        @csrf
        @method('put')
        <input type="hidden" name="old_email" value="{{ $admin->email }}">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control text-dark @error('nama') is-invalid @enderror" id="nama"
                name="nama" placeholder="Masukan Nama Disini" value="{{ old('nama', $admin->nama) }}" required autofocus>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control text-dark @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Masukan Email Disini" value="{{ old('email', $admin->email) }}" required>
            @error('email')
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
