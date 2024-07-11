<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::inRandomOrder()->first();
        $newType = new Type();
        $newType->name_type = 'Front-end';
        $newType->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newType->icon = "prova";
        $newType->project_id = $project->id;
        $newType->save();

        $newType = new Type();
        $newType->name_type = 'Back-end';
        $newType->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newType->icon = "prova";
        $newType->project_id = $project->id;
        $newType->save();

        $newType = new Type();
        $newType->name_type = 'Full stack';
        $newType->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newType->icon = "prova";
        $newType->project_id = $project->id;
        $newType->save();

        $newType = new Type();
        $newType->name_type = 'Design';
        $newType->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newType->icon = "prova";
        $newType->project_id = $project->id;
        $newType->save();
    }
}
