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
        Schema::create('petugass', function (Blueprint $table) {
            $table->id();
            $table->string('nm_petugas');
            $table->string('alamat_petugas');
            $table->string('noHp_petugas');
            $table->integer('umur_petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugass');
    }
};
