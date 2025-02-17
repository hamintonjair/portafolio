<?php

namespace App\Controllers;

use App\Models\PerfilModel;
use App\Models\ProyectoModel;

class DashboardController extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        echo view('dashboard/header');
        echo view('dashboard/sidebar');
        echo view('dashboard/body');
        echo view('dashboard/footer');
    }

    public function perfil()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $model = new PerfilModel();
        $data['perfil'] = $model->first();

        echo view('dashboard/header');
        echo view('dashboard/sidebar');
        echo view('dashboard/perfil', $data);
        echo view('dashboard/footer');
    }

    public function guardarPerfil()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $model = new PerfilModel();
        $id = $this->request->getPost('id');
        $perfil = $model->find($id); // Obtener los datos actuales del proyecto

        if (!$perfil) {
            return $this->response->setJSON(['success' => false, 'message' => 'Proyecto no encontrado']);
        }
       
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'facebook' => $this->request->getPost('facebook'),
            'git' => $this->request->getPost('git'),
            'linkedin' => $this->request->getPost('linkedin'),
            'instagram' => $this->request->getPost('instagram'),
            'youtube' => $this->request->getPost('youtube'),
            'telefono' => $this->request->getPost('telefono'),
            'correo' => $this->request->getPost('correo'),
            'frase' => $this->request->getPost('frase'),
            'descripcion' => $this->request->getPost('descripcion'),
            
        ];

        // Manejo de la imagen
        $imagen = $this->request->getFile('imagen');

        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            // Eliminar la imagen anterior si existe
            if (!empty($perfil['imagen'])) {
                $rutaImagenAnterior = ROOTPATH . 'public/uploads/' . $perfil['imagen'];
                if (file_exists($rutaImagenAnterior)) {
                    unlink($rutaImagenAnterior);
                }
            }

            // Guardar la nueva imagen
            $newName = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/uploads', $newName);
            $data['imagen'] = $newName;
        } else {
            // Mantener la imagen anterior si no se sube una nueva
            $data['imagen'] = $perfil['imagen'];
        }


        $model->update($id, $data);
        return redirect()->to('/dashboard/perfil')->with('success', 'Perfil actualizado correctamente');
    }


    public function proyectos()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $data['title'] = 'Proyectos';

        echo view('dashboard/header');
        echo view('dashboard/sidebar');
        echo view('dashboard/proyectos', $data);
        echo view('dashboard/footer');
    }


    public function listarProyectos()
    {
        $model = new ProyectoModel(); // Asegúrate de que este modelo esté correctamente configurado
        $proyectos = $model->findAll(); // Obtener todos los proyectos

        // Limitar la descripción a las primeras 30 palabras
        foreach ($proyectos as &$proyecto) {
            $proyecto['descripcion'] = implode(' ', array_slice(explode(' ', $proyecto['descripcion']), 0, 30));
        }

        return $this->response->setJSON(['data' => $proyectos]); // Devolver los datos en formato JSON
    }

    public function guardar()
    {

        $model = new ProyectoModel();

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'url_demo' => $this->request->getPost('url_demo'),
            'anio_desarrollo' => $this->request->getPost('anio_desarrollo'),
            'tipo_proyecto' => $this->request->getPost('tipo_proyecto'),
            'tecnologias' => $this->request->getPost('tecnologias'),
            'url_repo' => $this->request->getPost('url_repo'),
            'url_youtube' => $this->request->getPost('url_youtube'),
        ];

        // Subir imagen si se proporciona
        if ($imagen = $this->request->getFile('imagen')) {
            if ($imagen->isValid() && !$imagen->hasMoved()) {
                $newName = $imagen->getRandomName();
                $imagen->move(ROOTPATH . 'public/uploads', $newName);
                $data['imagen'] = $newName;
            }
        }

        $model->save($data);
        return $this->response->setJSON(['success' => true, 'message' => 'Proyecto guardado correctamente']);
    }
    public function update($id)
    {

        $model = new ProyectoModel();
        $proyecto = $model->find($id); // Obtener los datos actuales del proyecto

        if (!$proyecto) {
            return $this->response->setJSON(['success' => false, 'message' => 'Proyecto no encontrado']);
        }

        $data = [
            'id' => $id,
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'url_demo' => $this->request->getPost('url_demo'),
            'anio_desarrollo' => $this->request->getPost('anio_desarrollo'),
            'tipo_proyecto' => $this->request->getPost('tipo_proyecto'),
            'tecnologias' => $this->request->getPost('tecnologias'),
            'url_repo' => $this->request->getPost('url_repo'),
            'url_youtube' => $this->request->getPost('url_youtube'),

        ];

        // Manejo de la imagen
        $imagen = $this->request->getFile('imagen');

        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            // Eliminar la imagen anterior si existe
            if (!empty($proyecto['imagen'])) {
                $rutaImagenAnterior = ROOTPATH . 'public/uploads/' . $proyecto['imagen'];
                if (file_exists($rutaImagenAnterior)) {
                    unlink($rutaImagenAnterior);
                }
            }

            // Guardar la nueva imagen
            $newName = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/uploads', $newName);
            $data['imagen'] = $newName;
        } else {
            // Mantener la imagen anterior si no se sube una nueva
            $data['imagen'] = $proyecto['imagen'];
        }

        $model->update($id, $data);
        return $this->response->setJSON(['success' => true, 'message' => 'Proyecto actualizado correctamente']);
    }

    public function obtener($id)
    {

        $model = new ProyectoModel();
        $proyecto = $model->find($id);

        return $this->response->setJSON(['proyecto' => $proyecto]);
    }
    public function eliminar($id)
    {
        $model = new ProyectoModel();

        // Obtener el proyecto
        $proyecto = $model->find($id);

        if ($proyecto) {
            // Eliminar la imagen si existe
            if (!empty($proyecto['imagen'])) {
                $rutaImagen = ROOTPATH . 'public/uploads/' . $proyecto['imagen'];
                if (file_exists($rutaImagen)) {
                    unlink($rutaImagen); // Eliminar el archivo de imagen
                }
            }

            // Eliminar el proyecto de la base de datos
            $model->delete($id);

            return $this->response->setJSON(['success' => true, 'message' => 'Proyecto eliminado']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Proyecto no encontrado']);
        }
    }
}