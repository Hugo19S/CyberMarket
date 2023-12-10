<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome_categoria'];
    protected $primaryKey = 'categoria_id';
    protected $table = 'categoria';
    use HasFactory;
}
