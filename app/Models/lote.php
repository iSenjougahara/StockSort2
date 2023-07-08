<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lote extends Model
{
    use HasFactory;
   public function product()
{
    return $this->belongsTo(Produto::class,'produto_id');
}

public function movimentos()
{
    return $this->hasMany(Movimento::class);
}
}