<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('administradores')->truncate();

        DB::table('administradores')->insert([
            [
                'email' => 'admin1@example.com',
                'user_id' => 11
            ],
            [
                'email' => 'admin2@example.com',
                'user_id' => 12
            ],
        ]);

    }
}
