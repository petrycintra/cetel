<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corpodocente extends Model
{
    use HasFactory;

    protected $fillable = [
        'office',
        'name',
        'surname',
        'perfil_photo',
        'paragraph_one',
        'paragraph_two',
        'paragraph_three',
    ];
}
