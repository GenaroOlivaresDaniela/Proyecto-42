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
        Schema::create('libroregistros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libro_id')->unsigned();
            $table->unsignedBigInteger('registro_id')->unsigned();

            $table->foreign('libro_id')->references('id')->on('libros');
            $table->foreign('registro_id')->references('id')->on('registros');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroregistros');
    }
};
