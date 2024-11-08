<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // create_tasks_table.php
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre de la tâche
            $table->text('description'); // Description de la tâche
            $table->dateTime('due_date'); // Date d'échéance
            $table->boolean('status')->default(false); // Statut (complétée ou non)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Clé étrangère pour l'utilisateur
            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
