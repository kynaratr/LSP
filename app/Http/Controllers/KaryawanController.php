<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\models\User;
class KaryawanController extends Controller
{
    public function index()
    { 
        //Menampilkan Semua Data Karyawan
        $karyawan = Karyawan::all();
        return view('karyawan.index', [ 
        'karyawan' => $karyawan
        ]);
    }

    public function create()
        { 
        //Menampilkan Form Tambah Karyawan
        return view( 
        'karyawan.create', [ 
        'users' => User::all() //Mengirimkan semua data User ke Modal pada halaman create
            ]);
        }

    public function store(Request $request)
        { 
        //Menyimpan Data Karyawan
        $request->validate([
        'nama_karyawan' => 'required|unique:karyawan,nama_karyawan', 
        'alamat'=> 'required',
        'no_hp'=> 'required',
        'jabatan'=> 'required',
        'id_user'=> 'required'
        ]);
        $array = $request->only([
        'nama_karyawan', 'alamat', 'no_hp', 'jabatan', 'id_user'
        ]);
        Karyawan::create($array);
        return redirect()->route('karyawan.index')->with('success_message', 'Berhasil menambah karyawan baru');
        }

    public function edit($id)
        { 
        //Menampilkan Form Edit
        $karyawan = Karyawan::find($id);
        if (!$karyawan) return redirect()->route('karyawan.index')->with('error_message', 'Karyawan dengan id = '.$id.'
        tidak ditemukan');
        return view('karyawan.edit', [ 
        'karyawan' => $karyawan,
        'users' => User::all() //Mengirimkan semua data User ke Modal pada halaman edit
        ]);
        } 

    public function update(Request $request, $id)
        { 
        //Mengedit Data Karyawan
        $request->validate([
            'nama_karyawan' => 'required|unique:karyawan,nama_karyawan,'.$id
        ]);
        $karyawan = Karyawan::find($id);
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_hp = $request->no_hp;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->id_user = $request->id_user;
        $karyawan->save();
        return redirect()->route('karyawan.index')->with('success_message', 'Berhasil mengubah Data Karyawan');
        }

    public function destroy(Request $request, $id)
        { 
            //Menghapus Karyawan
            $karyawan = Karyawan::find($id);
            
            // if ($id == $request->user()->id) return redirect()->route('karyawan.index')->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
            if ($karyawan) $karyawan->delete();
            return redirect()->route('karyawan.index')->with('success_message', 'Berhasil menghapus Karyawan');
        } 
        public function exportpdf(){
            $data = Karyawan::all();

            view()->share('data',$data);
            $pdf = PDF::loadview('karyawan-pdf');
            return $pdf->download('DataKaryawan.pdf');
        }
}
