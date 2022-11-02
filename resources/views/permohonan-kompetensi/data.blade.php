@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">Data Sertifikasi</h1>

    <table class="table text-dark mb-3">
        <tr>
            <td rowspan="2">Skema Sertifikasi (KKNI/Okupasi/Klaster)</td>
            <td>Judul</td>
            <td>:</td>
            <td>Judul 1</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>no</td>
        </tr>
        <tr>
            <td rowspan="5" colspan="2">Tujuan Asesmen</td>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Sertifikasi
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Sertifikasi Ulang
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Pengakuan Serifikasi Terkini (PKT)
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Rekognisi Pembelajaran Lampau
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Lainnya
                    </label>
                </div>
            </td>
        </tr>
    </table>


    <h3 class="mt-5">Daftar Unit Kompetensi</h3>
    <table class="table text-dark text-center">
        <tr class="table table-primary">
            <th>No.</th>
            <th>Kode Unit</th>
            <th>Judul Unit</th>
            <th>Jenis Standar (Standar Khusus/Standar Internasional/SKKNI)</th>
        </tr>
        <tr>
            <td>1</td>
            <td>LOG.0001.002.01</td>
            <td>Menerapkan prinsip-prinsip keselamatan dan kesehatan kerja di lingkungan kerja</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>2</td>
            <td>LOG.OO02.001.01</td>
            <td>Menerapakan Sistem Mutu</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>3</td>
            <td>TIK.OP01.002.01</td>
            <td>Mengidentifikasi aspek kode Etik dan HAKI dibidang TIK </td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>4</td>
            <td>J.620100.005.02</td>
            <td>Mengimplementasikan User Interface</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>5</td>
            <td>J.620100.010.01</td>
            <td>Menerapkan Perintah Eksekusi Bahasa, Pemrograman Berbasis, Teks, Graflk, dan Multimedia</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>6</td>
            <td>J.620100.012.01</td>
            <td>Melakukan Pengaturan Software Tools Pemrograman</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>7</td>
            <td>J.620100.018.02</td>
            <td>Mengimplementasikan Pemrograman Berorientasi Objek</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>8</td>
            <td>J.620100.020.02</td>
            <td>Menggunakan SQL</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>9</td>
            <td>J.620100.023.02</td>
            <td>Membuat Dokumen Kode Program</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>10</td>
            <td>J.620100.030.02</td>
            <td>Menerapkan Pemrograman Multimedia</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>11</td>
            <td>J.620100.033.02</td>
            <td>Melaksanakan Pengujian Unit Program</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>12</td>
            <td>J.620100.041.01</td>
            <td>Melaksanakan Konfigurasi Perangkat Lunak Sesuai Environment Development, Staging, Production</td>
            <td>SKKNI</td>
        </tr>
        <tr>
            <td>13</td>
            <td>J.620100.046.01</td>
            <td>Melakukan Logging Aplikasi</td>
            <td>SKKNI</td>
        </tr>
    </table>
@endsection
