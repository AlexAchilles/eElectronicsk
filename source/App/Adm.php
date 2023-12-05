<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Adm
{
    private $view;

    public function __construct ()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/admin","php");
    }

    public function home()
    {
        echo "Olá, eu sou o Adm!";
        echo $this->view->render("home");
    }

    public function productRegister(){
        echo $this->view->render("products-register");
    }    
    
    public function usuarios(){
        echo $this->view->render("profiles");

        $users = new User();
        
        echo $this->view->render("profiles", [
            "users" => $users->selectAll()
        ]);
    }

       

}