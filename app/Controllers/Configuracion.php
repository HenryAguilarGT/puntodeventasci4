<?php
    namespace App\Controllers;

    use App\Models\configuracionModel;
    use App\Controllers\BaseController;

    class configuracion extends BaseController
    {
        protected $configuracion;
        protected $reglas;

        public function __construct()
        {
            $this->configuracion = new configuracionModel();
            helper(['form']);

            $this->reglas = [
                    'tienda_nombre' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ],
                'tienda_nit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ],
                'tienda_telefono' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ],
                'tienda_email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ],
                'tienda_direccion' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ],
                'factura_leyenda' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ]
            ];
        }

        public function index()
        {
            $nombre = $this->configuracion->where('nombre', 'tienda_nombre')->first();
            $nit = $this->configuracion->where('nombre', 'tienda_nit')->first();
            $telefono = $this->configuracion->where('nombre', 'tienda_telefono')->first();
            $email = $this->configuracion->where('nombre', 'tienda_email')->first();
            $direccion = $this->configuracion->where('nombre', 'tienda_direccion')->first();
            $leyenda = $this->configuracion->where('nombre', 'factura_leyenda')->first();

            $data = [
		    'titulo' => 'Configuracion de tienda', 
		    'nombre' => $nombre, 
		    'nit' => $nit, 
		    'telefono' => $telefono, 
		    'email' => $email, 
		    'direccion' => $direccion, 
		    'leyenda' => $leyenda 
		            ];

            echo view('header');
            echo view('configuracion/configuracion', $data);
            echo view('footer');
        }

        public function actualizar()
        {
            if($this->request->getMethod() == "post" && $this->validate($this->reglas))
            {
            	$this->configuracion->whereIn('nombre', ['tienda_nombre'])->set(['valor' =>
            	$this->request->getPost('tienda_nombre')])->update();

            	$this->configuracion->whereIn('nombre', ['tienda_nit'])->set(['valor' =>
            	$this->request->getPost('tienda_nit')])->update();

            	$this->configuracion->whereIn('nombre', ['tienda_telefono'])->set(['valor' =>
            	$this->request->getPost('tienda_telefono')])->update();

            	$this->configuracion->whereIn('nombre', ['tienda_email'])->set(['valor' =>
            	$this->request->getPost('tienda_email')])->update();

            	$this->configuracion->whereIn('nombre', ['tienda_direccion'])->set(['valor' =>
            	$this->request->getPost('tienda_direccion')])->update();

            	$this->configuracion->whereIn('nombre', ['factura_leyenda'])->set(['valor' =>
            	$this->request->getPost('factura_leyenda')])->update();

            	return redirect()->to(base_url().'/configuracion');
            } 
            else
            {
                // return $this->editar($this->request->getPost('id'), $this->validator);
            }
        }

    }
