<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perjalanans', function (Blueprint $table) {
            $table->id();
            $table->char('noSuratTugas');
            $table->char('noSPPD');
            $table->date('tanggalSurat');
            $table->date('tanggalBerangkat');
            // $table->foreignId('id_badan') -> constrained()->onDelete('restrict') -> onUpdate('restrict');
            $table->char('devisi');
            $table->string('nama');
            $table->char('prihal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_perjalanans');
    }
};
