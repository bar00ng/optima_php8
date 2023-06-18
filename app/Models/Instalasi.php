<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalasi extends Model
{
    protected $table = 'instalasi';
    
    protected $fillable = [
        'lop_id'
    ];

    use HasFactory;
}