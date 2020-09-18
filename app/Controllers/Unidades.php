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
            $data = ['titulo' => 'Unidades', 'datos' => $unidades];

            echo view('header');
            echo view('unidades/unidades', $data);
            echo view('footer');
        }
    }
