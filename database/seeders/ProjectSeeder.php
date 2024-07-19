<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->name = $faker->sentence(5); 
            $project->description = $faker->text(500);
            $project->slug = Str::of($project->name)->slug();
            $project->save();
        }
    }
}
