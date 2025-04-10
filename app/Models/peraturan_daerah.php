<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan_daerah extends Model
{
    /** @use HasFactory<\Database\Factories\PeraturanDaerahFactory> */
    use HasFactory;
    protected $table = 'peraturan_daerah';
    protected $guarded = ['id'];
}
