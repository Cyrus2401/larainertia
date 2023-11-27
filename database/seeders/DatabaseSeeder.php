<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Etudiant;
use App\Models\NiveauScolaire;
use Illuminate\Database\Seeder;
use Database\Seeders\NiveauScolaireSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(NiveauScolaireSeeder::class);
        
        \App\Models\Etudiant::factory(10)->create();

    }
}
