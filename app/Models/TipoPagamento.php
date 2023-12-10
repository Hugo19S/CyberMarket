<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPagamento extends Model
{
    protected $fillable = ['nome_tipo_pagamento'];
    protected $primaryKey = 'tipo_pagamento_id';
    protected $table = 'tipo_pagamento';


    use HasFactory;
}
