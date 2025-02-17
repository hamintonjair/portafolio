<?php

namespace App\Controllers;
use App\Models\ProyectoModel;
use App\Models\PerfilModel;
class Home extends BaseController
{
  
    public function index()
    {
        $perfilModel = new PerfilModel();
        $proyectoModel = new ProyectoModel();

        $data['perfil'] = $perfilModel->getPerfil();
        $data['proyectos'] = $proyectoModel->getProyectos();

        echo view('header');
        echo view('portafolio', $data);
        echo view('footer', $data);
    }
    public function contactos()
    {
        return view('contactos');
    }

    public function videos()
    {
        $perfilModel = new PerfilModel();
        $proyectoModel = new ProyectoModel();

        $data['perfil'] = $perfilModel->getPerfil();
        $data['proyectos'] = $proyectoModel->getProyectos();

        echo view('header');
        echo view('videos', $data);
        echo view('footer');
    }
}