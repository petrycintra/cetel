<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursopresencial extends Model
{
    use HasFactory;

    protected $fillable = [
        'quuestion',
        'description',
    ];
}
