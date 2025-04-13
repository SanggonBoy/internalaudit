<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beritaacara extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaacaraFactory> */
    use HasFactory;
    protected $table = 'beritaacara';
    protected $guarded = ['id'];
}
