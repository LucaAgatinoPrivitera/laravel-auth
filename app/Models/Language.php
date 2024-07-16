<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        "name_lang",
        "description",
        "icon",
        // "project_id",
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    
    public $timestamps = false;
}
