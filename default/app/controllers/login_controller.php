<?php

class LoginController extends AppController
{

    public function index()
    {
        $pass = Input::post('pass');
        $user = Input::post('nombre');

        if($user=='elisa'&& $pass == '1234'){
            Session::set('active_info', ['pass'=>$pass, 'user'=>$user]);
            Flash::info("Usuario aceptado, user: $user pass: $pass");
            Redirect::to('index');

        }else{
            if($user && $pass)
            Flash::error("Incorrecto");

        }

    }
}