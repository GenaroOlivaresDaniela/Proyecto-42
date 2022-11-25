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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('telefono')->unique();
            $table->integer('matricula')->unique();
            $table->string('correo')->unique()->nullable();
            $table->string('contraseña');
            $table->string('img_perfil');
            $table->unsignedBigInteger('carrera_id')->unsigned();
            $table->unsignedBigInteger('type_id')->unsigned();
            $table->unsignedBigInteger('cuatri_id')->unsigned();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('type_id')->references('id')->on('typeusers');
            $table->foreign('cuatri_id')->references('id')->on('cuatrimestres');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
};
