<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pagamento extends Model
{
    protected $fillable = ['tipo_pagamento_id', 'pedido_id', 'data_pagamento'];
    protected $primaryKey = 'pagamento_id';
    protected $table = 'pagamento';

    use HasFactory;

    public function tipoPagamento(): BelongsTo
    {
        return $this->belongsTo(TipoPagamento::class, 'tipo_pagamento_id');
    }

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

}
