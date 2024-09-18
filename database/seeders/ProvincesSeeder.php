<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provincia::factory()->create([
            'province_name' => 'Ciudad de Buenos Aires',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Buenos Aires',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Santa Fe',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Entre Rios',
        ]);

        Provincia::factory()->create([
            'province_name' => 'La Pampa',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Cordoba',
        ]);

        Provincia::factory()->create([
            'province_name' => 'San Luis',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Mendoza',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Neuquen',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Rio Negro',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Chubut',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Santa Cruz',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Tierra del fuego e islas del atlantico sur',
        ]);

        Provincia::factory()->create([
            'province_name' => 'San Juan',
        ]);

        Provincia::factory()->create([
            'province_name' => 'La Rioja',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Catamarca',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Santiago del Estero',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Tucuman',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Salta',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Jujuy',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Chaco',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Formosa',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Corrientes',
        ]);

        Provincia::factory()->create([
            'province_name' => 'Misiones',
        ]);
    }
}
