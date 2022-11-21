@extends('layouts.main');

@section('content')
    <h1 class="text-center">Assesmen Mandiri</h1>

    @foreach ($unitKompetensis as $unitKompetensi)
        <div class="table-responsive mb-5">
            <table class="table">
                <tr>
                    <td class="w-50">Unit Kompetensi : </td>
                    <td colspan="4">{{ $unitKompetensi->kode_unit }} {{ $unitKompetensi->judul }}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Dapatkah Saya .......... ?</b></td>
                    <td><b>K</b></td>
                    <td><b>BK</b></td>
                    <td><b>Bukti Yang Relevan</b></td>
                </tr>
                @foreach ($unitKompetensi->sub_unit_kompetensi as $item)
                    <tr>
                        <td colspan="2">{{ $loop->iteration }}. {{ $item->judul }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{ $item->id }}" required>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{ $item->id }}" required>
                            </div>
                        </td>
                        <td>
                            <input type="file" class="form-control" name="{{ $item->id }}">
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach
@endsection
