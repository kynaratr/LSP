<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #87CBB9;
  color: white;
}
</style>
</head>
<body>

<h1 style="text-align: center;">Data Reservasi</h1>

<table class="table table-hover table-bordered table-stripped" id="customers">
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
                        </tr>
  @php
  $no=1;
  @endphp   
  @foreach($data as $key => $bs)
  <tr>
                            <td>{{$no++}}</td>
                            <td id={{$key+1}}>{{ $bs->pelanggan->nama_lengkap}}</td>
                                    <td id={{$key+1}}>{{ $bs->daftarpaket->nama_paket}}</td>
                                    <td>{{ $bs->tgl_reservasi_wisata}}</td>
                                    <td>{{ $bs->harga}}</td>
                                    <td>{{ $bs->jumlah_peserta}}</td>
                                    <td>{{ $bs->diskon}}</td>
                                    <td>{{ $bs->nilai_diskon}}</td>
                                    <td>{{ $bs->total_bayar}}</td>
                                    <td>{{ $bs->status_reservasi_wisata}}</td>
                            
                          
  @endforeach

  
</table>

</body>
</html>


