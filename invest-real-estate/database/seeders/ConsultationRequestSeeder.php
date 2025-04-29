<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConsultationRequest;

class ConsultationRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConsultationRequest::create([
            'user_id' => 1, // ID пользователя (например, Иван Иванов)
            'agent_id' => 2, // ID агента (например, Анна Смирнова)
            'message' => 'Здравствуйте, хочу узнать подробности по дому в Подмосковье.',
            'status' => 'отправлен',
        ]);

        ConsultationRequest::create([
            'user_id' => 2, // ID агента
            'agent_id' => 3, // ID администратор
            'message' => 'Есть ли возможность добавить еще несколько объектов в вашу платформу?',
            'status' => 'отвечен',
        ]);
    }
}
