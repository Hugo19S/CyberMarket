<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUtilizador extends Model
{
    protected $connection = 'mysql2';

    protected $fillable = ['tipo_utilizador_id', 'tipo_utilizador'];
    protected $primaryKey = 'tipo_utilizador_id';
    protected $table = 'tipo_utilizador';

    use HasFactory;
}
