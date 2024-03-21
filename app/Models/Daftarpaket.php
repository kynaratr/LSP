<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarpaket extends Model
{
    use HasFactory;

    protected $table = 'daftar_paket'; 
    protected $fillable = [ 
    'nama_paket', 
    'id_paket_wisata',
    'jumlah_peserta', 
    'harga_paket',
    ];

    public function paketwisata2(){
        return $this->belongsTo(PaketWisata::class, 'id_paket_wisata', 'id', 'diskon');
        }
}
