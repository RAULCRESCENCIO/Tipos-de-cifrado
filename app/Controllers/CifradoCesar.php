<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CifradoCesar extends BaseController {

    public function __construct() {
        helper('url'); // Cargar el helper 'url'
    }
    
    public function index() {
        return view('view_cifrado_cesar');
    }

    // Este método procesará la solicitud si decides enviar el formulario
    public function procesarFormulario() {
        $mensaje = $this->request->getPost('mensaje');
        $columnas = intval($this->request->getPost('columnas'));
        $accion = $this->request->getPost('accion');

        if ($accion === 'cifrar') {
            // Lógica de cifrado
        } elseif ($accion === 'descifrar') {
            // Lógica de descifrado
        }
    }
}