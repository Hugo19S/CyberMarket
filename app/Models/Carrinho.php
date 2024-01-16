<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model

{

    protected $fillable = ['cliente_id', 'produto_id', 'quantidade', 'status'];
    protected $primaryKey = 'carrinho_id';
    protected $table = 'carrinho';

    use HasFactory;

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
