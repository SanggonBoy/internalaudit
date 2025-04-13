<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kertas_kerja extends Model
{
    /** @use HasFactory<\Database\Factories\KertasKerjaFactory> */
    use HasFactory;

    protected $table = 'kertas_kerja';
    protected $guarded = ['id'];
}
