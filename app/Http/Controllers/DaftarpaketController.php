<?php

namespace App\Http\Controllers;
use App\Models\Daftarpaket;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class DaftarpaketController extends Controller
{
    public function index()
    { 
        //Menampilkan Semua Data Daftar Paket
        $daftarpaket = Daftarpaket::all();
        return view('daftarpaket.index', [ 
        'daftarpaket' => $daftarpaket
        ]);
    }
    public function create()
        { 
        //Menampilkan Form Tambah Karyawan
        return view( 
        'daftarpaket.create', [ 
        'paketwisata' => Paketwisata::all() //Mengirimkan semua data User ke Modal pada halaman create
            ]);
        }

    public function store(Request $request)
        { 
        //Menyimpan Data Karyawan
        $request->validate([
        'nama_paket' => 'required|unique:daftar_paket,nama_paket', 
        'id_paket_wisata'=> 'required',
        'jumlah_peserta'=> 'required',
        'harga_paket'=> 'required'
        ]);
        $array = $request->only([
        'nama_paket', 'id_paket_wisata', 'jumlah_peserta', 'harga_paket',
        ]);
        Daftarpaket::create($array);
        return redirect()->route('daftarpaket.index')->with('success_message', 'Berhasil menambah Daftar Paket baru');
        }
        public function edit($id)
        { 
        //Menampilkan Form Edit
        $daftarpaket = Daftarpaket::find($id);
        if (!$daftarpaket) return redirect()->route('daftarpaket.index')->with('error_message', 'Daftar Paket dengan id = '.$id.'
        tidak ditemukan');
        return view('daftarpaket.edit', [ 
        'daftarpaket' => $daftarpaket,
        'paketwisata' => Paketwisata::all() //Mengirimkan semua data User ke Modal pada halaman edit
        ]);
        } 

    public function update(Request $request, $id)
        { 
        //Mengedit Data Karyawan
        $request->validate([
            'nama_paket' => 'required|unique:daftar_paket,nama_paket,'.$id
        ]);
        $daftarpaket = Daftarpaket::find($id);
        $daftarpaket->nama_paket = $request->nama_paket;
        $daftarpaket->id_paket_wisata = $request->id_paket_wisata;
        $daftarpaket->jumlah_peserta = $request->jumlah_peserta;
        $daftarpaket->harga_paket = $request->harga_paket;
        $daftarpaket->save();
        return redirect()->route('daftarpaket.index')->with('success_message', 'Berhasil mengubah Data Daftar Paket');
        }
        public function destroy(Request $request, $id)
        { 
            //Menghapus Karyawan
            $daftarpaket = Daftarpaket::find($id);
            
            // if ($id == $request->user()->id) return redirect()->route('karyawan.index')->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
            if ($daftarpaket) $daftarpaket->delete();
            return redirect()->route('daftarpaket.index')->with('success_message', 'Berhasil menghapus Daftar Paket');
        } 

}
