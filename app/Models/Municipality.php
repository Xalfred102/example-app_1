<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['name', 'general_info', 'population', 'image', 'culture', 'culture_image'];

    public function barangayList()
    {
        return $this->hasMany(Barangay::class, 'municipality_id', 'id');
    }
}



