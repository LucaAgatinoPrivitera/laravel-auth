<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name_project",
        "slug",
        "description",
        "group",
        "date",
        "type_id",
        'cover_image',
    ];

    // Relazione corretta: un project appartiene a un singolo type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
