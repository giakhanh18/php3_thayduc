<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khanh1 extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'image',
        'descrip',
        'status',
    ];
    const STATUS_DRAFT='draft';
    const STATUS_PUBLISHED='published';
}
