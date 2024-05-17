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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
    $table->string('p_apellido', 20);
    $table->string('s_apellido', 20);
    $table->string('p_nombre', 20);
    $table->string('o_nombre', 50)->nullable();
    $table->unsignedBigInteger('id_pais');
    $table->foreign('id_pais')->references('id')->on('paises');
    $table->unsignedBigInteger('id_tipo_documento');
    $table->foreign('id_tipo_documento')->references('id')->on('documentos');
    $table->string('nro_documento', 20);
    $table->string('email', 300);
    $table->date('fecha_ingreso');
    $table->unsignedBigInteger('id_area');
    $table->foreign('id_area')->references('id')->on('areas');
    $table->unsignedBigInteger('id_estado');
    $table->foreign('id_estado')->references('id')->on('estados');
    $table->timestamp('fecha_registro')->useCurrent();
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
        Schema::dropIfExists('empleados');
    }
};
