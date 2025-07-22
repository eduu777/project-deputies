<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PartidoService;

class PartidoController extends Controller
{
    protected $service;

    public function __construct(PartidoService $service)
    {
        $this->service = $service;
    }

    public function index(){
        $partidos = $this->service->findAllParties();

        return view('partidos.partidos', ['partidos' => $partidos]);
    }
}
