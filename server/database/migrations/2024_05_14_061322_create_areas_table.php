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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
        });

        DB::table('areas')->insert([
            ['nombre' => 'Administracion'],
            ['nombre' => 'Financiera'],
            ['nombre' => 'Compras'],
            ['nombre' => 'Infraestructura'],
            ['nombre' => 'Operacion'],
            ['nombre' => 'Talento Humano'],
            ['nombre' => 'Servicios Varios'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
};
