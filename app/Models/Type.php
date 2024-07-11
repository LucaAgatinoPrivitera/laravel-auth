<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        "name_type",
        "description",
        "icon"
    ];

    /* Dopo lo rimetto almeno vedo che fa
    
    //Dalle Category recupera i Projects collegati
    public function projects()
    {
        return $this->hasMany(Project::class);
    }*/
}
