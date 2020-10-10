<?php
    namespace App\Controllers;

    use App\Models\RolesModel;
    use App\Controllers\BaseController;

    class Roles extends BaseController
    {
        protected $roles;
        protected $reglas;

        public function __construct()
        {
            $this->roles = new rolesModel();
            helper(['form']);

            $this->reglas = [
                    'nombre' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El campo {field} es obligatorio.'
                    ]
                ]
            ];
        }

        public function index($activo = 1)
        {
            $roles = $this->roles->where('activo',$activo)->findAll();
            $data = ['titulo' => 'Roles de usuario', 'datos' => $roles];

            echo view('header');
            echo view('roles/roles', $data);
            echo view('footer');
        }

        public function eliminados($activo = 0)
        {
            $roles = $this->roles->where('activo',$activo)->findAll();
            $data = ['titulo' => 'Roles eliminados/inactivos', 'datos' => $roles];

            echo view('header');
            echo view('roles/eliminados', $data);
            echo view('footer');
        }

        public function nuevo()
        {
            $data = ['titulo' => 'Agregar role de usuario'];

            echo view('header');
            echo view('roles/nuevo', $data);
            echo view('footer');
        }

        public function insertar()
        {
            if($this->request->getMethod() == "post" && $this->validate($this->reglas))
            {
                $this->roles->save(
                	['nombre' => $this->request->getPost('nombre')
                	]);
                return redirect()->to(base_url().'/roles');
            } else 
            {
                $data = ['titulo' => 'Agregar role', 'validation' => $this->validator];

                echo view('header');
                echo view('roles/nuevo', $data);
                echo view('footer');
            }
        }

        public function editar($id, $valid=null)
        {
            $role = $this->roles->where('id',$id)->first();
            
            if($valid != null)
            {
                $data = ['titulo' => 'Editar role', 'datos' => $role, 'validation' => $valid];
            } else
            {
                $data = ['titulo' => 'Editar role', 'datos' => $role];
            }

            echo view('header');
            echo view('roles/editar', $data);
            echo view('footer');
        }

        public function actualizar()
        {
            if($this->request->getMethod() == "post" && $this->validate($this->reglas))
            {
            $this->roles->update($this->request->getPost('id'), 
            	['nombre' => $this->request->getPost('nombre')
            	]);

            return redirect()->to(base_url().'/roles');
            } else
            {
                return $this->editar($this->request->getPost('id'), $this->validator);
            }
        }

        public function eliminar($id)
        {
            $this->roles->update ($id, ['activo' => 0]);
            return redirect()->to(base_url().'/roles');
        }

        public function reingresar($id)
        {
            $this->roles->update ($id, ['activo' => 1]);
            return redirect()->to(base_url().'/roles/eliminados');
        }
    }
