<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deputado extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = false;

     protected $keyType = 'int';

     protected $fillable = [
    'id',
    'nome',
    'sigla_partido',
    'uri_partido',
    'sigla_uf',
    'id_legislatura',
    'url_foto',
    'email',
    'nome_civil',
    'situacao',
    'cpf',
    'sexo',
    'data_nascimento',
    'uf_nascimento',
    'municipio_nascimento',
];
}
