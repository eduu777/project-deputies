<?php

namespace App\Jobs;

use App\Models\Deputado;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class ImportDeputadosJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/deputados');

        if($response->successful()) {
            $deputados = $response->json()['dados'];

            foreach($deputados as $d){
                Deputado::updateOrCreate(
                    ['id' => $d['id']],
                    [
                        'nome' => $d['nome'],
                        'sigla_partido' => $d['siglaPartido'],
                        'uri_partido' => $d['uriPartido'],
                        'sigla_uf' => $d['siglaUf'],
                        'id_legislatura' => $d['idLegislatura'],
                        'url_foto' => $d['urlFoto'],
                        'email' => $d['email'] ?? null,
                    ]
                );
            }
        }
    }
}
