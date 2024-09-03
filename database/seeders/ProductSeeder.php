<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
            [
                'title' => '¿Como está su corazón?.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Se requiere personal.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'La verdadera Fe.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Sexo libre.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Halloween.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'No puedo borrar la historia de mi vida.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'El virus mortal.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'No rechaces este llamado.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Nueva era.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => '¿Cuantos años tiene?',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'La verdadera historia de navidad.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'El diablo no existe.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'No cambie de religión.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Dios mío',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'La clave del exito.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Hay dos ofertas',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => '¿Es usted un hijo de Dios?.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => '¿Eres prudente?',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Su único error.',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'Un seguro seguro',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => '¿Para qué murió jesus?',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => 'El legado de María',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
            [
                'title' => '¿Estás listo para el próximo terremoto?',
                'description' => '1 Paquete con 100/unds',
                'price' => 6500.00
            ],
        ]);
    }
}
