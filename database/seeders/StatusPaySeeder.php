<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_pays')->insert(
            [
                [
                    'status_name' => 'Pendiente',
                ],
                [
                    'status_name' => 'Completado',
                ],
                [
                    'status_name' => 'Cancelado',
                ]
            ]
        );
    }
}
