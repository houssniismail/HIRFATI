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
            $table->string('image');
            $table->string('category');
            $table->unsignedBigInteger('bricoles_id');
            $table->foreign('category')->references('nom')->on('categorie');
            $table->foreign('bricoles_id')->references('id')->on('bricoles');
            $table->string('description');
            $table->boolean('disponible')->default(true);
            $table->date('date_de_creation');
            $table->unsignedBigInteger('users_id'); // Add user_id column
            $table->foreign('users_id')->references('id')->on('users') // Set user_id as a foreign key
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
