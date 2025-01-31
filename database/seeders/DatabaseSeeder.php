<?php

namespace Database\Seeders;

use App\Models\Administration;
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
        Subject::factory(8)->create();
        Student::factory(80)->create();
        Teacher::factory(25)->create();
        Administration::factory(4)->create();

        User::create([
            'name' => 'Abdo',
            'email' => 'l@gmail.com',
            'password' => bcrypt(12),
            'role' => 'principal'
        ]);
    }
}
