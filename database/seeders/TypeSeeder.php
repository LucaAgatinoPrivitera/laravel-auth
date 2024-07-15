<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['name_type' => 'Front-end',
             'description' => 'Progetto Front-end',
              'icon' => 'icon-frontend'],
            ['name_type' => 'Back-end',
             'description' => 'Progetto Back-end',
              'icon' => 'icon-backend'],
            ['name_type' => 'Full stack', 'description' => 'Progetto Full stack', 'icon' => 'icon-fullstack'],
            ['name_type' => 'Design', 'description' => 'Progetto Design', 'icon' => 'icon-design'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
