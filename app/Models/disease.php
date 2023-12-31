<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disease extends Model
{
    use HasFactory;
    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'symptom_disease_mappings');
      
    }
}
