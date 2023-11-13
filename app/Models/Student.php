<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const CO='co_mat';
    const KO='vang_mat';
    use HasFactory;
    protected $fillable=[
        'tenlop',
        'masv',
        'tensv',
        'image',
        'status',
    ];
}
