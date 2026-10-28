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
        Schema::table('pembayaran', function(Blueprint $table): void{
            $table->id('idPembayaran');
            $table->string('buktiPembayaran');
            $table->enum('statusPembayaran',['menunggu','selesai']);
            $table->date('tglPembayaran');
            $table->integer('idPesanan')->unsigned();
            $table->foreign('idPesanan')->references('idPesanan')->on('pesanan');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
