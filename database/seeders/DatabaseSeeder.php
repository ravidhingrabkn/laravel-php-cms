<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Seeder;
use App\Models\Social;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Social::truncate();

        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Social::factory()->count(3)->create();    
    }
}
