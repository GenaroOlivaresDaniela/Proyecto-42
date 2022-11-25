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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_prest');
            $table->date('fecha_devol');
            $table->integer('dias_pres');
            $table->unsignedBigInteger('usuario_id')->unsigned();
            $table->unsignedBigInteger('libro_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('libro_id')->references('id')->on('libros');
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
        Schema::dropIfExists('registros');
    }
};
