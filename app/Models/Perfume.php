<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'perfumes';
    protected $fillable = ['nome', 'fragrancia', 'percent_agua', 'percent_alcool', 'percent_fragrancia', 'total_produzido', 'preco'];
}
