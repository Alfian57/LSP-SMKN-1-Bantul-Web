@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12"
            style="background-color: white;padding-top: 20px;padding-bottom: 20px;width: 96%;margin-left: 15px;padding-left: 2px;padding-right: 2px">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-md-12" style="padding-bottom: 20px;">
                            <h3 class="panel-title">SKEMA SERTIFIKASI LSP SMK NEGERI 1 BANTUL</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                            <tr>
                                <th class="text-center">Telusuri</th>
                                <th class="text-center">Skema Sertifikasi</th>
                                <th style="text-align: center;">Jumlah Unit</th>
                                <th class="text-center">Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">
                                    <a href="/detail1" class="btn btn-default btn-xs"><em class="fa fa-search"></em></a>
                                </td>
                                <td>Pemrograman Dasar</td>
                                <td style="text-align: center;">10</td>
                                <td>Klaster</td>
                            <tr>
                                <td align="center">
                                    <a href="/detail2" class="btn btn-default btn-xs"><em class="fa fa-search"></em></a>
                                </td>
                                <td>Pemrograman Web</td>
                                <td style="text-align: center;">12</td>
                                <td>Klaster</td>
                            <tr>
                                <td align="center">
                                    <a href="/detail3" class="btn btn-default btn-xs"><em class="fa fa-search"></em></a>
                                </td>
                                <td>Pemrograman Berorientasi Objek</td>
                                <td style="text-align: center;">13</td>
                                <td>Klaster</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-12" style="padding-top: 20px;">
                </div>
            </div>
        </div>
    </div>
@endsection
