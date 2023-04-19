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
        Schema::create('bricoles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('image');
            $table->float('prix');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->boolean('disponible')->default(true);
            $table->date('date_de_creation');
            $table->date('date_de_demission');
            $table->string('vill');
            $table->string('adress');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bricoles');
    }
};
