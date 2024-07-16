<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newLanguage = new Language();
        $newLanguage->name_lang = 'Laravel 1';
        $newLanguage->description = 'Il progetto Laravel 1 é stato fatto da luca, nichola e ciccio.';
        $newLanguage->icon = "prova";
        // Per ora date lo tolgo perché dava errore
        $newLanguage->save();
    }
}
