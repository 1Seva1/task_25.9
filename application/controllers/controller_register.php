<?php

class Controller_Register extends Controller
{
    function __construct()
    {
        $this->model = new Model_Register();
        $this->view = new View();
    }
    function action_index()
    {
        if (!empty($_POST)) {
            
            if (count($this->model->checkData()) == 0) {
                $this->model->addUser();
                var_dump($_POST);
            }else
            {
                $err = $this->model->checkData();
                print "<b>При регистрации произошли следующие ошибки:</b><br>";
                foreach($err as $error)
                {
                    echo $error."<br>";
                }
            }
        }
        $this->view->generate('register_view.php', 'template_view.php');
    }
public function register()
{
    $this->model->addUser();
}
}
