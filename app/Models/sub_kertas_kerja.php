<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_kertas_kerja extends Model
{
    use HasFactory;

    protected $table = 'sub_kertas_kerja';
    protected $guarded = ['id'];
    protected $with = ['kertasKerja'];

    public function kertasKerja()
    {
        return $this->belongsTo(kertas_kerja::class, 'kertas_kerja_id', 'id');
    }
}

