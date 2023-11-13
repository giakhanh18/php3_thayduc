<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'excerpt',
        'is_active',
    ];
    const BOOLEAN_ONE='1';
    const BOOLEAN_ZERO='0';
}
