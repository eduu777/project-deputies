<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PartidoService
{
    public function findAllParties()
    {
        $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/partidos');

        if ($response->successful()) {
            return $response->json()['dados'] ?? [];
        }

        return [];
    }
}
