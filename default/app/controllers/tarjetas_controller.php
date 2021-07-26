<?php
    
    class TarjetasController extends ScaffoldController{	

        public $model = 'Tarjetas';
        
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
    }