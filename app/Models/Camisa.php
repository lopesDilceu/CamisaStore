<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camisa extends Model
{
    use HasFactory;

    protected $table = "camisas";

    protected $fillable = ["uniforme","patrocinadores","numero", "nome", "tamanho", "quantidade", "observacao"];
}
