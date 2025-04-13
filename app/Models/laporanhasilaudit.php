<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporanhasilaudit extends Model
{
    /** @use HasFactory<\Database\Factories\LaporanhasilauditFactory> */
    use HasFactory;
    protected $table = 'laporanhasilaudit';
    protected $guarded = ['id'];
}
