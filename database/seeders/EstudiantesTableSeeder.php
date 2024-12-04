<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->truncate(); //VACIAR
       Estudiante::factory(10)->create();
    }
}
