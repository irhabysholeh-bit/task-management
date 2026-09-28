<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate minimal 5 data dummy per tabel
        User::factory(5)->create();
        Category::factory(5)->create();
        Project::factory(5)->create();
        Task::factory(5)->create();
    }
}