<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan_menteri extends Model
{
    /** @use HasFactory<\Database\Factories\PeraturanMenteriFactory> */
    use HasFactory;

    protected $table = 'peraturan_menteri';
    protected $guarded = ['id'];
}
