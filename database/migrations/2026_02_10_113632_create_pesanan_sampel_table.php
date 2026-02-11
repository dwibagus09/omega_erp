<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan_sampel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->string('produk');
            $table->integer('jumlah');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan_sampel');
    }
};
