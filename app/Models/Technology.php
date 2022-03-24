<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{

    protected $fillable = [
        'name','image'
    ];

    use HasFactory;
}