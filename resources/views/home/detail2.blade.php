@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 15px;">
        <div class="col-md-12" style="background: white;padding: 5px;border-bottom: 0px solid #ccc;">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-md-7">

                        </div>
                        <div class="col col-md-5 text-right">

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center" width="30%">Kode Unit</th>
                                <th class="text-center">Judul Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td align="center" style="width: 30%">LOG.0001.001.01</td>
                                <td>Melakukan Komunikasi Kerja timbal balik</td>
                            </tr>
                            <tr>
                                <td class="text-center">2.</td>
                                <td align="center" style="width: 30%">LOG.0001.002.01</td>
                                <td>Menerapkan prinsip-prinsip keselamatan dan kesehatan ke
                                    lingkunoan keria</td>
                            </tr>
                            <tr>
                                <td class="text-center">3.</td>
                                <td align="center" style="width: 30%">LOG.0001.004.01</td>
                                <td>Merencanakan tugas rutin</td>
                            </tr>
                            <tr>
                                <td class="text-center">4.</td>
                                <td align="center" style="width: 30%">LOG.0002.003.01</td>
                                <td>Melakukan Pekerjaan Yang Membutuhkan Kerjasama Tim</td>
                            </tr>
                            <tr>
                                <td class="text-center">5.</td>
                                <td align="center" style="width: 30%">TIK.OP01.002.01</td>
                                <td>Mengidentifikasi aspek kode etik dan HAKI dibidang TIK</td>
                            </tr>
                            <tr>
                                <td class="text-center">6.</td>
                                <td align="center" style="width: 30%">J.620100.004.02</td>
                                <td>Menggunakan Struktur Data</td>
                            </tr>
                            <tr>
                                <td class="text-center">7.</td>
                                <td align="center" style="width: 30%">J.620100.005.02</td>
                                <td>Mengimplementasikan User Interface</td>
                            </tr>
                            <tr>
                                <td class="text-center">8.</td>
                                <td align="center" style="width: 30%">J.620100.007.01</td>
                                <td>Mengimplementasikan Rancangan Entitas dan Keterkaitan Antar
                                    Entitas</td>
                            </tr>
                            <tr>
                                <td class="text-center">9.</td>
                                <td align="center" style="width: 30%">J.620100 009.01</td>
                                <td>Menggunakan Spesifikasi Program</td>
                            </tr>
                            <tr>
                                <td class="text-center">10.</td>
                                <td align="center" style="width: 30%">J.620100.012.01</td>
                                <td>Melakukan Pengaturan Software Tools Pemrograman</td>
                            </tr>
                            <tr>
                                <td class="text-center">11.</td>
                                <td align="center" style="width: 30%">J.620100.017.01</td>
                                <td>Mengimplementasikan Pemrograman Terstruktur</td>
                            </tr>
                            <tr>
                                <td class="text-center">12.</td>
                                <td align="center" style="width: 30%">J.620100.020 02</td>
                                <td>Menggunakan SQL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="text-end">
        <a href="{{ URL::previous() }}" class="btn btn-primary my-3">Back</a>
    </div>
@endsection
