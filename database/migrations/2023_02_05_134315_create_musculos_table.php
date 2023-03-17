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
        Schema::create('musculos', function (Blueprint $table) {
            $table->id();
            
            $table->foreign('nombre_musculos_id')->references('id')->on('nombre_musculos')->onDelete('cascade');
            $table->unsignedBigInteger('nombre_musculos_id');
            
            $table->enum('genero',['Hombre', 'Mujer'])->default('Hombre');
            $table->enum('lado_cuerpo',['Frente', 'Dorso', 'Ambos'])->default('Frente');

            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->string('musculos_implicados')->nullable();
            $table->text('realizacion')->nullable();
            $table->text('comentarios')->nullable();
            $table->text('slug');

            $table->text('video')->nullable();
            $table->text('imagen')->nullable();

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
        Schema::dropIfExists('musculos');
    }
};
