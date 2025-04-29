<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'agent_id' => 2,  // ID агента
            'title' => 'Квартира в центре города',
            'description' => 'Современная квартира с видом на парк.',
            'price' => 15000000,
            'location' => 'Москва, ул. Тверская',
            'status' => 'активен',
        ]);

        Property::create([
            'agent_id' => 2,
            'title' => 'Дом за городом',
            'description' => 'Большой дом с участком в 10 соток.',
            'price' => 35000000,
            'location' => 'Подмосковье, г. Зеленоград',
            'status' => 'активен',
        ]);
    }
}
