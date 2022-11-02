@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">Bukti Kelengkapan Pemohon</h1>

    <table class="table text-dark text-center">
        <tr>
            <td rowspan="2">No</td>
            <td rowspan="2">Bukti Persyaratan Dasar</td>
            <td colspan="2">Ada</td>
            <td rowspan="2">Tidak Ada</td>
        </tr>
        <tr>
            <td>Memenuhi Syarat</td>
            <td>Tidak Memenuhi Syarat</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Surat keterangan telah menyelesaikan semua mata pelajaran</td>
            <td>
                <input class="form-check-input" type="radio" name="1">
            </td>
            <td>
                <input class="form-check-input" type="radio" name="1">
            </td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Salinan sertifikat atau surat keterangan prakerin</td>
            <td>
                <input class="form-check-input" type="radio" name="2">
            </td>
            <td>
                <input class="form-check-input" type="radio" name="2">
            </td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Salinan rapot pada kompetensi terkait</td>
            <td>
                <input class="form-check-input" type="radio" name="3">
            </td>
            <td>
                <input class="form-check-input" type="radio" name="3">
            </td>
            <td></td>
        </tr>
    </table>
@endsection
