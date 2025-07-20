<?php

use Illuminate\Console\Scheduling\Schedule;

// Agendamento do comando para importar os deputados
app(Schedule::class)->command('app:import-deputados')->dailyAt('00:20');