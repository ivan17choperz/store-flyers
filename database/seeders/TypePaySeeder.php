<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_pays')->insert([
            [
                'status' => 'Efectivo',
            ],
            [
                'status' => 'Tarjeta',
            ]
        ]);
    }
}
