<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan')->default(true);
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_daftar_paket');
            $table->foreign('id_daftar_paket')->references('id')->on('daftar_paket')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('harga');
            $table->integer('jumlah_peserta');
            $table->decimal('diskon', 10,0);
            $table->float('nilai_diskon');
            $table->BigInteger('total_bayar');
            $table->text('file_bukti_tf');
            $table->enum('status_reservasi_wisata', ['pesan', 'dibayar', 'selesai']);
            $table->timestamps();
        });
        Schema::table('reservasi', function (Blueprint $table) {
            $table->dateTime('tgl_reservasi_wisata')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservasi', function (Blueprint $table) {
            $table->dropColumn('tgl_reservasi_wisata');
        });
        Schema::dropIfExists('reservasi');
    }
};
