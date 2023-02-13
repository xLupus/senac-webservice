<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class categoriasController extends Controller
{
    public function listarCategorias()
    {
        $client = new Client(['base_uri' => 'http://hostwind.lucianoconde.net']);
        $response = $client->request('GET', '/disciplinaws202301/demomaster/api/categorias');
        $saida = json_decode( $response->getBody());

        return view('listarcategorias', ["categorias" => $saida]);
    }
}
