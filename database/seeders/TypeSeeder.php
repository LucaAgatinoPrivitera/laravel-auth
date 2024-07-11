<?php

namespace Database\Seeders;

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
        $newType = new Type();
        $newType->name_type = 'Laravel 1';
        $newType->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newType->icon = "prova";
        $newType->save();
    }
}
