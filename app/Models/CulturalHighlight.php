<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulturalHighlight extends Model
{
    use HasFactory;

    protected $fillable = ['municipality_id', 'title', 'link'];

    public function culturalHighlights()
    {
        return $this->hasMany(CulturalHighlight::class);
    }
    
}
