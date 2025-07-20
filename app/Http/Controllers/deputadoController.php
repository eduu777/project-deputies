<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeputadoService;

class deputadoController extends Controller
{

    protected $service;

    public function __construct(DeputadoService $service)
    {
        $this->service = $service;
    }

    public function index() {
        $deputados = $this->service->findAllDeputies();

        return view('welcome', ['deputados' => $deputados]);
    }
}
