<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsal extends Model
{
    protected $table = 'sub_sales';

    protected $fillable = [
        'Scid', 'Sfrom'
    ];
}
