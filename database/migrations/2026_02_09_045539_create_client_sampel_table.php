<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tims', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('client_sampel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klien')->nullable();
            $table->string('nama_brand')->nullable();
            $table->string('nama_produk')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_sampel');
        Schema::dropIfExists('tims');
    }
};
