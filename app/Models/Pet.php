<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['name_pet', 'date_birth_pet', 'pet_type', 'weight_pet','breed_pet','other_breed','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
