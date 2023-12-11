<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome_cliente', 'email', 'nif', 'morada', 'telemovel', 'created_at', 'updated_at'];
    protected $primaryKey = 'cliente_id';
    protected $table = 'cliente';

    public $timestamps = true;

    use HasFactory;
}
