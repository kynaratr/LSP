<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Pelanggan;
use App\Models\Daftarpaket;
use app\Models\User;

class Reservasio extends Controller
{
    public function index(){
        $reservasi = Reservasi::all();
        return view('reservasio.index', [
            'reservasi' => $reservasi
        ]);
    }

    public function edit($id)
    {
        //Menampilkan Form Edit
        $reservasi = reservasi::find($id);
        if (!$reservasi) return redirect()->route('reservasio.index')
            ->with('error_message', 'Data reservasi dengan id = ' . $id . ' tidak ditemukan');
        return view('reservasio.edit', [
            'reservasi' => $reservasi,
            'users' => User::all(),
            'daftarpaket' => Daftarpaket::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::find($id);
        $reservasi->status_reservasi_wisata = $request->status_reservasi_wisata;
        $reservasi->save();
        return redirect()->route('reservasio.index')->with('success_message', 'Pembayaran Telah di Validasi');
    }
}
