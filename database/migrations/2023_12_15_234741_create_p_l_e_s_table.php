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
        Schema::create('p_l_e_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->integer('arus_1');
            $table->float('arus_2');
            $table->float('rata_arus');
            $table->float('daya_1');
            $table->float('daya_2');
            $table->float('rata_daya');
            $table->float('rata_voltage');
            $table->integer('jam');
            $table->integer('hari');
            $table->integer('bulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_l_e_s');
    }
};
