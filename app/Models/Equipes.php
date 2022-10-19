<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipes extends Model
{
    use HasFactory;

    protected $id = 'id';
    protected $fillable = [
        'pays','drapeau','groupe_id','created_at','updated_at'
    ];
}
