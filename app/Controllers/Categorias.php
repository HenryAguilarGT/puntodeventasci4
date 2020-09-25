<?php
    namespace App\Controllers;

    use App\Models\CategoriasModel;
    use App\Controllers\BaseController;

    class Categorias extends BaseController
    {
        protected $categorias;

        public funcition __construct()
        {
            $this->categorias = new CategoriasModel();
        }

        public function index($activo = 1)
        {
            $categorias = $this->categorias->where('activo',$activo)->findAll();
            $data = ['titulo' => 'Categorias de Producto', 'datos' => $categorias];

            echo view('header');
            echo view('unidades/categorias', $data);
            echo view('footer');
        }
    }
