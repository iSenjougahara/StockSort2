<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;

    public function lote()
    {
        return $this->belongsTo(lote::class,'lote_id');
    }
}
