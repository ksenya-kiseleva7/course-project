<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'sender_id' => 1, // ID отправителя (например, Иван Иванов)
            'receiver_id' => 2, // ID получателя (например, Анна Смирнова)
            'content' => 'Здравствуйте, у меня есть вопрос по вашей квартире.',
            'status' => 'отправлено',
        ]);

        Message::create([
            'sender_id' => 2,
            'receiver_id' => 1,
            'content' => 'Добрый день! Чем могу помочь?',
            'status' => 'отправлено',
        ]);

        Message::create([
            'sender_id' => 1,
            'receiver_id' => 3, // отправитель: инвестор, получатель: администратор
            'content' => 'Добрый день, есть ли какие-то новости по моим инвестициям?',
            'status' => 'отправлено',
        ]);
    }
}
