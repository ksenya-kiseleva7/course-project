<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserActivity;

class UserActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserActivity::create([
            'user_id' => 1, // ID пользователя (например, Иван Иванов)
            'activity_type' => 'регистрация',
            'activity_date' => '2025-04-01 12:00:00',
            'details' => 'Пользователь зарегистрирован на платформе.',
        ]);

        UserActivity::create([
            'user_id' => 2, // ID пользователя (например, Анна Смирнова)
            'activity_type' => 'создание объекта',
            'activity_date' => '2025-04-01 14:30:00',
            'details' => 'Создан новый объект недвижимости: Квартира в центре города.',
        ]);

        UserActivity::create([
            'user_id' => 3, // ID администратора
            'activity_type' => 'обновление статуса инвестиции',
            'activity_date' => '2025-04-05 09:00:00',
            'details' => 'Статус инвестиции изменен на "активная".',
        ]);
    }
}
