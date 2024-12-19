<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisiTable extends Migration
{
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_divisi', 100);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('divisi');
    }
}
