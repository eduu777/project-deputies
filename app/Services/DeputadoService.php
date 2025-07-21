<?php

namespace App\Services;

use App\Models\Deputado;

class DeputadoService
{

    private $deputado;
    public function __construct()
    {
        $this->deputado = new Deputado();
    }

    public function findAllDeputies(){
        return $this->deputado->paginate(12);
    }

    public function findDeputieById(String $id){
        return $this->deputado->where('id', $id)->first();
    }
}