<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan_presiden extends Model
{
    /** @use HasFactory<\Database\Factories\PeraturanPresidenFactory> */
    use HasFactory;
    protected $table = 'peraturan_presiden';
    protected $guarded = ['id'];
}
