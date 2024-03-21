@extends('adminlte::page')
@section('title', 'Edit Pelanggan')
@section('content_header')
<h1 class="m-0 text-dark">Edit Profil Pelanggan</h1>
@stop
@section('content')
<form action="{{route('pelanggan.update', $pelanggan)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control
@error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama lengkap" name="nama_lengkap"
                            value="{{$pelanggan->nama_lengkap ?? old('nama_lengkap') }}">
                        @error('nama_lengkap')
                        <span class="textdanger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Hp</label>
                        <input type="text" class="form-control
@error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor Hp" name="no_hp"
                            value="{{$pelanggan->no_hp ?? old('no_hp') }}">
                        @error('no_hp')
                        <span class="textdanger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control
@error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat"
                            value="{{$pelanggan->alamat ?? old('alamat') }}">
                        @error('alamat')
                        <span class="textdanger">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for="foto" class="form-label">Foto</label>
                            @if($pelanggan->foto)
                            <img src="{{ asset('storage/'. $pelanggan->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="width: 100px;">
                            @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @endif
                            <input class="form-control @error('foto') is-invalid @enderror" type="file"  id="foto" name="foto" value="{{$pelanggan->foto ?? old('foto')}}" onchange="previewImage()">
                            @error('foto') <span class="textdanger">{{$message}}</span> @enderror
                            <div class="form-group">
                        <label for="name">Id User</label>
                    <div class="input-group">
                        <input type="hidden" name="id_user" id="id_user" value="{{$pelanggan->fpel->id ?? old('id_user')}}">
                        <input type="text" class="form-control
                        @error('name') is-invalid @enderror" placeholder="ID User"
                        id="name" name="name" value="{{$pelanggan->fpel->name ?? old('name')}}" arialabel="Bidang Studi" aria-describedby="cari" readonly>
                        <button class="btn btn-warning" type="button"
                        data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop"></i>
                        Cari Data Id User</button>
                        </div>
                    </div>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pelanggan.index')}}" class="btn
btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    @stop
    @push('js')
    <script>
        function previewImage() {
    const foto = document.querySelector('#foto');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const ofReader = new FileReader();
    ofReader.readAsDataURL(foto.files[0]);

    ofReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
 }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#tampil').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#foto").change(function() {
        readURL(this);
        //$('#hasil').show();
    });
    </script>
    @endpush