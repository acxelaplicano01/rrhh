<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;
class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        Persona::factory()->count(50000)->create();
    }
}
