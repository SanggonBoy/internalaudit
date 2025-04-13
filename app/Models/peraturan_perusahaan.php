<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan_perusahaan extends Model
{
    /** @use HasFactory<\Database\Factories\PeraturanPerusahaanFactory> */
    use HasFactory;
    protected $table = 'peraturan_perusahaan';
    protected $guarded = ['id'];
}
