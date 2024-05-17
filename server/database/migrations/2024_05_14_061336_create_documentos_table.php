<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
        });

        DB::table('documentos')->insert([
            ['nombre' => 'Cedula de Ciudadania'],
            ['nombre' => 'Cedula de Extranjeria'],
            ['nombre' => 'Pasaporte'],
            ['nombre' => 'Permiso Especial'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
};
