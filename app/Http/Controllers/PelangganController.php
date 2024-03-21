<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Pelanggan;
use App\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PelangganController extends Controller
{
    public function index()
    { 
        //Menampilkan Semua Data Pelanggan
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', [ 
        'pelanggan' => $pelanggan
        ]);
    }

    public function create(){
        //Menampilkan Form Tambah Pelanggan
       return view('pelanggan.create', [ 
        'users' => User::all() //Mengirimkan semua data User ke Modal pada halaman create
            ]);
       }
   public function store(
       Request $request){
        //Menyimpan Data Pelanggan
       $request->validate([
       'nama_lengkap' => 'required|unique:pelanggan,nama_lengkap',
       'no_hp' => 'required',
       'alamat' => 'required',
       'foto' => 'required|image|file|max:2048',
       'id_user'=> 'required'
       ]);
       $array = $request->only([
       'nama_lengkap',
       'no_hp',
       'alamat',
       'foto',
       'id_user'
       ]);
       $array['foto'] = $request->file('foto')->store('Foto');
       $tambah= Pelanggan::create($array);
       if($tambah) $request->file('foto')->store('Foto');
       return redirect()->route('pelanggan.index')->with('success_message', 'Berhasil menambah Pelanggan');
       }
       public function edit($id)
        { 
        //Menampilkan Form Edit
        $pelanggan = Pelanggan::find($id);
        if (!$pelanggan) return redirect()->route('pelanggan.index')->with('error_message', 'Pelanggan dengan id = '.$id.'
        tidak ditemukan');
        return view('pelanggan.edit', [ 
        'pelanggan' => $pelanggan,
        'users' => User::all() //Mengirimkan semua data User ke Modal pada halaman edit
        ]);
        } 

    public function update(Request $request, $id)
        { 
        //Mengedit Data Karyawan
        $request->validate([
            'nama_lengkap' => 'required|unique:pelanggan,nama_lengkap,'.$id,
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto' => $request->file('foto') != null ? 'image|file|max:2048' : '',
            // 'id_user'  => 'required'
        ]);
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama_lengkap = $request->nama_lengkap;
        $pelanggan->no_hp = $request->no_hp;
        // $pelanggan->alamat = $request->alamat;
        if($request->file('Foto') != null){
            unlink("storage/" . $paketwisata->foto);
            $paketwisata->foto = $request->file('Foto')->store('Foto Pelanggan');
            }
        $pelanggan->id_user = $request->id_user;
        $pelanggan->save();
        return redirect()->route('pelanggan.index')->with('success_message', 'Berhasil mengubah Data Pelanggan');
        }
        public function destroy(Request $request, $id)
        { 
            //Menghapus Karyawan
            $pelanggan = Pelanggan::find($id);
            
            // if ($id == $request->user()->id) return redirect()->route('pelanggan.index')->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
            if ($pelanggan) $pelanggan->delete();
            return redirect()->route('pelanggan.index')->with('success_message', 'Berhasil menghapus Data Pelanggan');
        } 

    
}
