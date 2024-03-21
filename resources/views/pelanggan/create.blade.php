@extends('adminlte::page')
@section('title', 'Tambah Pelanggan')
@section('content_header')
<h1 class="m-0 text-dark">Tambah Pelanggan</h1>
@stop
@section('content')
<form action="{{ route('pelanggan.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control
@error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama lengkap" name="nama_lengkap"
                            value="{{ old('nama_lengkap') }}">
                        @error('nama_lengkap')
                        <span class="textdanger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Hp</label>
                        <input type="text" class="form-control
@error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor Hp" name="no_hp"
                            value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <span class="textdanger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control
@error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat"
                            value="{{ old('alamat') }}">
                        @error('alamat')
                        <span class="textdanger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        <input class="form-control @error('foto') is-invalid @enderror" type="file"  id="foto" name="foto" onchange="previewImage()">
                        @error('foto') <span class="textdanger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                        <label for="name">Id User</label>
                        <div class="input-group">
                        <input type="hidden" name="id_user" id="id_user" value="{{old('id_user')}}">
                        <input type="text" class="form-control
                        @error('name') is-invalid @enderror" placeholder="ID User"
                        id="name" name="name" value="{{old('name')}}" arialabel="Bidang Studi" aria-describedby="cari" readonly>
                        <button class="btn btn-warning" type="button"
                        data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop"></i>
                        Cari Data Id User</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-default">
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Users</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Aktif</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $bs)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$bs->name}}</td>
                                <td>{{$bs->email}}</td>
                                <td>{{$bs->level}}</td>
                                <td>{{$bs->aktif}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" onclick="pilih('{{$bs->id}}', '{{$bs->name}}')" data-bs-dismiss="modal">
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
    
    function pilih(id, bstud) {
        document.getElementById('id_user').value = id
        document.getElementById('name').value = bstud
    }
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
    </script>
    @endpush