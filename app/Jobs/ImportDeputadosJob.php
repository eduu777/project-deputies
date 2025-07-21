<?php

namespace App\Jobs;

use App\Models\Deputado;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
                try{
                    $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/deputados/'.$d['id']);

                    if($response->successful()){

                        $details = $response->json()['dados'];
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
                                'nome_civil' => $details['nomeCivil'],
                                'situacao' => $details['ultimoStatus']['situacao'],
                                'cpf' => $details['cpf'],
                                'sexo' => $details['sexo'],
                                'data_nascimento' => $details['dataNascimento'],
                                'uf_nascimento' => $details['ufNascimento'],
                                'municipio_nascimento' => $details['municipioNascimento']
                            ]
                        );

                        Log::info("Deputado atualizado: ID {$d['id']} - {$d['nome']}");
                    }else{
                        Log::warning("Falha ao buscar detalhes do deputado ID {$d['id']}");
                    }
                }catch (\Exception $e) {
                        Log::error("Erro ao processar deputado ID {$d['id']}: " . $e->getMessage());
                }
                sleep(1);
            }
        }
    }
}
