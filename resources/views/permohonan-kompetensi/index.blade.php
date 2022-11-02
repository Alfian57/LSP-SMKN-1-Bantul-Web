@extends('layouts.main')

@section('content')
    @if (!request('mapel'))
        <form action="/permohonan-kompetensi" method="GET">
            <h3>Pilih Salah Satu Mata Pelajaran</h3>
            <select class="form-select" name="mapel" required>
                <option value="1">Pemrograman Berorientasi Objek</option>
            </select>
            <h6 class="mt-3">Persyaratan dasar uji kompetensi adalah:</h6>
            <p>Raport dan Rekomendasi dari guru mata pelajaran</p>
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-sm mt-3">Selanjutnya</button>
            </div>
        </form>
    @else
        <h1 class="text-center mb-5">Biodata Diri</h1>
        <form action="/permohonan-kompetensi/data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold text-dark">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Lengkap"
                    autofocus required>
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label fw-bold text-dark">No KTP</label>
                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Masukan Nomor KTP"
                    required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label fw-bold text-dark">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                    placeholder="Masukan Tempat Lahir" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label fw-bold text-dark">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                    placeholder="Masukan Tanggal Lahir" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Jenis Kelamin</label>
                <br>
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="laki-laki"
                    checked>
                <label class="form-check-label" for="laki">
                    Laki-Laki
                </label>
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
            <div class="mb-3">
                <label for="kebangsaan" class="form-label fw-bold text-dark">Kebangsaan</label>
                <input type="text" class="form-control" name="kebangsaan" id="kebangsaan"
                    placeholder="Masukan Kebangsaan" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold text-dark">Alamat</label>
                <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" rows="5"
                    required></textarea>
            </div>
            <div class="mb-3">
                <label for="kode_pos" class="form-label fw-bold text-dark">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Masukan Kode Pos"
                    required>
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label fw-bold text-dark">No Telepon</label>
                <input type="text" class="form-control" name="no_telepon" id="no_telepon"
                    placeholder="Masukan No Telepon" required>
            </div>
            <div class="mb-3">
                <label for="pendidikan" class="form-label fw-bold text-dark">Kualifikasi Pendidikan</label>
                <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                    placeholder="Masukan Kualifikasi Pendidikan" required>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary my-3">Selanjutnya</button>
            </div>
        </form>
    @endif
@endsection
