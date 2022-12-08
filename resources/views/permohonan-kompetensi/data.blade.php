@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">Data Sertifikasi</h1>

    <table class="table text-dark mb-3">
        <tr>
            <td rowspan="2">Skema Sertifikasi (KKNI/Okupasi/Klaster)</td>
            <td>Judul</td>
            <td>:</td>
            <td>SKEMA  SERTIFIKASI  KKNI  LEVEL  II PADA KOMPETENSI  KEAHLIAN REKAYASA  PERANGKAT  LUNAK
                (Klaster Pemrograman Berorientasi Objek)
            </td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>5.7.3</td>
        </tr>
        <tr>
            <td rowspan="5" colspan="2">Tujuan Asesmen</td>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="1">
                    <label class="form-check-label" for="1">
                        Sertifikasi
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="2">
                    <label class="form-check-label" for="2">
                        Sertifikasi Ulang
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="3">
                    <label class="form-check-label" for="3">
                        Pengakuan Serifikasi Terkini (PKT)
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="4">
                    <label class="form-check-label" for="4">
                        Rekognisi Pembelajaran Lampau
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="5">
                    <label class="form-check-label" for="5">
                        Lainnya
                    </label>
                </div>
            </td>
        </tr>
    </table>


    <h3 class="mt-5">Daftar Unit Kompetensi</h3>
    @if ($unitKompetensis->isEmpty())
        @include('components.data-kosong')
    @else
        <table class="table text-dark text-center">
            <tr class="table table-primary">
                <th>No.</th>
                <th>Kode Unit</th>
                <th>Judul Unit</th>
                <th>Jenis Standar (Standar Khusus/Standar Internasional/SKKNI)</th>
            </tr>
            @foreach ($unitKompetensis as $unitKompetensi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $unitKompetensi->kode_unit }}</td>
                    <td>{{ $unitKompetensi->judul }}</td>
                    <td>{{ $unitKompetensi->jenis_standar->nama }}</td>
                </tr>
            @endforeach
        </table>
    @endif
    <div class="text-end">
            <button type="submit" class="btn btn-primary my-3" href="/bukti">Selanjutnya</button>
        </div>
@endsection
