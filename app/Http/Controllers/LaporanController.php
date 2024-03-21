<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use App\Models\Pelanggan;
use App\Models\DaftarPaket;
use app\Models\User;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $reservasi = Reservasi::all();
        return view('laporan.index', [
            'reservasi' => $reservasi
        ]);
    }

    
   
    public function laporanf($tglawal = null, $tglakhir = null, $status = null) {
    $query = Reservasi::query();

    if ($tglawal) {
        $query->where('tgl_reservasi_wisata', '>=', $tglawal);
    }
    if ($status !== null) {
        $query->where('status_reservasi_wisata', $status);
    }

    if ($tglakhir) {
        $query->where('tgl_reservasi_wisata', '<=', $tglakhir);
    }

   

    $reservasi = $query->get();

    $pdf = PDF::loadView('laporan.create', compact('reservasi'));
    $pdf->setPaper('A4', 'portrait');
    return $pdf->stream('laporan.pdf');
}

    
}
