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
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Karyawan</h1>

<table id="customers">
  <tr>
    <th>No.</th>
    <th>Nama Karyawan</th>
    <th>ALamat</th>
    <th>Nomor Handphone</th>
    <th>Jabatan</th>
  </tr>
  @php
  $no=1;
  @endphp   
  @foreach($data as $key => $bs)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$bs->nama_karyawan}}</td>
    <td>{{$bs->alamat}}</td>
    <td>{{$bs->no_hp}}</td>
    <td>{{$bs->jabatan}}</td>
  </tr>
  @endforeach

  
</table>

</body>
</html>


