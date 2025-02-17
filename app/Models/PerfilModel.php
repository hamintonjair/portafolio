<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model
{
    protected $table = 'perfil';
    protected $allowedFields = ['titulo', 'descripcion', 'imagen','facebook','git','linkedin','instagram','youtube',
'telefono','correo','frase'];

    public function getPerfil()
    {
        return $this->first();
    }
}