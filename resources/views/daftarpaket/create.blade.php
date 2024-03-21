@extends('adminlte::page')
@section('title', 'Tambah Daftar Paket')
@section('content_header')
<h1 class="m-0 text-dark">Tambah Daftar Paket</h1>
@stop
@section('content')
<form action="{{route('daftarpaket.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNama_Paket">Nama Paket</label>
                        <input type="text" class="form-control 
@error('nama_paket') is-invalid @enderror" id="exampleInputNama_Paket" placeholder="Masukkan Nama Paket" name="nama_paket" value="{{old('nama_paket')}}">
                        @error('nama_paket') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="diskon">ID Paket Wisata</label>
                        <div class="input-group">
                            <input type="hidden" name="id_paket_wisata" id="id_paket_wisata"
                                value="{{old('id_paket_wisata')}}">
                            <input type="text" class="form-control 
@error('diskon') is-invalid @enderror" placeholder="ID Paket Wisata" id="diskon"
                                name="diskon" value="{{old('diskon')}}"
                                aria-label="ID Paket WIsata" aria-describedby="cari" readonly>
                            <button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
                                data-bs-target="#staticBackdrop"></i>
                                Cari Data Paket</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputJumlah_Peserta">Jumlah Peserta</label>
                        <input type="text" class="form-control 
@error('jumlah_peserta') is-invalid @enderror" id="exampleInputJumlah_Peserta" placeholder="Masukkan Jumlah Peserta" name="jumlah_peserta"
                            value="{{old('jumlah_peserta')}}">
                        @error('jumlah_peserta') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHarga_Palet">Harga Paket</label>
                        <input type="text" class="form-control 
@error('harga_paket') is-invalid @enderror" id="exampleInputHarga_paket" placeholder="Masukkan Harga Paket" name="harga_paket"
                            value="{{old('harga_paket')}}">
                        @error('harga_paket') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('daftarpaket.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Paket Wisata</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <table class="table table-hover table-bordered table-stripped" id="example2">
                    <thead>
                        <tr style="background-color: #4C4C6D">
                            <th style="color:white;">No.</th>
                            <th style="color:white;">Nama Paket</th>
                            <th style="color:white;">Deskripsi</th>
                            <th style="color:white;">Fasilitas</th>
                            <th style="color:white;">Itinerary</th>
                            <th style="color:white;">Diskon</th>
                            <th style="color:white;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paketwisata as $key => $bs)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$bs->nama_paket}}</td>
                            <td>{{$bs->deskripsi}}</td>
                            <td>{{$bs->fasilitas}}</td>
                            <td>{{$bs->itinerary}}</td>
                            <td>{{$bs->diskon}}</td>
                            <td>
                                    <button type="button" class="btn btn-primary btn-xs" onclick="pilih('{{$bs->id}}', '{{$bs->diskon}}')" data-bs-dismiss="modal">
                                        Pilih
                                    </button>
                           </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    @stop
    @push('js')
    <script>
    $('#example2').DataTable({
        "responsive": true,
    });
    //Fungsi pilih untuk memilih data bidang studi dan mengirimkan data Bidang Studi dari Modal ke form tambah
    function pilih(id, paketwisata) {
        document.getElementById('id_paket_wisata').value = id
        document.getElementById('diskon').value = paketwisata
    }
    </script>
    @endpush

    