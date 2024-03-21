@extends('adminlte::page')
@section('title', 'Edit Karyawan')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Karyawan</h1>
@stop
@section('content')
<form action="{{route('karyawan.update', $karyawan)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" class="form-control
@error('nama_karyawan') is-invalid @enderror"
                                id="nama_karyawan" placeholder="Nama Karyawan" name="nama_karyawan" value="{{$karyawan->nama_karyawan ?? old('nama_karyawan') }}">
                            @error('nama_karyawan')
                                <span class="textdanger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control
@error('alamat') is-invalid @enderror"
                                id="alamat" placeholder="Alamat" name="alamat" value="{{$karyawan->alamat ??  old('alamat') }}">
                            @error('alamat')
                                <span class="textdanger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputno_hp">Nomor Hp</label>
                            <input type="number" class="form-control
@error('no_hp') is-invalid @enderror" id="no_hp"
                                placeholder="Nomor Hp" name="no_hp" value="{{$karyawan->no_hp ?? old('no_hp') }}">
                            @error('no_hp')
                                <span class="textdanger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="exampleInputjabatan">Jabatan</label>
                        <select class="form-control @error('jabatan') is-invalid @enderror" id="exampleInputjabatan"
                            name="jabatan">
                            <option value="administrasi" @if($karyawan->jabatan ==
                                'administrasi' || old('jabatan') == 'administrasi')selected @endif>Administrasi</option>
                            <option value="operator" @if($karyawan->jabatan
                                == 'operator' || old('jabatan') == 'operator')selected
                                @endif>Operator</option>
                            <option value="pemilik" @if($karyawan->jabatan ==
                                'pemilik' || old('jabatan') == 'pemilik')selected @endif>Pemilik</option>
                        </select>
                        @error('jabatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                <div class="form-group">
                    <label for="users">ID User</label>
                <div class="input-group">
                    <input type="hidden" name="id_user" id="id_user"
                        value="{{$karyawan->karyawan->id ?? old('id_user')}}">
                    <input type="text" class="form-control 
@error('email') is-invalid @enderror" placeholder="ID User" id="email"
                        name="email" value="{{$karyawan->karyawan->email ?? old('email')}}"
                        aria-label="ID User" aria-describedby="cari" readonly>
                    <button class="btn btn-warning" type="button"  data-bs-toggle="modal" id="cari"
                        data-bs-target="#staticBackdrop"></i>
                        Cari Data Pelanggan</button>
                </div>
            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('karyawan.index') }}" class="btn btn-default">
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
                            <td id={{$key+1}}>{{$bs->email}}</td>
                            <td id={{$key+1}}>{{$bs->level}}</td>
                            <td id={{$key+1}}>{{$bs->aktif}}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-xs" onclick="pilih('{{$bs->id}}', '{{$bs->email}}')" data-bs-dismiss="modal">
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
            });
            function pilih(id, users) {
        document.getElementById('id_user').value = id
        document.getElementById('email').value = users
    }
        </script>
    @endpush