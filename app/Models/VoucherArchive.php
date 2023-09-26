<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherArchive extends Model
{
    use HasFactory;

    public $fillable = [
        'kode_voucher', 'nominal'
    ];
}
