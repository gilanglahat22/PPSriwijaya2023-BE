<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaslonPutra extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'count_vote', 'path', 'persentase','asal_daerah'
    ];
}