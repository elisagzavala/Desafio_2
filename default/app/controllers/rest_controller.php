<?php 

class ServicesController extends RestController{
    public function get($id = 0){
        $Inventario = new Inventario();
        $this->data = $Inventario->find_first_by_id($id);
    }

}
