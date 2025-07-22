<?php

namespace App\Services;

use App\Models\Deputado;
use Illuminate\Support\Facades\Http;

class DeputadoService
{

    private $deputado;
    public function __construct(Deputado $deputado)
    {
        $this->deputado = $deputado;
    }

    public function findAllDeputies(){
        $response = $this->deputado->paginate(12);
        return $response;
    }

    public function findDeputieById(String $id){
        $response = $this->deputado->where('id', $id)->first();
        return $response;
    }

    public function findExpenseValueById(String $id){
        $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/deputados/'.$id.'/despesas');
        if ($response->successful()) {

            $valor = 0;
            $despesas = $response->json()['dados'];

            foreach ($despesas as $d){
                $valor += floatval($d['valorLiquido']);
            }

            return $valor;
        }
        return ['error' => 'Erro ao buscar despesas'];
    }

    public function findProfessionsById(String $id){
        $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/deputados/'.$id.'/profissoes');
        if ($response->successful()) {
             return $response->json()['dados'];
        }
        return ['error' => 'Erro ao buscar despesas'];
    }
}