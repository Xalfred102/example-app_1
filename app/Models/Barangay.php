<?php
namespace App\Models;
// Barangay.php
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    // Barangay.php
protected $fillable = ['name', 'population', 'culture', 'image', 'municipality_id'];

public function municipality()
{
    return $this->belongsTo(Municipality::class, 'municipality_id', 'id');
}
}

