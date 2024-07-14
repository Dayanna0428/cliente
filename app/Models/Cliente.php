<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use HasFactory;

    protected $guarded= [];

    public function proyectos(){
        return $this->hasMany(Proyecto::class);
    }
    
};