<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newProject = new Project();

            $newProject->title = $faker->words(3,true);
            $newProject->description = $faker->paragraph();
            $newProject->image = $faker->imageUrl(640, 480, null, true);
            $newProject->save();
        }
    }
}
