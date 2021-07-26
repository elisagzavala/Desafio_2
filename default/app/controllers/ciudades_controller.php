<?php
    
    class CiudadesController extends ScaffoldController{

        public $model = 'Ciudades';

        public function index()
        {
            $this->data = Utils::fetch_model( $this->controller_name);
        }

        public function editar( int $id )
        {
            $this->id = $id;
            $this->data = Utils::fetch_model( $this->controller_name);
        }

        public function crear()
        {
            $this->data = Utils::fetch_model( $this->controller_name);
        }

        public function listar()
        {
            $this->data = Utils::fetch_model( $this->controller_name);
        }

        public function detalles(int $id)
        {
            # code...
            $this->id = $id;
            $this->data = Utils::fetch_model( $this->controller_name);
        }
    
    
        public function get($id = 0){

            $Nombre = new Nombre();
            $this->data = $Nombre->find_first_by_id($id);
        }

        public function post($id = 0){
            $Nombre = new Nombre();
            $this->data = $Nombre->find_first_by_id($id);
        }

        public function put($id = 0){
            $Nombre = new Nombre();
            $this->data = $Nombre->find_first_by_id($id);
        }

        public function delete($id = 0){
            $Nombre = new Nombre();
            $this->data = $Nombre->find_first_by_id($id);
        }
    
    }