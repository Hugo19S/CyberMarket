<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imagem extends Model
{
    protected $fillable = ['produto_id', 'imagem_url'];
    protected $primaryKey = 'imagem_id';
    protected $table = 'imagem';
    use HasFactory;

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}
