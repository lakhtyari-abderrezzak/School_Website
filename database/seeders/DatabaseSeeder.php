<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Student::factory(5)->create();
        Teacher::factory(5)->create();
        Subject::factory(8)->create();

        User::create([
            'name' => 'Abdo',
            'email' => 'l@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'principal'
        ]);
    }
}
