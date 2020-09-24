<?php
    namespace App\Controllers;

    use App\Models\UnidadesModel;
    use App\Controllers\BaseController;

    class Unidades extends BaseController
    {
        protected $unidades;

        public function __construct()
        {
            $this->unidades = new UnidadesModel();
        }

        public function index($activo = 1)
        {
            $unidades = $this->unidades->where('activo',$activo)->findAll();
            $data = ['titulo' => 'Unidades de producto', 'datos' => $unidades];

            echo view('header');
            echo view('unidades/unidades', $data);
            echo view('footer');
        }

        public function nuevo()
        {
            $data = ['titulo' => 'Agregar unidad'];

            echo view('header');
            echo view('unidades/nuevo', $data);
            echo view('footer');
        }

        public function insertar()
        {
            $this->unidades->save(['nombre' => $this->request->getPost('nombre'), 'nombre_corto' => $this->request->getPost('nombre_corto')]);
            return redirect()->to(base_url().'/unidades');
        }
    }
