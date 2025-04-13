<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan_internasional extends Model
{
    /** @use HasFactory<\Database\Factories\PeraturanInternasionalFactory> */
    use HasFactory;
    protected $table = 'peraturan_internasional';
    protected $guarded = ['id'];
}
