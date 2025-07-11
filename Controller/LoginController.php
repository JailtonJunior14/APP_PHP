<?php


namespace App\Controller;

use App\Model\Login;

final class LoginController extends Controller{
    public static function index() : void{
        $erro = "";

        $model = new Login();

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $model->email = $_POST['email'];
            $model->senha = $_POST['senha'];

            $model = $model->logar();

            if($model !== null){
                $_SESSION["usuario_logado"]  = $model;
                if(isset($_POST['lembrar'])){
                    setcookie(
                        name: "sistema_biblioteca_usuario",
                        value: $model->email,
                        expires_or_options: time()+60*60*24*30
                    );
                }

                header("Location:/");
            }else
                $erro = "Email ou senha incorretos";
        }
        if(isset($_COOKIE['sistema_biblioteca_usuario']))
            $model->email = $_COOKIE['sistema_biblioteca_usuario'];
        include VIEWS . '/login/form_login.php';
    }

    public static function logout(){
        session_destroy();
        header("Location: /login");
    }

    public static function getUsuario() : Login{
        return unserialize(serialize($_SESSION['usuario_logado']));
    }
}