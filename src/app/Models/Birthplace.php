<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthplace extends Model
{
    use HasFactory;

    protected $fillable = [
        'place-name'
    ];

    public function friend() {
        return $this->belongsTo(Friend::class);
    }
}
