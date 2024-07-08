<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleado_habilidad', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('habilidad_id');

            $table->foreign('empleado_id')
                  ->references('id')
                  ->on('empleados')
                  ->onDelete('cascade');

            $table->foreign('habilidad_id')
            ->references('id')
            ->on('habilidads')
            ->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_habilidad');
    }
};
