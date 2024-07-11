<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Creato con:
        //php artisan make:migration add_category_id_foreing_key_to_projects_table
        //Oppure può essere accettabile anche:
        //php artisan make:migration update_projects_table
        Schema::table('types', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->dropForeign(['project_id']); // Rimuove la chiave esterna
            $table->dropColumn('project_id'); // Rimuove la colonna
        });
    }
};
