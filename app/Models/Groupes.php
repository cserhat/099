<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupes extends Model
{
    use HasFactory;
    protected $id = 'id';
    protected $fillable = [
        'groupe'
    ];
}
