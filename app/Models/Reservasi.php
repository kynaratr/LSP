<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        'id_pelanggan',
        'id_daftar_paket',
        'tgl_reservasi_wisata',
        'harga',
        'jumlah_peserta',
        'diskon',
        'nilai_diskon',
        'total_bayar',
        'file_bukti_tf',
        'status_reservasi_wisata'
    ];
    // protected $dates = ['tgl_reservasi_wisata'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         $model->tgl_reservasi_wisata = now();
    //     });
    // }
    public function paketwisata(){
        return $this->belongsTo(Daftarpaket::class,'id_daftar_paket', 'id', 'nama_paket', 'jumlah_peserta', 'harga_paket', 'id_paket_wisata' );
    }

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class,'id_pelanggan', 'id', 'nama_lengkap');
    }
    public function paketwisata2()
    {
        return $this->belongsTo(PaketWisata::class, 'id_paket_wisata', 'id', 'diskon');
    }

}
