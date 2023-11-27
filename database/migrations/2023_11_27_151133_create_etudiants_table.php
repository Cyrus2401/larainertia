<?php

use App\Models\NiveauScolaire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->integer('age');
            $table->foreignIdFor(NiveauScolaire::class)->constrained()->cascadeOnDelete();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(function(Blueprint $table){

            $table->dropConstrainedForeignIdFor(NiveauScolaire::class);

        });

        Schema::dropIfExists('etudiants');
    }
};
