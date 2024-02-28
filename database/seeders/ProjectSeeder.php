<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 25; $i++) {
            $project = new Project();
            $project->name = $faker->sentence(3);
            $project->slug = Str::slug($project->name, '-');
            $project->description = $faker->paragraph;
            $project->date_start = $faker->date;
            $project->date_end = $faker->optional()->date;

            $project->save();
        }
    }
}
