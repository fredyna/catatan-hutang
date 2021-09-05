<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanHutang extends Model
{
    use HasFactory;

    protected $table = 'catatan_hutang';
    protected $guarded = [];
}
