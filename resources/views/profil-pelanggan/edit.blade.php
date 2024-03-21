@extends('adminlte::page')
@section('title', 'Edit Pelanggan')
@section('content_header')
<h1 class="m-0 text-dark">Edit Profil Pelanggan</h1>
@stop
@section('content')
<form action="{{route('profil-pelanggan.update', $pelanggan)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control
@error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="{{$pelanggan->nama_lengkap ??
old('nama_lengkap')}}">
                        @error('nama_lengkap') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="text" class="form-control
@error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nama
lengkap" name="no_hp" value="{{$pelanggan->no_hp ?? old('no_hp')}}">
                        @error('no_hp') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control
@error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan
No Telepon/HP" name="alamat" value="{{$pelanggan->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto" class="formlabel">Foto</label>
                        <img src="/storage/{{$pelanggan->foto}}" class="imgthumbnail d-block" name="tampil" alt="..."
                            width="15%" id="tampil">
                        <input class="form-control @error('foto') isinvalid @enderror" type="file" id="foto"
                            name="foto">
                        @error('foto') <span class="textdanger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_user">Users</label>
                        <div class="input-group">
                            <input type="hidden" name="id_user" id="id_user" value="{{$pelanggan->fpel->id ?? old('id_user')}}">
                            <input type="text" class="form-control @error('users') is-invalid @enderror" placeholder="Users" id="users" name="users" value="{{$pelanggan->fpel->email ?? old('email')}}" aria-label="Users" ariadescribedby="cari" readonly>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btnprimary">Simpan</button>
                    <a href="{{route('profil-pelanggan.index')}}" class="btn
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