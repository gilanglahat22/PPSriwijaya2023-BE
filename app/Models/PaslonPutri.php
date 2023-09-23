<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaslonPutri extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'count_vote', 'path', 'asal_daerah'
    ];
}