<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $fillable = ['nome_fabricante', 'created_at',
        'updated_at'];
    protected $primaryKey = 'fabricante_id';
    protected $table = 'fabricante';

    public $timestamps = true;

    use HasFactory;
}
