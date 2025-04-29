<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyMonitoring;

class PropertyMonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyMonitoring::create([
            'property_id' => 1, // ID недвижимости (например, квартира в центре города)
            'status_report' => 'Объект в хорошем состоянии, требуется косметический ремонт.',
            'report_date' => '2025-04-01',
        ]);

        PropertyMonitoring::create([
            'property_id' => 2, // ID недвижимости (например, дом за городом)
            'status_report' => 'Проблем с объектом не выявлено, продолжать мониторинг.',
            'report_date' => '2025-04-15',
        ]);
    }
}
