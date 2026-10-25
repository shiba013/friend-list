<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'birthdate',
        'prefecture',
        'prefecture_code',
        'tel',
        'email',
        'feature',
        'good_point',
        'bad_point',
        'memo',
    ];
}
