<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $fillable = ['nome_fabricante'];
    protected $primaryKey = 'fabricante_id';
    protected $table = 'fabricante';
    use HasFactory;
}
