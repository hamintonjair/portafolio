<?php

namespace App\Models;

use CodeIgniter\Model;

class ProyectoModel extends Model
{
    protected $table = 'proyectos';
    protected $allowedFields = ['titulo', 'descripcion', 'imagen', 'url_demo','anio_desarrollo','tipo_proyecto','tecnologias',
    'url_repo','url_youtube'];

    public function getProyectos()
    {
        return $this->findAll();
    }
}