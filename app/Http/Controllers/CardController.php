<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class CardController extends Controller
{
    // public function index(){
    //     $pelanggan = Pelanggan::all();
    //     return view('card.index', [
    //         'pelanggan' => $pelanggan
    //     ]);
    // }

    
   
    public function card() {
    // $pelanggan = $query->get();
    $pdf = PDF::loadView('card.create', );
    $pdf->setPaper('A4', 'portrait');
    return $pdf->stream('Card.pdf');
}

    
}
