<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rak_id')->constrained()->onDelete('cascade');
            $table->float('suhu');
            $table->float('kadar_air');
            $table->integer('berat');
            $table->string('status', 50)->default('BELUM');
            $table->string('hari', 11)->default('0');

            $table->integer('waktu_pengeringan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
