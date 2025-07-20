<?php

namespace App\Services;

use App\Models\Deputado;

class DeputadoService
{
    public function findAllDeputies(){
        return Deputado::paginate(12);
    }
}