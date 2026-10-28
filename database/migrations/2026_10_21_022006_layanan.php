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
        Schema::table('layanan', function(Blueprint $table): void{
            $table->id('idLayanan');
            $table->string('namaLayanan');
            $table->string('deskripsiLayanan');
            $table->integer('jumlahJasa');
            $table->decimal('hargaLayanan');
            $table->enum('statusLayanan',['tersedia','tidak tersedia']);
            $table->integer('idClient')->unsigned();
            $table->foreign('idClient')->references('idClient')->on('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
