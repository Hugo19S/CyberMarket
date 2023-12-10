<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PedidoProduto extends Model
{

    protected $fillable = ['pedido_id', 'produto_id', 'quantidade'];
    protected $primaryKey = 'pedido_produto_id';
    protected $table = 'pedido_produto';


    use HasFactory;


    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}
