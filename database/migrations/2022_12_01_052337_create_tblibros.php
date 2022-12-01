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
        Schema::create('tblibros', function (Blueprint $table) {
            $table->bigIncrements('idLibro');
            $table->string('titulo');
            $table->integer('ISBN');
            $table->integer('paginas');
            $table->unsignedBigInteger('autorId');
            $table->string('editorial');
            $table->string('email');
            $table->timestamps();
            $table->foreign('autorId')->references('idAutor')->on('tbautores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblibros');
    }
};
