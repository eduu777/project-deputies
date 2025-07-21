<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeputadoService;

class DeputadoController extends Controller
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

    public function listById(String $id) {
        $deputado = $this->service->findDeputieById($id);

       return view('deputados.deputado', ['deputado' => $deputado]);
    }
}
