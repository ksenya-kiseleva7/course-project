<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::query()->delete();

        User::create([
            'role' => 'инвестор',
            'name' => 'Иван Иванов',
            'email' => 'ivan@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'role' => 'агент',
            'name' => 'Анна Смирнова',
            'email' => 'anna@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'role' => 'администратор',
            'name' => 'Дмитрий Дьяков',
            'email' => 'dmitry@example.com',
            'password' => bcrypt('password123'),
        ]);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
