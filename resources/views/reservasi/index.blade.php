@extends('adminlte::page')
@section('title', 'Reservasi')
@section('content_header')
    <h1 class="m-0 text-dark">Reservasi</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card overflow-scroll">
                <div class="card-body">
                
                    @can('pelanggan-only')
                    <a href="{{ route('reservasi.create') }}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    @endcan
                <div class="card-body ">
                <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="label" class="">Tanggal Mulai:</label>
                                <input type="datetime-local" class="form-control" id="tglawal" name="tglawal"
                                   >
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="label" class="">Tanggal Selesai:</label>
                                <input type="datetime-local" class="form-control" id="tglakhir" name="tglakhir"
                                    >
                            </div>
                            <div class="form-group mb-2">
                                <label for="status" class="">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="pesan">Pesan</option>
                                    <option value="dibayar">Dibayar</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                            <a href="" onclick="this.href='/laporanfilter/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value+ '/' + document.getElementById('status').value " target="_blank" class="btn btn-primary mb-2">
                        Filter Pdf
                    </a>
                        </form>
                        
                    <table class="table table-hover table-bordered
table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Paket</th>
                            <th>Tanggal Reservasi</th>
                            <th>Harga</th>
                            <th>Jumlah Peserta</th>
                            <th>Diskon</th>
                            <th>Nilai Diskon</th>
                            <th>Total Bayar</th>
                            <th>Status Reservasi</th>
                            @can('pelanggan-only')
                            <th>Opsi</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $bs)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td id={{$key+1}}>{{ $bs->pelanggan->nama_lengkap}}</td>
                                    <td id={{$key+1}}>{{ $bs->paketwisata->nama_paket}}</td>
                                    <td>{{ $bs->tgl_reservasi_wisata}}</td>
                                    <td>{{ $bs->harga}}</td>
                                    <td>{{ $bs->jumlah_peserta}}</td>
                                    <td>{{ $bs->diskon}}</td>
                                    <td>{{ $bs->nilai_diskon}}</td>
                                    <td>{{ $bs->total_bayar}}</td>
                                    <td>{{ $bs->status_reservasi_wisata}}</td>
                                    @can('pelanggan-only')
                                    <td>
                                        <a href="{{ route('reservasi.edit', $bs) }}" class="btn btn-primary btn-xs">
                                            Bayar
                                        </a>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

    </script>
@endpush
