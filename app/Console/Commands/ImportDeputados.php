<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ImportDeputadosJob;
use Illuminate\Support\Facades\Log;

class ImportDeputados extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-deputados';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import API deputies from the Chamber';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         Log::info('ImportDeputados executado em: ' . now());

        ImportDeputadosJob::dispatch();

        $this->info('Job de importação disparado!');
    }
}
