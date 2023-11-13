<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clock extends Model
{
    use HasFactory;
    const CL='off';
    const CB='on';
    protected $fillable=[
        'image',
        'ten',
        'price',
        'price_sale',
        'status'
    ];
}
