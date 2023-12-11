<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome_categoria',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'categoria_id';
    protected $table = 'categoria';

    public $timestamps = true;
    use HasFactory;
}
