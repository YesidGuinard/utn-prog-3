<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Utils\iCRUD;
use App\Models\P2Turnos;

class TurnosController /* implements iCRUD  */{
    public function getAll(Request $request, Response $response) {
        $response->getBody()->write("getAll turnos");
        return $response;
    }
    public function getOne(Request $request, Response $response) {
        $response->getBody()->write("getOne turno");
        return $response;
    }
    public function add(Request $request, Response $response) {
        $response->getBody()->write("add turno");
        return $response;
    }
    public function update(Request $request, Response $response) {
        $response->getBody()->write("update turno");
        return $response;
    }
    public function delete(Request $request, Response $response) {
        $response->getBody()->write("delete turno");
        return $response;
    }
}
