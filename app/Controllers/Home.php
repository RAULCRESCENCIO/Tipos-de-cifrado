<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $data['contenido1'] = view('view_cifrado_cesar'); // Cargar la segunda vista
        $data['contenido2'] = view('view_cifrado_escitala'); // Cargar la segunda vista
        $data['contenido3'] = view('view_cifrado_aes'); // Cargar la segunda vista
        $data['contenido4'] = view('view_cifrado_rsa'); // Cargar la segunda vista
        $data['contenido5'] = view('view_cifrado_md5'); // Cargar la segunda vista
        view('Boby', $data); 

        $data2['contenido1'] = view('menu'); // Cargar la primera vista
        $data2['contenido2'] = view('Boby'); // Cargar la segunda vista
        $data2['contenido3'] = view('fonter'); // Cargar la segunda vista

        // Pasar los datos a la vista principal
        return view('vista_principal', $data2); 
    }
}
