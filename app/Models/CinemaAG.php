<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaAG extends Model
{
    use HasFactory;
    protected $table = 'cinemas';
    protected $fillable = ['nome', 'idade', 'filme', 'nomefilme', 'faixaetaria', 'capacidadesala'];
}
