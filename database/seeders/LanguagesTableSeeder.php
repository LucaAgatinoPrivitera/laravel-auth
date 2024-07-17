<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assicurati che i progetti esistano
        $project1 = Project::find(1);
        $project2 = Project::find(2);
        $project3 = Project::find(3);

        if ($project1 && $project2 && $project3) {
            $newLanguage = new Language();
            $newLanguage->name_lang = 'HTML';
            $newLanguage->description = 'Descrizione HTML';
            $newLanguage->icon = "prova";
            $newLanguage->save();
            $newLanguage->projects()->attach([$project1->id, $project2->id, $project3->id]);

            $newLanguage = new Language();
            $newLanguage->name_lang = 'CSS';
            $newLanguage->description = 'Descrizione CSS';
            $newLanguage->icon = "prova2";
            $newLanguage->save();
            $newLanguage->projects()->attach([$project1->id]);

            $newLanguage = new Language();
            $newLanguage->name_lang = 'JavaScript';
            $newLanguage->description = 'Descrizione JavaScript';
            $newLanguage->icon = "prova3";
            $newLanguage->save();
            $newLanguage->projects()->attach([$project1->id, $project3->id]);
        }
    }
}

/* prima lo avevo così
<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    
     * Run the database seeds.
     
    public function run(): void
    {
        $newLanguage = new Language();
        $newLanguage->name_lang = 'HTML';
        $newLanguage->description = 'Descrizione HTML';
        $newLanguage->icon = "prova";
        // $newLanguage->project_id = Project::inRandomOrder()->first()->id;
        // Per ora date lo tolgo perché dava errore
        $newLanguage->save();
        $newLanguage->projects()->attach([1,2,3]);

        $newLanguage = new Language();
        $newLanguage->name_lang = 'CSS';
        $newLanguage->description = 'Descrizione CSS';
        $newLanguage->icon = "prova2";
        // Per ora date lo tolgo perché dava errore
        $newLanguage->save();
        $newLanguage->projects()->attach([1]);

        $newLanguage = new Language();
        $newLanguage->name_lang = 'JavaScript';
        $newLanguage->description = 'Descrizione JavaScript';
        $newLanguage->icon = "prova3";
        // Per ora date lo tolgo perché dava errore
        $newLanguage->save();
        $newLanguage->projects()->attach([1,3]);
    }
}
*/

