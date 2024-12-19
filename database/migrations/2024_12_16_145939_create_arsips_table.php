<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipTable extends Migration
{
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_divisi');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->enum('type', ['folder', 'file']);
            $table->string('judul', 200);
            $table->text('deskripsi')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('id_divisi')->references('id_divisi')->on('divisi')->onDelete('cascade');
            $table->foreign('parent_id')->references('id_arsip')->on('arsip')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arsip');
    }
}
