<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{

    public function run(): void
    {
        // $type = Type::inRandomOrder()->first();
        $newProject = new Project();
        $newProject->name_project = 'Laravel 1';
        $newProject->slug = Str::slug($newProject->name_project, '-');
        $newProject->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newProject->group = true;
        // Per ora date lo tolgo perché dava errore
        $newProject->date = now();
        $newProject->type_id = Type::inRandomOrder()->first()->id;
        $newProject->save();

        // $type = Type::inRandomOrder()->first();
        $newProject = new Project();
        $newProject->name_project = 'Laravel 2';
        $newProject->slug = Str::slug($newProject->name_project, '-');
        $newProject->description = 'Il progetto Laravel 1 é stato fatto da luca.';
        $newProject->group = false;
        $newProject->date = now();
        $newProject->type_id = Type::inRandomOrder()->first()->id;
        $newProject->save();

        // $type = Type::inRandomOrder()->first();
        $newProject = new Project();
        $newProject->name_project = 'Laravel 3';
        $newProject->slug = Str::slug($newProject->name_project, '-');
        $newProject->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newProject->group = true;
        $newProject->date = now();
        $newProject->type_id = Type::inRandomOrder()->first()->id;
        $newProject->save();
    }
}
