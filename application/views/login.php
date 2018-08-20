<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>">
</head>
<body>
    <div class="container">
        <?php if(!$this->session->userdata("usuario_logado")) : ?>
        <h1>Login</h1>
        <?php
        //Criação de formulario
            echo form_open("login");
 
            echo form_label("Matricula", "matricula");
                echo form_input(array(
                        "name" => "matricula",
                        "id" => "matricula",
                        "class" => "form-control",
                        "naxlenth" => "255"
                    ));
            echo form_label("Senha", "senha");
                echo form_password(array(
                        "name" => "senha",
                        "id" => "senha",
                        "class" => "form-control",
                        "naxlenth" => "255"
                    )); 
            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Login",
                "type" => "submit"
            )); 
 
            echo form_close();
        ?>
</body>
</html>