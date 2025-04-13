<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan_direksi extends Model
{
    /** @use HasFactory<\Database\Factories\PeraturanDireksiFactory> */
    use HasFactory;
    protected $table = 'peraturan_direksi';
    protected $guarded = ['id'];
}
