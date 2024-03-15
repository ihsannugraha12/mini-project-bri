<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_asisten');
            $table->string('teaching_role');
            $table->string('kelas');
            $table->string('materi');
            $table->date('date');
            $table->time('start', $precision = 0)->nullable(true);
            $table->time('end', $precision = 0)->nullable(true);
            $table->integer('duration');
            $table->integer('id_code');
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
        Schema::dropIfExists('absensi');
    }
}
