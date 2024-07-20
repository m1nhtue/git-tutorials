<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(3)->create();
        Category::factory()->count(3)
        ->sequence(
            ['name' => 'Mẹo hữu ích'],
            ['name' => 'Kiến thức'],
            ['name' => 'Lập trình'],
        )->hasPosts(5)
        ->create();
    }
}
